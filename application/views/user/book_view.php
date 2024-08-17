<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $buku->judul ?></title>
        <link rel="stylesheet" href="<?php echo base_url('assets/pdfjs/web/viewer.css'); ?>">
        <script src="<?php echo base_url('assets/pdfjs/src/pdf.js'); ?>"></script>
        <script src="<?php echo base_url('assets/pdfjs/web/viewer.js'); ?>"></script>
    </head>
    <body>
        <div id="viewerContainer" class="pdfViewer">
            <iframe src="<?php echo base_url('assets/pdfjs/web/viewer.html?file=' . urlencode($pdf_file)); ?>" width="100%" height="100%" style="border:none;"></iframe>
        </div>
    </body>
</html>