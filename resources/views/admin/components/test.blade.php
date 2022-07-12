<html>
  <head>
    <meta charset="utf-8" />
    <script src="https://unpkg.com/pdf-lib"></script>
    <script src="https://cdn.jsdelivr.net/npm/signature_pad@4.0.0/dist/signature_pad.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/521/fabric.js" integrity="sha512-H2reaY28wpUIX1EKG6WufGHYG/BWvZUfweOdvFB/gW9kh9YSKB9EklGSlIB+XdL0bgavEbp4l+UjQR/mLJwdMg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  </head>

  <body>
    <div >
        <canvas id="signature-pad" class="signature-pad" width=200 height=100 style="border: 2px solid;border-color: black">
    </div>
    <button id='save'>save</button>
    <button id='clear'>cancel</button>
    <div>
        sign:
        <img style="border-color: black; border: solid 1px" id="sign" src="">
        <canvas id="c"></canvas>
    </div>
    <div style="padding: 200px">
        <iframe id="pdf" src="http://clm.test/storage/pdf/1655348309_1655348224_booking_kol.pdf" style="width: 100%; height: 100%;"></iframe>

    </div>
  </body>

  <script>
    
// embedImages()

async function embedImages() {
  const jpgUrl = 'https://pdf-lib.js.org/assets/cat_riding_unicorn.jpg'
  const pngUrl = 'https://pdf-lib.js.org/assets/minions_banana_alpha.png'

  const jpgImageBytes = await fetch(jpgUrl).then((res) => res.arrayBuffer())
  const pngImageBytes = await fetch(pngUrl).then((res) => res.arrayBuffer())


  const url = 'http://clm.test/storage/pdf/1655348309_1655348224_booking_kol.pdf'
  const existingPdfBytes = await fetch(url).then(res => res.arrayBuffer())

  const pdfDoc = await PDFLib.PDFDocument.load(existingPdfBytes)

  const jpgImage = await pdfDoc.embedJpg(jpgImageBytes)
  const pngImage = await pdfDoc.embedPng(pngImageBytes)

  const jpgDims = jpgImage.scale(0.5)
  const pngDims = pngImage.scale(0.5)

  const page = pdfDoc.addPage()

  page.drawImage(jpgImage, {
    x: page.getWidth() / 2 - jpgDims.width / 2,
    y: page.getHeight() / 2 - jpgDims.height / 2 + 250,
    width: jpgDims.width,
    height: jpgDims.height,
  })
  page.drawImage(pngImage, {
    x: page.getWidth() / 2 - pngDims.width / 2 + 75,
    y: page.getHeight() / 2 - pngDims.height + 250,
    width: pngDims.width,
    height: pngDims.height,
  })

  
  const pdfDataUri = await pdfDoc.saveAsBase64({ dataUri: true });
      document.getElementById('pdf').src = pdfDataUri;
}


var signaturePad = new SignaturePad(document.getElementById('signature-pad'), {
  backgroundColor: 'rgba(255, 255, 255, 0)',
  penColor: 'rgb(0, 0, 0)'
});
var saveButton = document.getElementById('save');
var cancelButton = document.getElementById('clear');

saveButton.addEventListener('click', function (event) {
  const data = signaturePad.toDataURL('image/png');

  var canvas = new fabric.Canvas('c');
  var imgInstance = new fabric.Image.fromURL(data, {
 left: 10,
 top: 400,
 scaleX: 0.5,
 scaleY: 0.5
});
canvas.add(imgInstance);
});

cancelButton.addEventListener('click', function (event) {
  signaturePad.clear();
});

  </script>
</html>