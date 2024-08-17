<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $buku->judul ?></title>
        <link rel="stylesheet" href="<?php echo base_url('assets/pdfjs/web/viewer.css'); ?>">
        <!-- <script src="<?php echo base_url('assets/pdfjs/src/pdf.js'); ?>"></script> -->
        <!-- <script src="<?php echo base_url('assets/pdfjs/web/viewer.js'); ?>"></script> -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.2.146/pdf.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.2.146/pdf.worker.min.js"></script>
    </head>
    <body>
        <div id="pdf-container"></div>

        <script>
        const url = <?= site_url('user/koleksi/proxy/' . $buku->pdf) ?>;

        // Load the PDF
        pdfjsLib.getDocument(url).promise.then(pdf => {
            // Fetch the first page
            pdf.getPage(1).then(page => {
            const scale = 1.5;
            const viewport = page.getViewport({ scale });

            // Prepare canvas using PDF page dimensions
            const canvas = document.createElement('canvas');
            const context = canvas.getContext('2d');
            canvas.width = viewport.width;
            canvas.height = viewport.height;

            // Append canvas to container
            document.getElementById('pdf-container').appendChild(canvas);

            // Render PDF page into canvas context
            const renderContext = {
                canvasContext: context,
                viewport: viewport
            };
            page.render(renderContext);
            });
        });
        </script>
    </body>
</html>