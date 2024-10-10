<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Galería de imágenes</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
      background: linear-gradient(135deg, #f3ec78, #af4261); /* Fondo bonito */
    }

    .gallery-container {
      position: relative;
      width: 100%;
      max-width: 800px;
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 0 auto; /* Centrar la galería */
    }

    .image-pair {
      display: none;
      justify-content: center;
      align-items: center;
    }

    .image-pair img {
      max-width: 40%;
      margin: 0 10px;
    }

    .buttons {
      margin-top: 20px;
    }

    button {
      padding: 10px 20px;
      margin: 0 10px;
      background-color: #af4261;
      border: none;
      color: white;
      border-radius: 5px;
      cursor: pointer;
    }

    button:hover {
      background-color: #f3ec78;
      color: #af4261;
    }

    .active {
      display: flex;
    }
  </style>
  <style>
  .btn-regresar {
    padding: 10px 20px;
    margin: 20px;
    background-color: #af4261;
    border: none;
    color: white;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
  }

  .btn-regresar:hover {
    background-color: #f3ec78;
    color: #af4261;
  }
</style>
</head>

<body>
  <div class="gallery-container">
    <div class="image-pair active">
     <img src="../assets/img/Abece/d1.png" class="d-block w-100" alt="...">
     <img src="../assets/img/Abecedario/d1.png" class="d-block w-100" alt="...">
    </div>
    <div class="image-pair">
      <img src="https://via.placeholder.com/150/FFFF00/000000?text=Image+B" alt="Image B">
      <img src="https://via.placeholder.com/150/00FF00/000000?text=Image+C" alt="Image C">
    </div>
  </div>

  <div class="buttons">
    <button onclick="showPrev()">Anterior</button>
    <button onclick="showNext()">Siguiente</button>
    <button class="btn btn-regresar" onclick="window.location.href='http://localhost/PROYECTO_ESCUELA/dashboard/'">Regresar al menú principal</button>


  </div>

  <script>
    let currentIndex = 0;
    const imagePairs = document.querySelectorAll('.image-pair');

    function showNext() {
      imagePairs[currentIndex].classList.remove('active');
      currentIndex = (currentIndex + 1) % imagePairs.length;
      imagePairs[currentIndex].classList.add('active');
    }

    function showPrev() {
      imagePairs[currentIndex].classList.remove('active');
      currentIndex = (currentIndex - 1 + imagePairs.length) % imagePairs.length;
      imagePairs[currentIndex].classList.add('active');
    }
  </script>
</body>

</html>
