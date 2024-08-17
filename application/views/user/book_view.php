<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($buku->judul, ENT_QUOTES, 'UTF-8') ?></title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        #viewerContainer {
            position: relative;
            width: 100%;
            height: 100vh;
            background: #fff;
            overflow: hidden;
        }
        iframe {
            width: 100%;
            height: calc(100% - 40px);
            border: none;
        }
        .toolbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 40px;
            background-color: #333;
            color: #fff;
            display: flex;
            align-items: center;
            padding: 0 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }
        .toolbar button {
            background: none;
            border: none;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            margin: 0 5px;
        }
        .toolbar button:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="toolbar">
        <button onclick="zoomOut()">-</button>
        <button onclick="zoomIn()">+</button>
    </div>
    <div id="viewerContainer">
        <iframe id="pdfIframe" src="<?php echo site_url('assets/pdf/' . $buku->pdf); ?>"></iframe>
    </div>
    <script>
        document.getElementById('pdfIframe').src = base64PDF;
        function zoomIn() {
            const iframe = document.getElementById('pdfIframe');
            iframe.style.transform = `scale(${(parseFloat(getComputedStyle(iframe).transform.split(',')[3]) || 1) + 0.1})`;
            iframe.style.transformOrigin = '0 0';
        }

        function zoomOut() {
            const iframe = document.getElementById('pdfIframe');
            iframe.style.transform = `scale(${(parseFloat(getComputedStyle(iframe).transform.split(',')[3]) || 1) - 0.1})`;
            iframe.style.transformOrigin = '0 0';
        }

        // Deteksi apakah pengguna menggunakan Mac atau perangkat mobile
        const isMac = navigator.platform.toUpperCase().indexOf('MAC') >= 0;
        const isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);

        document.addEventListener('keydown', function(e) {
            // Deteksi F12, Ctrl+Shift+I, Ctrl+Shift+J, dan Ctrl+U (untuk Windows/Linux)
            if (
                e.key === 'F12' ||
                (e.ctrlKey && e.shiftKey && e.key === 'I') ||
                (e.ctrlKey && e.shiftKey && e.key === 'J') ||
                (e.ctrlKey && e.key === 'U') 
            ) {
                e.preventDefault();
                alert("Inspect Element is disabled on this page.");
            }

            // Deteksi Cmd+Option+I dan Cmd+Option+J (untuk Mac)
            if (isMac && (
                (e.metaKey && e.altKey && e.key === 'I') ||
                (e.metaKey && e.altKey && e.key === 'J')
            )) {
                e.preventDefault();
                alert("Inspect Element is disabled on this page.");
            }
        });

        document.addEventListener('contextmenu', function(e) {
            // Mencegah akses klik kanan pada desktop dan perangkat mobile
            e.preventDefault();
            alert("Right-click is disabled.");
        });

        // Tambahkan iframe untuk mendeteksi DevTools
        let devtoolsDetector = document.createElement('iframe');
        devtoolsDetector.style.display = 'none';
        document.body.appendChild(devtoolsDetector);

        setInterval(function() {
            if (devtoolsDetector.contentWindow.outerWidth !== devtoolsDetector.contentWindow.innerWidth) {
                alert("Inspect Element is disabled on this page.");
                // Anda bisa menambahkan tindakan lain di sini, misalnya redirect
                window.location.href = "https://example.com";
            }
        }, 1000);

        // Pencegahan khusus untuk perangkat mobile
        if (isMobile) {
            document.addEventListener('touchstart', function(e) {
                if (e.touches.length > 2) {
                    e.preventDefault();
                    alert("Inspect Element is disabled on mobile.");
                }
            });
        }

    </script>
</body>
</html>
