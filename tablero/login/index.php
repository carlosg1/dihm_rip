<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ingresar al Tablero DIHM</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="keywords" content="dihm, dirección de industria hidrocarburo y mineria, formosa tu ciudad, hidrocarburo, mineria, registro de industria">
	<meta name="description" content="Información institucional, consultas, trámites, registro de industria">
	<meta name="robots" content="FOLLOW,INDEX">
    <meta name="author" content="Gobierno de la Provincia de Formosa">

    <script src="https://cdn-www.formosa.gob.ar/js/jquery.min.js"></script>
	<!-- <script src="https://cdn-www.formosa.gob.ar/js/jquery-migrate-1.2.1.js"></script>
	<script src="https://cdn-www.formosa.gob.ar/js/jquery-ui.min.js"></script> -->

    <link rel="stylesheet" href="style.css">
</head>

<body>
    
    <!-- Form de login / inicio -->
    <div class="wrapper login">
        <div class="container">
            <div class="col-left">
                <div class="login-text">
                    <h2>Tablero</h2>
                    <p>Direcci&oacute;n de Industria,<br/>Hidrocarburos<br/>y Miner&iacute;a<br><br>D.I.H.M.</p>
                    <!-- <a href="" class="btn">Sign Up</a> -->
                </div>
            </div>

            <div class="col-right">
                <div class="login-form">
                    <h2>Acceso</h2>
                    <form id="frmLogin" action="" method="POST">
                        <p>
                            <label>Usuario<span>*</span></label>
                            <input type="text" class="usuario" placeholder="Usuario" required>
                        </p>
                        <p>
                            <label>Contrase&ntilde;a<span>*</span></label>
                            <input type="password" class="password" placeholder="Contrase&ntilde;a" required>
                        </p>
                        <p>
                            <input class="btnIngresar" type="button" value="Ingresar">
                        </p>
                        <p>
                            <div class="form-msg">&nbsp</div>
                        </p>

                    </form>
                </div>
            </div>
            <!-- Form de login / fin -->

        </div>
    </div>


    <!-- librerias -->
	<script src="https://cdn-www.formosa.gob.ar/js/bootstrap.min.js"></script>
	<script src="login.js"></script>
</body>

</html>