<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Slider con Bootstrap 4</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<style>
		.carousel-item img {
			height: 800px;
			width: 100%;
			object-fit: cover;
		}
		.carousel-caption {
			background-color: rgba(0, 0, 0, 0.4);
			padding: 20px;
			border-radius: 10px;
		}
		.carousel-caption h2 {
			font-family: 'Arimo Bold', sans-serif;
			color: #ffffff;
		}
	</style>
</head>
<body>

	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleControls" data-slide-to="1"></li>
			<li data-target="#carouselExampleControls" data-slide-to="2"></li>
			<li data-target="#carouselExampleControls" data-slide-to="3"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="https://images.unsplash.com/photo-1577669025317-3c3a58d369e3?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Imagen 1">
				<div class="carousel-caption d-none d-md-block">
					<h2>DIRECCIÓN DE INDUSTRIA, HIDROCARBURO Y MINERÍA</h2>
				</div>
			</div>
			<div class="carousel-item">
				<img src="https://images.unsplash.com/photo-1603732477474-119912f8cf90?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Imagen 2">
				<div class="carousel-caption d-none d-md-block">
					<h2>DIRECCIÓN DE INDUSTRIA, HIDROCARBURO Y MINERÍA</h2>
				</div>
			</div>
			<div class="carousel-item">
				<img src="https://images.unsplash.com/photo-1603732480752-e3e3cf3ca42a?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Imagen 3">
				<div class="carousel-caption d-none d-md-block">
					<h2>DIRECCIÓN DE INDUSTRIA, HIDROCARBURO Y MINERÍA</h2>
				</div>
			</div>
			<div class="carousel-item">
				<img src="https://images.unsplash.com/photo-1603732474384-eeb6a5b6d5ab?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Imagen 4">
				<div class="carousel-caption d-none d-md-block">
					<h2>DIRECCIÓN DE INDUSTRIA, HIDROCARBURO Y MINERÍA</h2>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Anterior</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Siguiente</span>
		</a>
	</div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	<script>
		$(document).ready(function() {
			$('.carousel').carousel({
				interval: 5000
			});
		});
	</script>

</body>
</html>
