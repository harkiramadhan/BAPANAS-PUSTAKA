<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Viewer</title>
    <style>
        #pdf-viewer {
            width: 50%;
            border: 1px solid #000;
            overflow: auto;
            margin-left: auto;
            margin-right: auto;
            margin-top: 15px;
            margin-bottom: 45px;
        }
        #controls {
            margin-top: 10px;
            text-align: center;
        }
        #pdf-canvas {
            width: 100%;
        }
        button {
            margin: 5px;
            padding: 10px;
        }
    </style>
</head>
<body>

    
<div id="controls">
    <button id="prev" class="btn btn-outline-secondary rounded-pill">Sebelumnya</button>
    <span id="page-num"></span> / <span id="page-count"></span>
    <button id="next" class="btn btn-outline-secondary rounded-pill">Selanjutnya</button>
</div>

<section class="">
    <div class="container-xl">
        <div id="pdf-viewer" class="rounded rounded-lg">
            <canvas id="pdf-canvas"></canvas>
        </div>
    </div>
</section>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.10.377/pdf.min.js"></script>
<script>
    const url = '<?= base_url('assets/pdf/' . $buku->pdf) ?>'; // URL file PDF Anda
    let pdfDoc = null,
        pageNum = 1,
        pageIsRendering = false,
        pageNumIsPending = null;

    const scale = 1.5,
          canvas = document.querySelector('#pdf-canvas'),
          ctx = canvas.getContext('2d');

    // Render halaman
    const renderPage = num => {
        pageIsRendering = true;

        // Get page
        pdfDoc.getPage(num).then(page => {
            // Set scale
            const viewport = page.getViewport({ scale });
            canvas.height = viewport.height;
            canvas.width = viewport.width;

            const renderCtx = {
                canvasContext: ctx,
                viewport
            };

            page.render(renderCtx).promise.then(() => {
                pageIsRendering = false;

                if (pageNumIsPending !== null) {
                    renderPage(pageNumIsPending);
                    pageNumIsPending = null;
                }
            });

            // Output current page
            document.querySelector('#page-num').textContent = num;
        });
    };

    // Check for pages rendering
    const queueRenderPage = num => {
        if (pageIsRendering) {
            pageNumIsPending = num;
        } else {
            renderPage(num);
        }
    };

    // Show Prev Page
    const showPrevPage = () => {
        if (pageNum <= 1) {
            return;
        }
        pageNum--;
        queueRenderPage(pageNum);
    };

    // Show Next Page
    const showNextPage = () => {
        if (pageNum >= pdfDoc.numPages) {
            return;
        }
        pageNum++;
        queueRenderPage(pageNum);
    };

    // Get Document
    pdfjsLib.getDocument(url).promise.then(pdfDoc_ => {
        pdfDoc = pdfDoc_;

        document.querySelector('#page-count').textContent = pdfDoc.numPages;

        renderPage(pageNum);
    });

    // Button Events
    document.querySelector('#prev').addEventListener('click', showPrevPage);
    document.querySelector('#next').addEventListener('click', showNextPage);
</script> -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.10.377/pdf.min.js"></script>
<script>
    const url = '<?= base_url('assets/pdf/' . $buku->pdf) ?>'; // URL file PDF Anda
    let pdfDoc = null,
        pageNum = 1,
        pageIsRendering = false,
        pageNumIsPending = null;

    const scale = 1.5,
          canvas = document.querySelector('#pdf-canvas'),
          ctx = canvas.getContext('2d');

    // Render halaman
    const renderPage = num => {
        pageIsRendering = true;

        pdfDoc.getPage(num).then(page => {
            const viewport = page.getViewport({ scale });
            canvas.height = viewport.height;
            canvas.width = viewport.width;

            const renderCtx = {
                canvasContext: ctx,
                viewport
            };

            page.render(renderCtx).promise.then(() => {
                pageIsRendering = false;

                if (pageNumIsPending !== null) {
                    renderPage(pageNumIsPending);
                    pageNumIsPending = null;
                }
            });

            document.querySelector('#page-num').textContent = num;
        });
    };

    // Pemuatan halaman selanjutnya secara asinkron
    const loadNextPage = (num) => {
        if (num <= pdfDoc.numPages) {
            pdfDoc.getPage(num).then(page => {
                const viewport = page.getViewport({ scale });
                // Anda dapat menyimpan page atau canvas image di cache sini
            });
        }
    };

    // Get Document
    pdfjsLib.getDocument(url).promise.then(pdfDoc_ => {
        pdfDoc = pdfDoc_;
        document.querySelector('#page-count').textContent = pdfDoc.numPages;

        renderPage(pageNum); // Render halaman pertama saja
        // Mulai pre-load halaman berikutnya
        loadNextPage(pageNum + 1);
    });

    // Button Events untuk navigasi halaman
    document.querySelector('#prev').addEventListener('click', () => {
        if (pageNum > 1) {
            pageNum--;
            renderPage(pageNum);
        }
    });

    document.querySelector('#next').addEventListener('click', () => {
        if (pageNum < pdfDoc.numPages) {
            pageNum++;
            renderPage(pageNum);
            loadNextPage(pageNum + 1); // Pre-load halaman berikutnya
        }
    });
</script>

</body>
</html>
