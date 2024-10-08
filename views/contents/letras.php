<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galería de letras</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        .carousel {
            position: relative;
            width: 80%;
            max-width: 600px;
            overflow: hidden;
        }
        .images {
            display: flex;
            transition: transform 0.5s ease;
        }
        .image {
            min-width: 100%;
            transition: opacity 0.5s ease;
        }
        .buttons {
            margin-top: 20px;
        }
        button {
            padding: 10px 20px;
            margin: 0 10px;
            border: none;
            background-color: #007bff;
            color: white;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="carousel">
        <div class="images">
            <img src="views/assets/img/colores.png" alt="Animal 1" class="image">
            <img src="views/assets/img/logo.png" alt="Animal 2" class="image">
            <img src="views/assets/img/meses.png" alt="Animal 3" class="image">
        </div>
    </div>

    <div class="buttons">
        <button id="prev">Anterior</button>
        <button id="next">Siguiente</button>
        <button onclick="window.location.href='http://localhost/PROYECTO_ESCUELA/dashboard/';">Regresar al Menú Principal</button>
    </div>

    <script>
        const images = document.querySelector('.images');
        const totalImages = document.querySelectorAll('.image').length;
        let index = 0;

        document.getElementById('next').addEventListener('click', () => {
            index = (index + 1) % totalImages;
            images.style.transform = `translateX(${-index * 100}%)`;
        });

        document.getElementById('prev').addEventListener('click', () => {
            index = (index - 1 + totalImages) % totalImages;
            images.style.transform = `translateX(${-index * 100}%)`;
        });

        document.getElementById('menu').addEventListener('click', () => {
            window.location.href = 'menu.php'; // Cambia esta ruta si el menú principal está en otra página
        });
    </script>
</body>
</html>
