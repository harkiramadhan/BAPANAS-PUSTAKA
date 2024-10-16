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
            text-align: center;
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
        #loader {
            text-align: center;
            display: none;
        }
    </style>
</head>
<body>

    
<div id="controls">
    <button id="prev" class="btn btn-outline-secondary rounded-pill">Sebelumnya</button>
    <span id="page-num"></span> / <span id="page-count"></span>
    <button id="next" class="btn btn-outline-secondary rounded-pill">Selanjutnya</button>
</div>

<div id="loader">
    <img src="<?= base_url('assets/img/loading.gif') ?>" alt="Loading..." />
    <h4 class="fw-bold mb-5 mt-2">Buku sedang dimuat, <br> mohon tunggu sebentar.</h4>
</div>

<section class="">
    <div class="container-xl">
        <div id="pdf-viewer" class="rounded rounded-lg">
            <canvas id="pdf-canvas"></canvas>
        </div>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.10.377/pdf.min.js"></script>
<script>
    // const url = '<?= base_url('assets/pdf/188-media-nfa--pangan-kuat-indonesia-berdaulat---volume-1-nomor-6--agustus-2022.pdf') ?>';
    const url = '<?= base_url('assets/pdf/' . $buku->pdf) ?>'; // URL file PDF Anda
    let pdfDoc = null,
        pageNum = 1,
        pageIsRendering = false,
        pageNumIsPending = null;

    const scale = 1.5,
          canvas = document.querySelector('#pdf-canvas'),
          ctx = canvas.getContext('2d');

    const loader = document.getElementById('loader'); // Ambil elemen loader

    // Fungsi untuk menampilkan loader
    const showLoader = () => {
        loader.style.display = 'block';
        canvas.style.display = 'none';
    };

    // Fungsi untuk menyembunyikan loader
    const hideLoader = () => {
        loader.style.display = 'none';
        canvas.style.display = 'block';
    };

    // Render halaman
    const renderPage = num => {
        showLoader(); // Tampilkan loader sebelum mulai rendering
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
                hideLoader(); // Sembunyikan loader setelah halaman selesai dirender

                if (pageNumIsPending !== null) {
                    renderPage(pageNumIsPending);
                    pageNumIsPending = null;
                }
            });

            document.querySelector('#page-num').textContent = num;
        });
    };

    // Pemuatan halaman berikutnya secara asinkron
    const loadNextPage = (num) => {
        if (num <= pdfDoc.numPages) {
            pdfDoc.getPage(num).then(page => {
                const viewport = page.getViewport({ scale });
                // Cache halaman selanjutnya jika diperlukan
            });
        }
    };

    // Get Document
    pdfjsLib.getDocument(url).promise.then(pdfDoc_ => {
        pdfDoc = pdfDoc_;
        document.querySelector('#page-count').textContent = pdfDoc.numPages;

        renderPage(pageNum); // Render halaman pertama dan sembunyikan loader setelah selesai
        loadNextPage(pageNum + 1); // Preload halaman selanjutnya
    });

    // Button events untuk navigasi halaman
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
            loadNextPage(pageNum + 1); // Preload halaman selanjutnya
        }
    });
</script>

</body>
</html>