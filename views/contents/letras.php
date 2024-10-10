<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Galería de letras</title>
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

  <div class="container">
    <div class="row justify-content-center">
      <div class="col">
        <div id="carouselExample" class="carousel slide" data-ride="carousel">

          <!-- cada carouse-inner : es una "card del carucel", el segundo no lleva la class active -->


          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <img src="../assets/img/abecedario/a.png" class="d-block w-100" alt="...">
                  </div>
                  <div class="col-md-6">
                    <img src="../assets/img/Abecedario/asena.png" class="d-block w-100" alt="...">
                  </div>
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <img src="../assets/img/Abecedario/b.png" class="d-block w-100" alt="...">
                  </div>
                  <div class="col-md-6">
                    <img src="../assets/img/Abecedario/c,.png" class="d-block w-100" alt="...">
                  </div>
                </div>
              </div>
            </div>
            
            <div class="carousel-item">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <img src="../assets/img/Abecedario/d1.png" class="d-block w-100" alt="...">
                  </div>
                  <div class="col-md-6">
                    <img src="../assets/img/Abecedario/e.png" class="d-block w-100" alt="...">
                  </div>
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <img src="../assets/img/Abecedario/f.png" class="d-block w-100" alt="...">
                  </div>
                  <div class="col-md-6">
                    <img src="../assets/img/Abecedario/f.png" class="d-block w-100" alt="...">
                  </div>
                </div>
              </div>
            </div>



          </div>



          <!-- Carousel controls -->
          <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>





        </div>

       

      </div>

      <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
          <button class="btn btn-primary">Atrás</button>
        </a>
        <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
          <button class="btn btn-primary">Siguiente</button>
        </a>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.6/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


  <script>
    const images = document.querySelector('.images');
    const totalImages = document.querySelectorAll('.image').length;
    let index = 0;

    document.getElementById('next').addEventListener('click', () => {
      index = (index + 1) % totalImages;
      images.style.transform = translateX(${-index * 100}%);
    });

    document.getElementById('prev').addEventListener('click', () => {
      index = (index - 1 + totalImages) % totalImages;
      images.style.transform = translateX(${-index * 100}%);
    });

    document.getElementById('menu').addEventListener('click', () => {
      window.location.href = 'menu.php'; // Cambia esta ruta si el menú principal está en otra página
    });
  </script>
</body>

</html>