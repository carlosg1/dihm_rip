<?php 
  include_once '../include/mantenimiento.php';
  if(!$mantenimiento) {
    header('Location: ../');
  }
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sitio en mantenimiento</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Incluye Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Incluye tu propio CSS personalizado -->
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <!-- Aquí va el encabezado -->
        <h1>DIRECCIÓN DE INDUSTRIA HIDROCARBURO Y MINERIA</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <!-- Aquí va la imagen de mantenimiento -->
        <img src="mantenimiento-web.png" alt="Sitio en mantenimiento" class="img-fluid mx-auto d-block">
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center">
        <!-- Aquí va el mensaje de mantenimiento -->
        <h2>Sitio en mantenimiento</h2>
        <p>Estamos trabajando para mejorar nuestro sitio web y volveremos pronto.</p>
      </div>
    </div>
  </div>
  <!-- Incluye Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.1/dist/umd/popper-core.min.js"
          integrity="sha384-T+eycbqxvUnP8MD1KgPyhOszjLy/6tN6RRtXtLh+PJjwzZ9z2d44pQ78Zlv2Q5Zj"
          crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
