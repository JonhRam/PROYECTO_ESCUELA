<?php

$host = 'localhost';       // O la dirección IP del servidor MySQL
$db = 'tuagewci_jonas'; // Reemplaza con el nombre de tu base de datos
$user='tuagewci_jonas';         // Reemplaza con tu usuario de MySQL
$pass = 'Jona2024.';      // Reemplaza con tu contraseña de MySQL
$charset = 'utf8mb4';      // Codificación (opcional)

session_start();
$estu = $_SESSION['userName'];
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$accion = 'Abecedario';

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
      background: linear-gradient(135deg, #f3ec78, #af4261);
      /* Fondo bonito */
    }

    .gallery-container {
      position: relative;
      width: 100%;
      max-width: 800px;
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 0 auto;
      /* Centrar la galería */
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
      width: 300px;
      /* Tamaño fijo para todas las imágenes */
      height: 300px;
      /* Asegura que todas las imágenes tengan el mismo tamaño */
      object-fit: cover;
      /* Asegura que la imagen se ajuste dentro del tamaño especificado */
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
      <div class="title">Letra A</div>
      <img src="../assets/img/abecedario/a.png" class="d-block w-100" alt="...">
      <img src="../assets/img/abecedario/asena.png" class="d-block w-100" alt="...">
    </div>
    <div class="image-pair">
      <div class="title">Letra B</div>
      <img src="../assets/img/abecedario/b.png" alt="Image B">
      <img src="../assets/img/abecedario/bsena.png" alt="Image C">
    </div>
    <div class="image-pair">
      <div class="title">Letra C</div>
      <img src="../assets/img/abecedario/c.png" alt="Image B">
      <img src="../assets/img/abecedario/csena.png" alt="Image C">
    </div>
    <div class="image-pair">
      <div class="title">Letra CH</div>
      <img src="../assets/img/abecedario/ch.png" alt="Image B">
      <img src="../assets/img/abecedario/chsena.png" alt="Image C">
    </div>
    <div class="image-pair">
      <div class="title">Letra D</div>
      <img src="../assets/img/abecedario/d.png" alt="Image B">
      <img src="../assets/img/abecedario/dsena.png" alt="Image C">
    </div>
    <div class="image-pair">
      <div class="title">Letra E</div>
      <img src="../assets/img/abecedario/e.png" alt="Image B">
      <img src="../assets/img/abecedario/esena.png" alt="Image C">
    </div>
    <div class="image-pair">
      <div class="title">Letra F</div>
      <img src="../assets/img/abecedario/f.png" alt="Image B">
      <img src="../assets/img/abecedario/fsena.png" alt="Image C">
    </div>
    <div class="image-pair">
      <div class="title">Letra G</div>
      <img src="../assets/img/abecedario/g.png"" alt=" Image B">
      <img src="../assets/img/abecedario/gsena.png" alt="Image C">
    </div>
    <div class="image-pair">
      <div class="title">Letra H</div>
      <img src="../assets/img/abecedario/h.png" alt="Image B">
      <img src="../assets/img/abecedario/hsena.png" alt="Image C">
    </div>
    <div class="image-pair">
      <div class="title">Letra I</div>
      <img src="../assets/img/abecedario/i.png" alt="Image B">
      <img src="../assets/img/abecedario/isena.png" alt="Image C">
    </div>
    <div class="image-pair">
      <div class="title">Letra J</div>
      <img src="../assets/img/abecedario/j.png" alt="Image B">
      <img src="../assets/img/abecedario/jsena.png" alt="Image C">
    </div>
    <div class="image-pair">
      <div class="title">Letra K</div>
      <img src="../assets/img/abecedario/k.png" alt="Image B">
      <img src="../assets/img/abecedario/ksena.png" alt="Image C">
    </div>
    <div class="image-pair">
      <div class="title">Letra L</div>
      <img src="../assets/img/abecedario/l.png" alt="Image B">
      <img src="../assets/img/abecedario/lsena.png" alt="Image C">
    </div>
    <div class="image-pair">
      <div class="title">Letra LL</div>
      <img src="../assets/img/abecedario/ll.png" alt="Image B">
      <img src="../assets/img/abecedario/llsena.png" alt="Image C">
    </div>
    <div class="image-pair">
      <div class="title">Letra M</div>
      <img src="../assets/img/abecedario/m.png" alt="Image B">
      <img src="../assets/img/abecedario/msena.png" alt="Image C">
    </div>
    <div class="image-pair">
      <div class="title">Letra N</div>
      <img src="../assets/img/abecedario/n.png" alt="Image B">
      <img src="../assets/img/abecedario/nsena.png" alt="Image C">
    </div>
    <div class="image-pair">
      <div class="title">Letra Ñ</div>
      <img src="../assets/img/abecedario/ñ.png" alt="Image B">
      <img src="../assets/img/abecedario/ñsena.png" alt="Image C">
    </div>
    <div class="image-pair">
      <div class="title">Letra O</div>
      <img src="../assets/img/abecedario/o.png" alt="Image B">
      <img src="../assets/img/abecedario/osena.png" alt="Image C">
    </div>
    <div class="image-pair">
      <div class="title">Letra P</div>
      <img src="../assets/img/abecedario/p.png" alt="Image B">
      <img src="../assets/img/abecedario/psena.png" alt="Image C">
    </div>
    <div class="image-pair">
      <div class="title">Letra Q</div>
      <img src="../assets/img/abecedario/q.png" alt="Image B">
      <img src="../assets/img/abecedario/qsena.png" alt="Image C">
    </div>
    <div class="image-pair">
      <div class="title">Letra R</div>
      <img src="../assets/img/abecedario/r.png" alt="Image B">
      <img src="../assets/img/abecedario/rsena.png" alt="Image C">
    </div>
    <div class="image-pair">
      <div class="title">Letra RR</div>
      <img src="../assets/img/abecedario/rr.png" alt="Image B">
      <img src="../assets/img/abecedario/rrsena.png" alt="Image C">
    </div>
    <div class="image-pair">
      <div class="title">Letra S</div>
      <img src="../assets/img/abecedario/s.png" alt="Image B">
      <img src="../assets/img/abecedario/ssena.png" alt="Image C">
    </div>
    <div class="image-pair">
      <div class="title">Letra T</div>
      <img src="../assets/img/abecedario/t.png" alt="Image B">
      <img src="../assets/img/abecedario/tsena.png" alt="Image C">
    </div>
    <div class="image-pair">
      <div class="title">Letra U</div>
      <img src="../assets/img/abecedario/u.png" alt="Image B">
      <img src="../assets/img/abecedario/usena.png" alt="Image C">
    </div>
    <div class="image-pair">
      <div class="title">Letra V</div>
      <img src="../assets/img/abecedario/v.png" alt="Image B">
      <img src="../assets/img/abecedario/vsena.png" alt="Image C">
    </div>
    <div class="image-pair">
      <div class="title">Letra W</div>
      <img src="../assets/img/abecedario/w.png" alt="Image B">
      <img src="../assets/img/abecedario/wsena.png" alt="Image C">

    </div>
    <div class="image-pair">
      <div class="title">Letra X</div>
      <img src="../assets/img/abecedario/x.png" alt="Image B">
      <img src="../assets/img/abecedario/xsena.png" alt="Image C">

    </div>
    <div class="image-pair">
      <div class="title">Letra Y</div>
      <img src="../assets/img/abecedario/y.png" alt="Image B">
      <img src="../assets/img/abecedario/ysena.png" alt="Image C">

    </div>
    </div>
    <div class="image-pair">
      <div class="title">Letra Z</div>
      <img src="../assets/img/abecedario/z.png" alt="Image B">
      <img src="../assets/img/abecedario/zsena.png" alt="Image C">

    </div>



    <div class="image-pair">
      <div class="title">FELICIDADES COMPLETO LA LECCION</div>
      <form action="" method="POST">
        <input type="hidden" id="final" name="final" value="456" required><br><br>

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