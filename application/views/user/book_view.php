<!DOCTYPE html>
<html>
<head>
    <title>PDF Viewer</title>
    <script src="<?php echo base_url('assets/pdfjs/src/pdf.js'); ?>"></script>
    <style>
        #pdf-viewer {
            width: 100%;
            height: 100vh;
            overflow: auto;
        }
    </style>
</head>
<body>
    <div id="pdf-viewer"></div>
    <script>
        // URL ke file PDF
        var url = '<?php echo base_url('assets/pdf/' . $pdf_file); ?>';

        // Inisialisasi PDF.js
        pdfjsLib.GlobalWorkerOptions.workerSrc = '<?php echo base_url('assets/pdfjs/src/pdf.worker.js'); ?>';

        var loadingTask = pdfjsLib.getDocument(url);
        loadingTask.promise.then(function(pdf) {
            console.log('PDF loaded');

            // Ambil halaman pertama
            pdf.getPage(1).then(function(page) {
                console.log('Page loaded');

                var scale = 1.5;
                var viewport = page.getViewport({ scale: scale });

                // Siapkan canvas menggunakan ukuran halaman
                var canvas = document.createElement('canvas');
                var context = canvas.getContext('2d');
                canvas.height = viewport.height;
                canvas.width = viewport.width;
                document.getElementById('pdf-viewer').appendChild(canvas);

                var renderContext = {
                    canvasContext: context,
                    viewport: viewport
                };
                var renderTask = page.render(renderContext);
                renderTask.promise.then(function() {
                    console.log('Page rendered');
                });
            });
        }, function (reason) {
            console.error(reason);
        });
    </script>
</body>
</html>
