<?php
    
    include 'scripts/funciones.php';
    
?>
<?php
	include 'php/conexion.php';
	
	//$password=password_hash($_POST['password'],PASSWORD_DEFAULT);
	
     // Consulta SQL para obtener los datos de las entradas
     $sql = "SELECT  id,titulo, descripcion, autor, imagen FROM blogs ORDER BY id DESC ";

     // Ejecutar la consulta
     $result=mysqli_query($conectar,$sql);
    


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wwidth=device-width,user-scalable=no, initial-scale=1.0,maximun-scale=1.0,minimun-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="img/minifav.png">
    <title>Supremo Consejo Indígena Nacional</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
  
    
   <!-- Agrega el enlace a Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
</head>
    <?php include './php/header.php'; ?>
 <!-- Conexión de Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-TZFWEKH1YG"></script>


<div id="content" class="hidden-content">   </div>

<script>
   
var loadingText = document.querySelector(".loading-content p");


var letters = loadingText.querySelectorAll("span");


function showLetters(index) {
    if (index < letters.length) {
        letters[index].style.visibility = "visible";
        setTimeout(function() {
            showLetters(index + 1);
        }, 40);  
    }
}


window.onload = function() {
    showLetters(0);
};
       
        var loadingOverlay = document.getElementById("loading-overlay");

        
        var content = document.getElementById("content");

        
        if (loadingOverlay && content) {
           
            setTimeout(function() {
               
                content.style.display = "block"; 
                loadingOverlay.remove(); 
            }, 4000);
        }
    </script>
    





<div class="capa"></div>
<!--	--------------->
<input type="checkbox" id="btn-menu">
<div class="container-menu">
	<div class="cont-menu">
    <label for="btn-menu"> &#10005; </label>
		<nav>
			<a href="php/signup.php">Registrate</a>
			<a href="noticias.php">Blog</a>
			<a href="beneficios.php">Beneficios</a>
		    <a href="Instituciones-Internas/Politica-interna.php">Instituciones Internas</a>
		    <a href="Instituciones externas/Politica externa.php">Instituciones Externas</a>
            <a href="proyectos.php">Proyectos</a>
            <a href="eventos.php">Eventos</a>
             <a href="beneficios-uni.php">Universidad en Línea </a>
		</nav>
		
	</div>
</div>

<body>

    <!-- <br>
    <br>
        <center><h1>Supremo Consejo Indigena Nacional</h1></center> 
        <br>
      <main class="seccion-inferior contenedor seccion centrar-texto">
     <section class="blog">

            <video src="./video/videoindigenas.webm" width="350px" height="600px" controls autoplay >
                 <source src=”./video/videoindigenas.webm” type=”video/mp4”>
                Tu navegador no admite la etiqueta de video.
              </video>
              -->
              <!--
        </section>
      
        <section class="testimoniales">
            <div class="contenedor contenido-contacto">
                <h2>Imprescriptibles, Inalienables e Inembargables</h2>
                <p>Somos el Congreso Nacional Indígena y  el futuro de nuestros pueblos es prioridad</p>
                <br></br>   
                <h1>¡Forma parte de nuestra comunidad afiliada!</h1>
                  
                <p>Da clic en el boton para llenar el formulario de registro</p>
                <a href="regis-afiliado.php" class="boton boton-amarillo">Registrate</a>
            </div>
        </section>
    </main>
     -->
    <section class="contenedor seccion ">
       

        <div class="iconos-nosotros ">
            <div class="icono">
                <img src="./img/icono-mision2.svg" alt="Icono Seguridad">
                <h3></h3>
                
            <div class="icono">
                <img src="./img/icono-vision.svg" alt="Icono Mejor Precio">
                <h4></h4>
                <p></p>
            </div>
            
        </div>
    </section>

    <body>
    <main class="seccion contenedor">
        <h2 class="fw-300 centrar-texto">Blog</h2>
        <div class="contenedor-anuncios">
        <?php 

        while($mostrar=mysqli_fetch_array($result)){
            //Esta parte es para limitar los caracteres en la prevía
            $palabras = explode(" ", $mostrar ['descripcion'] ); // Dividir el texto en palabras
            $numPalabras = 30; // Número de palabras que se mostrarán
            
            $contenidoLimitado = implode(" ", array_slice($palabras, 0, $numPalabras)); // Unir las primeras palabras nuevamente
            
         ?>
       
            <div class="anuncio">
            <a  href="blogs/<?php echo strtolower( str_replace(' ', '_', $mostrar['titulo'])) . '.php'; ?>">
                <img src="<?php echo "img/" . $mostrar ['imagen'];  ?> " alt="Imagen noticia">
                <div class="contenido-anuncio">
                    <h3> <?php echo $mostrar ['titulo']; ?> </h3>
                    <p><?php echo $contenidoLimitado  ?> </p>
                    <p class="precio"><?php echo $mostrar ['autor']; ?> </p>
                    
                      
                    </a>
                </div>
            </div>    
            <?php 
		    }
		    ?>
        </div>
        
		
    </main>
      
    

  <footer class="site-footer seccion">
    <div class="contenedor contenedor-footer">
        <nav class="navegacion">
        <a href="politicadeprivacidad.php">Política de privacidad</a>
        <a href="terminosyservicios.php">Terminos y Servicios</a>
            <a href="contacto.php">Contacto</a>
         
        </nav>
        <p class="copyright">Todos los Derechos Reservados 2023 &copy; </p>
    </div>
</footer>
</body>
</html>

    
