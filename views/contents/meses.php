<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Galería de meses</title>
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
    <div class="title">enero</div>
     <img src="../assets/img/meses/enero.png" class="d-block w-100" alt="...">
     <img src="../assets/img/meses/.png"class="d-block w-100" alt="...">
    </div>
    <div class="image-pair">
    <div class="title">febrero</div>
      <img src="../assets/img/meses/febrero.png" alt="Image B">
      <img src="../assets/img/meses/" alt="Image C">
    </div>
    <div class="image-pair">
    <div class="title">marzo</div>
      <img src="../assets/img/meses/marzo.png" alt="Image B">
      <img src="../assets/img/meses/" alt="Image C">
    </div>
    <div class="image-pair">
    <div class="title">abril</div>
      <img src="../assets/img/meses/abril.png" alt="Image B">
      <img src="../assets/img/meses/" alt="Image C">
    </div>
    <div class="image-pair">
    <div class="title">mayo</div>
      <img src="../assets/img/meses/mayo.png" alt="Image B">
      <img src="../assets/img/meses/" alt="Image C">
    </div>
    <div class="image-pair">
    <div class="title">junio</div>
      <img src="../assets/img/meses/junio.png" alt="Image B">
      <img src="../assets/img/meses/" alt="Image C">
    </div>
    <div class="image-pair">
    <div class="title">julio</div>
      <img src="../assets/img/meses/julio.png" alt="Image B">
      <img src="../assets/img/meses/" alt="Image C">
    </div>
    <div class="image-pair">
    <div class="title">agosto</div>
      <img src="../assets/img/meses/agosto.png" alt="Image B">
      <img src="../assets/img/meses/" alt="Image C">
    </div>
    <div class="image-pair">
    <div class="title">septiembre</div>
      <img src="../assets/img/meses/septiembre.png" alt="Image B">
      <img src="../assets/img/meses/" alt="Image C">
    </div>
    <div class="image-pair">
    <div class="title">octubre </div>
      <img src="../assets/img/meses/oct.png" alt="Image B">
      <img src="../assets/img/meses/" alt="Image C">
    </div>
    <div class="image-pair">
    <div class="title">noviembre </div>
      <img src="../assets/img/meses/nov.png" alt="Image B">
      <img src="../assets/img/meses/" alt="Image C">
    </div>
    <div class="image-pair">
    <div class="title">diciembre </div>
      <img src="../assets/img/meses/dic.png" alt="Image B">
      <img src="../assets/img/meses/" alt="Image C">
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
