<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wwidth=device-width,user-scalable=no, initial-scale=1.0,maximun-scale=1.0,minimun-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="img/minifav.png">
    <title>UD: UNIVERSIDAD INTERCULTURAL DIGITAL</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/contacto-uni.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
  
    
   <!-- Agrega el enlace a Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
</head>
<header class="header">
	<div class="container">
		<div class="btn-menu">
            <!-- En el index.html -->
<label id="milabel" class="menu-icon-index" for="btn-menu"><i class="fas fa-bars"></i></label>
		</div>
		<div class="logo">
				<a href="beneficios-uni.php">
				<img style="width: 170px" src="img/logouniversidad.png" alt="Logotipo">
			</a>
			<h1>Universidad Intercultural Digital</h1>
		</div>
		<nav class="menu">
			<a href="beneficios-uni.php">Home</a>

			
		</nav>
	</div>
</header>



<div class="capa"></div>
<!--	--------------->
<input type="checkbox" id="btn-menu">
<div class="container-menu">
	<div class="cont-menu">
    <label for="btn-menu"> &#10005; </label>
		<nav>
			<a href="beneficios-uni.php">Home</a>

		</nav>
		
	</div>
</div>

<body>

<br><br><br><br><br>
<div class="context">
        <h1>Carreras</h1>
    </div>

    <?php include './menu-carreras.php'; ?> 
</body>

<br><br><br>

<footer class="site-footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                  <a href="politicadeprivacidad.php">Política de privacidad</a>
        <a href="terminosyservicios.php">Terminos y Servicios</a>
                <a clas= "xd"href="contacto-uni.php">Contacto</a>
            </nav>
            <p class="nuevo-nombre">Todos los Derechos Reservados 2023 &copy; </p>
        </div>
    </footer>


</html>
