<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $buku->judul ?></title>
    </head>
    <body>
        <div id="viewerContainer" class="pdfViewer">
            <iframe src="<?php echo site_url('assets/pdf/' . $buku->pdf); ?>" width="100%" height="100%" style="border:none;"></iframe>
        </div>
    </body>
</html>