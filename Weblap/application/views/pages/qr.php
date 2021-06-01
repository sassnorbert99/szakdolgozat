<style type="text/css">
    .h1class{
        text-align: center;

    }
    .centerVideo { margin: 0 auto; width: 400px; }
    p{
        text-align: center;
    }

</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>QR kód beolvasása</title>
</head>
<body>
<style>
    
    input[type="file"] {
        display: block;
        margin-bottom: 16px;
    }
    div {
        margin-bottom: 16px;
    }
    #flash-toggle {
        display: none;
    }
</style>
<h1 class="h1class">QR kód beolvasása:</h1>
<div class="h1class">
    <br>
    <video class="centerVideo" id="qr-video"></video>
    <br>
    
</div>
<div>
    <button id="flash-toggle">Flash: <span id="flash-state">off</span></button>
</div>
<div class="h1class">
    <select id="inversion-mode-select">
        <option value="original">Eredeti QR kód szkennelése(Fekete kód-fehér háttér)</option>
        <option value="invert">Inverz QR kód szkennelése(Fehér kód- fekete háttér)</option>
    </select>
    <br>
    <b>QR kód: </b>
    <span class="h1class" id="cam-qr-result">None</span>
    <br>
    <span id="cam-qr-result-timestamp"></span>
<br>
<button id="start-button">Kamera bekapcsolása</button>
<button id="stop-button">Kamera kikapcsolása</button>

</div>


<!--<b>Last detected at: </b>-->


<!--
<h1>Scan from File:</h1>
<input type="file" id="file-selector">
<b>Detected QR code: </b>
<span id="file-qr-result">None</span>
-->
<script type="module">

    import QrScanner from '/assets/qrCode/qr-scanner.min.js';
    //import QrScanner from "./qrCode/qr-scanner.min.js";
    QrScanner.WORKER_PATH = '/assets/qrCode/qr-scanner-worker.min.js';

    const video = document.getElementById('qr-video');
    const camHasCamera = document.getElementById('cam-has-camera');
    const camHasFlash = document.getElementById('cam-has-flash');
    const flashToggle = document.getElementById('flash-toggle');
    const flashState = document.getElementById('flash-state');
    const camQrResult = document.getElementById('cam-qr-result');
    console.log( camQrResult );

    
    const camQrResultTimestamp = document.getElementById('cam-qr-result-timestamp');
    const fileSelector = document.getElementById('file-selector');
    const fileQrResult = document.getElementById('file-qr-result');

    function setResult(label, result) {
        label.textContent = result;
        camQrResultTimestamp.textContent = new Date().toString();
        label.style.color = 'teal';
        clearTimeout(label.highlightTimeout);
        label.highlightTimeout = setTimeout(() => label.style.color = 'inherit', 100);
        switch(result) {
          case "https://varazstorony.robucation.com/equipments/table":
            window.location.replace("https://varazstorony.robucation.com/equipments/table");
            break;
          case "https://varazstorony.robucation.com/equipments/cartesius":
            window.location.replace("https://varazstorony.robucation.com/equipments/cartesius");
            break;
            case "https://varazstorony.robucation.com/equipments/robi":
            window.location.replace("https://varazstorony.robucation.com/equipments/robi");
            break;
            case "https://varazstorony.robucation.com/equipments/hell":
            window.location.replace("https://varazstorony.robucation.com/equipments/hell");
            break;
            case "https://varazstorony.robucation.com/equipments/laser":
            window.location.replace("https://varazstorony.robucation.com/equipments/laser");
            break;
            case "https://varazstorony.robucation.com/equipments/slope":
            window.location.replace("https://varazstorony.robucation.com/equipments/slope");
            break;
          default:
            // code block
            break;
        }
    }

    // ####### Web Cam Scanning #######

    QrScanner.hasCamera().then(hasCamera => camHasCamera.textContent = hasCamera);

    const scanner = new QrScanner(video, result => setResult(camQrResult, result), error => {
        camQrResult.textContent = error;
        camQrResult.style.color = 'inherit';
    });
    scanner.start().then(() => {
        scanner.hasFlash().then(hasFlash => {
            camHasFlash.textContent = hasFlash;
            if (hasFlash) {
                flashToggle.style.display = 'inline-block';
                flashToggle.addEventListener('click', () => {
                    scanner.toggleFlash().then(() => flashState.textContent = scanner.isFlashOn() ? 'on' : 'off');
                });
            }
        });
    });

    // for debugging
    window.scanner = scanner;


    document.getElementById('inversion-mode-select').addEventListener('change', event => {
        scanner.setInversionMode(event.target.value);
    });

    document.getElementById('start-button').addEventListener('click', () => {
        scanner.start();
    });

    document.getElementById('stop-button').addEventListener('click', () => {
        scanner.stop();
    });

    // ####### File Scanning #######

    fileSelector.addEventListener('change', event => {
        const file = fileSelector.files[0];
        if (!file) {
            return;
        }
        QrScanner.scanImage(file)
            .then(result => setResult(fileQrResult, result))
            .catch(e => setResult(fileQrResult, e || 'Nem található QR kód'));
    });

    
</script>

</body>
</html>
