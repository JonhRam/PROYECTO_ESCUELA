<?php
// Array con los nombres e imágenes de los animales
$animales = [
    ["nombre" => "perro", "imagen" => "animals.jpg"],
    ["nombre" => "Elefante", "imagen" => "elefante.jpg"],
    ["nombre" => "Tigre", "imagen" => "tigre.jpg"],
    ["nombre" => "Cebra", "imagen" => "cebra.jpg"]
];

// Obtenemos el índice actual del animal
$indiceActual = isset($_GET['animal']) ? (int)$_GET['animal'] : 0;

// Siguiente índice (si llegamos al final, volvemos al inicio)
$siguienteIndice = ($indiceActual + 1) % count($animales);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animales</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
            margin: 0;
            font-family: 'Arial', sans-serif;
        }

        .animal-box {
            background-color: #ffffff;
            border: 2px solid #00BCD4;
            padding: 20px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .animal-box img {
            width: 200px;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .animal-box h2 {
            margin: 0;
            font-size: 24px;
            color: #00BCD4;
        }

        .buttons {
            margin-top: 20px;
        }

        .buttons a {
            text-decoration: none;
            padding: 10px 20px;
            background-color: #00BCD4;
            color: white;
            border-radius: 5px;
            margin: 0 10px;
            transition: background-color 0.3s;
        }

        .buttons a:hover {
            background-color: #008c9e;
        }
    </style>
</head>
<body>

    <div class="animal-box">
        <img src="<?php echo SERVERURL; ?>views/assets/icons/img/animales/<?php echo $animales[$indiceActual]['imagen']; ?>" alt="<?php echo $animales[$indiceActual]['nombre']; ?>">
        <h2><?php echo $animales[$indiceActual]['nombre']; ?></h2>

        <div class="buttons">
            <!-- Botón para regresar al menú principal -->
            <a href="dashboard-view.php">Salir al Menú Principal</a>

            <!-- Botón para mostrar el siguiente animal -->
            <a href="animales.php?animal=<?php echo $siguienteIndice; ?>">Siguiente Animal</a>
        </div>
    </div>

</body>
</html>
