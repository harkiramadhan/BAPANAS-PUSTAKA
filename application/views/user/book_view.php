<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($buku->judul, ENT_QUOTES, 'UTF-8') ?></title>
    <link rel="stylesheet" href="<?php echo base_url('assets/pdfjs/web/viewer.css'); ?>">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.2.146/pdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.2.146/pdf.worker.min.js"></script>
</head>
<body>
    <div id="viewerContainer" class="pdfViewer">
        <!-- Ensure the URL is properly encoded and accessible -->
        <iframe src="<?php echo base_url('assets/pdfjs/web/viewer.html?file=' . urlencode(site_url('user/koleksi/proxy/' . $buku->pdf))); ?>" width="100%" height="100%" style="border:none;"></iframe>
    </div>
</body>
</html>
