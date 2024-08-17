<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF.js Viewer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.2.146/pdf_viewer.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.2.146/pdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.2.146/pdf_viewer.min.js"></script>
</head>
<body>
    <div id="viewer" class="pdfViewer"></div>
    <script>
        // Set path to worker script
        pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.2.146/pdf.worker.min.js';

        // Initialize the PDF viewer
        const url = '<?= htmlspecialchars(site_url('user/koleksi/proxy/' . $buku->pdf), ENT_QUOTES, 'UTF-8') ?>';
        
        const pdfViewer = new pdfjsViewer.PDFViewer({
            container: document.getElementById('viewer')
        });

        pdfjsLib.getDocument(url).promise.then(pdfDocument => {
            pdfViewer.setDocument(pdfDocument);
        }).catch(error => {
            console.error('Error loading PDF:', error);
        });
    </script>
</body>
</html>
