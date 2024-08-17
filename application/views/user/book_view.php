<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $buku->judul ?></title>
        <link rel="stylesheet" href="<?php echo base_url('assets/pdfjs/web/viewer.css'); ?>">
        <!-- <script src="<?php echo base_url('assets/pdfjs/src/pdf.js'); ?>"></script> -->
        <!-- <script src="<?php echo base_url('assets/pdfjs/web/viewer.js'); ?>"></script> -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.6.347/pdf.min.js" integrity="sha512-Z8CqofpIcnJN80feS2uccz+pXWgZzeKxDsDNMD/dJ6997/LSRY+W4NmEt9acwR+Gt9OHN0kkI1CTianCwoqcjQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.6.347/pdf.worker.entry.min.js" integrity="sha512-NJEHr6hlBM4MkVxJu+7FBk+pn7r+KD8rh+50DPglV/8T8I9ETqHJH0bO7NRPHaPszzYTxBWQztDfL6iJV6CQTw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.6.347/pdf.worker.min.js" integrity="sha512-lHibs5XrZL9hXP3Dhr/d2xJgPy91f2mhVAasrSbMkbmoTSm2Kz8DuSWszBLUg31v+BM6tSiHSqT72xwjaNvl0g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.6.347/pdf_viewer.min.css" integrity="sha512-5cOE2Zw/F4SlIUHR/xLTyFLSAR0ezXsra+8azx47gJyQCilATjazEE2hLQmMY7xeAv/RxxZhs8w8zEL7dTsvnA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <div id="viewerContainer" class="pdfViewer">
            <iframe src="<?php echo base_url('assets/pdfjs/web/viewer.html?file=' . urlencode(site_url('user/koleksi/proxy/' . $buku->pdf))); ?>" width="100%" height="100%" style="border:none;"></iframe>
        </div>
    </body>
</html>