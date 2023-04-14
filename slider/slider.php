<?php 

//

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Slider con Bootstrap</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://picsum.photos/800/400/?image=0" class="d-block w-100" alt="Imagen 1">
            </div>
            <div class="carousel-item">
                <img src="https://picsum.photos/800/400/?image=10" class="d-block w-100" alt="Imagen 2">
            </div>
            <div class="carousel-item">
                <img src="https://picsum.photos/800/400/?image=20" class="d-block w-100" alt="Imagen 3">
            </div>
            <div class="carousel-item">
                <img src="https://picsum.photos/800/400/?image=30" class="d-block w-100" alt="Imagen 4">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div>



    <div class="container">
        Otro ejemplo
    </div>

    <div id="slider" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://picsum.photos/800/400/?image=0" class="d-block w-100" alt="Imagen 1">
      <div class="carousel-caption">
        <h3>Título de la imagen 1</h3>
        <p>Descripción de la imagen 1</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://picsum.photos/800/400/?image=10" alt="Imagen 2">
      <div class="carousel-caption">
        <h3>Título de la imagen 2</h3>
        <p>Descripción de la imagen 2</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://picsum.photos/800/400/?image=20" alt="Imagen 3">
      <div class="carousel-caption">
        <h3>Título de la imagen 3</h3>
        <p>Descripción de la imagen 3</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://picsum.photos/800/400/?image=30" alt="Imagen 4">
      <div class="carousel-caption">
        <h3>Título de la imagen 4</h3>
        <p>Descripción de la imagen 4</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#slider" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Siguiente</span>
  </a>
</div>




    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/js/bootstrap.min.js"></script>
    <script src="app.js"></script>
</body>
</html>
