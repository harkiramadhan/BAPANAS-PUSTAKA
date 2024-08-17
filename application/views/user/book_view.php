<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($buku->judul, ENT_QUOTES, 'UTF-8') ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.2.146/pdf_viewer.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.2.146/pdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.2.146/pdf.worker.min.js"></script>
</head>
<body>
    <div id="viewer" class="pdfViewer" width="100%" height="100%"></div>
    <script>
        pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.2.146/pdf.worker.min.js';

        const url = '<?= htmlspecialchars(site_url('user/koleksi/proxy/' . $buku->pdf), ENT_QUOTES, 'UTF-8') ?>';

        pdfjsLib.getDocument(url).promise.then(pdf => {
            // Assuming you are using pdf_viewer.min.js as well
            const viewer = new pdfjsViewer.PDFViewer({
                container: document.getElementById('viewer')
            });

            viewer.setDocument(pdf);
        }).catch(error => {
            console.error('Error loading PDF:', error);
        });
    </script>
</body>
</html>
