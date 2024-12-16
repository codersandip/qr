document.getElementById('fileInput').addEventListener('change', async (event) => {
  const file = event.target.files[0];
  if (!file) return;

  const canvas = document.getElementById('canvas');
  const ctx = canvas.getContext('2d');
  const resultElement = document.getElementById('qrText');

  // Load the image from the file
  const img = new Image();
  img.onload = () => {
    canvas.width = img.width;
    canvas.height = img.height;
    ctx.drawImage(img, 0, 0, canvas.width, canvas.height);

    // Get the image data
    const imageData = ctx.getImageData(0, 0, canvas.width, canvas.height);

    // Decode the QR code
    const code = jsQR(imageData.data, imageData.width, imageData.height);

    if (code) {
      resultElement.textContent = code.data; // Display the decoded text
    } else {
      resultElement.textContent = 'No QR code found';
    }
  };

  img.src = URL.createObjectURL(file); // Load the image as a blob
});
