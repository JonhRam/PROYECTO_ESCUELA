<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Galería de saludos</title>
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
    .title {
      position: absolute;
      top: -60px;
      font-size: 24px;
      color: white;
      font-weight: bold;
      z-index: 10;
      text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5); 
      }
    .image-pair {
      display: none;
      justify-content: center;
      align-items: center;
    }

    .image-pair img {
      width: 300px; /* Tamaño fijo para todas las imágenes */
      height: 300px; /* Asegura que todas las imágenes tengan el mismo tamaño */
      object-fit: cover; /* Asegura que la imagen se ajuste dentro del tamaño especificado */
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
    <div class="title">manzana</div>
     <img src="../assets/img/frutas/manzana.png" class="d-block w-100" alt="...">
     <img src="../assets/img/frutas/.png"class="d-block w-100" alt="...">
    </div>
    <div class="image-pair">
    <div class="title">sandia</div>
      <img src="../assets/img/frutas/sandia.png" alt="Image B">
      <img src="../assets/img/frutas/" alt="Image C">
    </div>
    <div class="image-pair">
    <div class="title">bananano</div>
      <img src="../assets/img/frutas/banano.png" alt="Image B">
      <img src="../assets/img/frutas/" alt="Image C">
    </div>
    <div class="image-pair">
    <div class="title">papaya</div>
      <img src="../assets/img/frutas/papaya.png" alt="Image B">
      <img src="../assets/img/colores/" alt="Image C">
    </div>
    <div class="image-pair">
    <div class="title">mango</div>
      <img src="../assets/img/frutas/mango.png" alt="Image B">
      <img src="../assets/img/colores/" alt="Image C">
    </div>
    <div class="image-pair">
    <div class="title">f</div>
      <img src="../assets/img/frutas/.png" alt="Image B">
      <img src="../assets/img/frutas/" alt="Image C">
    </div>
    <div class="image-pair">
    <div class="title">f</div>
      <img src="../assets/img/frutas/.png" alt="Image B">
      <img src="../assets/img/frutas/" alt="Image C">
    </div>
    <div class="image-pair">
    <div class="title">f </div>
      <img src="../assets/img/frutas/.png" alt="Image B">
      <img src="../assets/img/frutas/" alt="Image C">
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
