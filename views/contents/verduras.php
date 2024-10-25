<?php

$host = 'localhost';       // O la dirección IP del servidor MySQL
$db = 'tuagewci_jonas'; // Reemplaza con el nombre de tu base de datos
$user='tuagewci_jonas';         // Reemplaza con tu usuario de MySQL
$pass = 'Jona2024.';      // Reemplaza con tu contraseña de MySQL
$charset = 'utf8mb4';      // Codificación (opcional)

session_start();
$estu = $_SESSION['userName'];
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$accion = 'verduras';

// importarnte agragar a los demas
date_default_timezone_set('America/Guatemala');

try {
  $pdo = new PDO($dsn, $user, $pass);
  $hoy = date('Y-m-d h:i:s');

  // Verificar si el usuario si ya tiene el registro
  $hoy1 = date('Y-m-d');
  $consulta_none = "SELECT * FROM registro WHERE estudiante = :estudiante AND accion = 'Entro a $accion' AND DATE(created_at) = :created_at";
  $stmt = $pdo->prepare($consulta_none);
  $stmt->bindParam(':estudiante', $estu, PDO::PARAM_INT);
  $stmt->bindParam(':created_at', $hoy1, PDO::PARAM_STR);
  $stmt->execute();
  $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

  // Verificar si el formulario fue enviado
  if (isset($_POST['submit'])) {
    // Verificar si el campo "final" existe y no está vacío
    if (!empty($_POST['final'])) {
      $sql = "INSERT INTO registro (estudiante, accion, created_at) VALUES (:estudiante, :accion, :created_at)";

      $stmp = $pdo->prepare($sql);

      $stmp->execute([
        ':estudiante' => $_SESSION['userName'],
        ':accion' => "finalizo el $accion",
        ':created_at' => $hoy,
      ]);

      // Redirigir a otra página después del procesamiento exitoso
      $http = "https://en-senas.com/dashboard";
      // http://localhost/PROYECTO_ESCUELA/views/contents/letras.php
      header("Location: $http");
      exit(); // Importante: detener la ejecución después de redirigir

    }
  }

  if (count($resultados) > 0) {
    header('Location: https://en-senas.com/dashboard');
    exit();
  }

  $sql = "INSERT INTO registro (estudiante, accion, created_at) VALUES (:estudiante, :accion, :created_at)";
  $stmp = $pdo->prepare($sql);
  $stmp->execute([
    ':estudiante' => $_SESSION['userName'],
    ':accion' => "Entro a $accion",
    ':created_at' => $hoy,
  ]);
} catch (\PDOException $e) {
  throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Galería de verduras</title>
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
    <div class="title">tomate</div>
     <img src="../assets/img/verduras/tomatesena.png" class="d-block w-100" alt="...">
     <img src="../assets/img/verduras/tomate.png"class="d-block w-100" alt="...">
    </div>
    <div class="image-pair">
    <div class="title">Ajo</div>
      <img src="../assets/img/verduras/ajo.png" alt="Image B">
      <img src="../assets/img/verduras/ajoo.png" alt="Image C">
    </div>
    <div class="image-pair">
    <div class="title">arbeja</div>
      <img src="../assets/img/verduras/arbejassena.png" alt="Image B">
      <img src="../assets/img/verduras/arbeja.png" alt="Image C">
    </div>
    <div class="image-pair">
    <div class="title">camote</div>
      <img src="../assets/img/verduras/camotesena.png" alt="Image B">
      <img src="../assets/img/verduras/camote.png" alt="Image C">
    </div>
    <div class="image-pair">
    <div class="title">coliflor</div>
      <img src="../assets/img/verduras/coliflor.png" alt="Image B">
      <img src="../assets/img/verduras/coliflorsena.png" alt="Image C">
    </div>
    <div class="image-pair">
    <div class="title">ejote</div>
      <img src="../assets/img/verduras/ejote.png" alt="Image B">
      <img src="../assets/img/verduras/ejotessena.png" alt="Image C">
    </div>
    <div class="image-pair">
    <div class="title">elote</div>
      <img src="../assets/img/verduras/elote.png" alt="Image B">
      <img src="../assets/img/verduras/elotesena.png" alt="Image C">
    </div>
    <div class="image-pair">
    <div class="title"> Apio</div>
      <img src="../assets/img/verduras/apio.png" alt="Image B">
      <img src="../assets/img/verduras/apiosenaa.png" alt="Image C">
    </div>
    <div class="image-pair">
    <div class="title">Guicoy </div>
      <img src="../assets/img/verduras/guicoy.png" alt="Image B">
      <img src="../assets/img/verduras/guicoysenaa.png" alt="Image C">
    </div>
    <div class="image-pair">
    <div class="title">Guisquil </div>
      <img src="../assets/img/verduras/guisquil.png" alt="Image B">
      <img src="../assets/img/verduras/guisquilsena.png" alt="Image C">
    </div>
    <div class="image-pair">
    <div class="title">Navos</div>
      <img src="../assets/img/verduras/navossena.png" alt="Image B">
      <img src="../assets/img/verduras/navossenaa.png" alt="Image C">
    </div>
    <div class="image-pair">
    <div class="title">Papas </div>
      <img src="../assets/img/verduras/papas.png" alt="Image B">
      <img src="../assets/img/verduras/papasena.png" alt="Image C">
    </div>
    <div class="image-pair">
    <div class="title">Pepinos </div>
      <img src="../assets/img/verduras/pepino.png" alt="Image B">
      <img src="../assets/img/verduras/pepinosena.png" alt="Image C">
    </div>
    <div class="image-pair">
    <div class="title">Rabanos </div>
      <img src="../assets/img/verduras/rabano.png" alt="Image B">
      <img src="../assets/img/verduras/rabanos.senapng.png" alt="Image C">
    </div>
    <div class="image-pair">
    <div class="title">Yuca </div>
      <img src="../assets/img/verduras/yuca.png" alt="Image B">
      <img src="../assets/img/verduras/yucasenaa.png" alt="Image C">
    </div>
    <div class="image-pair">
    <div class="title">zanahoria </div>
      <img src="../assets/img/verduras/zanahoria.png" alt="Image B">
      <img src="../assets/img/verduras/zanahoriasena.png" alt="Image C">
    </div>
    
    <div class="image-pair">
      <div class="title">FELICIDADES LECCION COMPLETADA </div>
      <form action="" method="POST">
        <input type="hidden" id="final" name="final" value="123" required><br><br>

        <button type="submit" name="submit">GUARDAR</button>
      </form>
    </div>
  </div>

  <div class="buttons">
    <button onclick="showPrev()">Anterior</button>
    <button onclick="showNext()">Siguiente</button>
    <button class="btn btn-regresar" onclick="window.location.href='https://en-senas.com/dashboard/'">Regresar al menú principal</button>


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
