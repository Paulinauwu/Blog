<?php
    
    include 'scripts/funciones.php';
    
  if (!isset($_COOKIE['cookies_accepted'])) {
    // Mostrar el banner de política de cookies
    echo '<div id="cookie-banner" class="cookie-banner">
            <p>Este sitio web utiliza cookies para mejorar la experiencia del usuario. Al continuar navegando en este sitio, aceptas nuestro uso de cookies.</p>
            <form method="post">
                <button type="submit" name="accept-cookies-btn" class="accept-cookies-btn">Aceptar</button>
            </form>
          </div>';
} else {
    // Aquí colocas el contenido de tu página para usuarios que han aceptado las cookies
}


// Procesar el envío del formulario
if (isset($_POST['accept-cookies-btn'])) {
    // Establecer la cookie 'cookies_accepted' con una fecha de expiración adecuada (por ejemplo, un año)
    setcookie('cookies_accepted', 'true', time() + 20, '/');
    
    // Redirigir o recargar la página para que la cookie tenga efecto
    header('Location: ' . $_SERVER['REQUEST_URI']);
    exit();
}
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wwidth=device-width,user-scalable=no, initial-scale=1.0,maximun-scale=1.0,minimun-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="icon" type="image/png" href="img/minifav.png">
    <title>Plataforma Indígena Nacional</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
         <!-- Agrega el enlace a Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    
</head>
 <!-- Conexión de Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-TZFWEKH1YG"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-TZFWEKH1YG');
</script>
<header class="header">
	<div class="container">
		<div class="btn-menu">
            <!-- En el index.html -->
<label id="milabel" class="menu-icon-index" for="btn-menu"><i class="fas fa-bars"></i></label>
		</div>
		<div class="logo">
			<a href="index.php">
				<img style="width: 170px" src="./img/2-05.png" alt="Logotipo">
			</a>
			<h1>Plataforma Indígena Internacional</h1>
		</div>
		<nav class="menu">
			<a href="index.php">Inicio</a>
			<a href="beneficios.php">Beneficios</a>
			<a href=php/signup.php>Registrarse</a>
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
			<a href="">Menú </a>
	
			
			<a href="index.php">Inicio</a>
			<a href="beneficios.php">Beneficios</a>
			<a href="php/signup.php">Registrarte</a>
		</nav>
		
	</div>
</div>

<body> 
      
   
      <main class="seccion-inferior contenedor seccion centrar-texto">
     <section class="blog">

            <video src="./video/videoindigenas.webm" width="350px" height="600px" controls autoplay >
                 <source src=”./video/videoindigenas.webm” type=”video/mp4”>
                Tu navegador no admite la etiqueta de video.
              </video>
            
        </section>
      
        <section class="testimoniales">
            <div class="contenedor contenido-contacto">
               <br>  <h2>Imprescriptibles, Inalienables e Inembargables</h2>
                <br> <br>
                <p>A toda aquella persona portadora de esta credencial favor de darle la atención en base al artículo 1° de los Derechos Humanos, artículo 2° de la Constitución Política de los Estados Unidos Mexicanos y Tratados Internacionales que forma parte el Estado Mexicano OIT 169° de Pueblos Indígenas y Tribales.Formando así parte del Gobierno del Supremo Consejo Indígena Nacional</p>
          
               
            </div>
        </section>
    </main>
             
        </section>
       
       <br></br>
       
        <section class="BgImage1"></section>
        
<!--testimonio 
        <section class="testimoniales">
            <div class="contenedor contenido-contacto">
                <h2>Nuestra palabra, nuestro caminar y nuestra lucha irrenunciable</h2>
                <p>Somos el Congreso Nacional Indígena y  el futuro de nuestros pueblos es prioridad</p>
                <br></br>   
                <h1>¡Forma parte de nuestra comunidad afiliada!</h1>
                  
                <p>Da clic en el boton para llenar el formulario de registro</p>
                <a href="regis-afiliado.php" class="boton boton-amarillo">Registrate</a>
            </div>
        </section>
    </main>
          -->
    
    
  <section class="testimoniales">
         <main class="seccion-inferior contenedor seccion centrar-texto">

        <div class="iconos-nosotros ">
            <div class="icono">
                <img src="./img/icono-mision2.svg" alt="Icono Seguridad">
               <br></br>
                <h4><p>Este documento es responsabilidad de aquella persona portadora de la misma, apegándose a los usos y costumbres de los pueblos originarios de esta gran nación.Así cómo la comunidad indígena respeta las leyes constitucionales, pedimos con todo respeto el respeto de los derechos por usos y costumbres, salvaguardando la identidad cultural, ancestral y milenaria de la comunidad.Nuestro legado se basa en la Espiritualidad - Consciencia - Moral - Ética.</p></h4>
            </div>
         
        </div>
             
    </section>

             <section class="BgImage2"></section>

    <section class="testimoniales">
         <main class="seccion-inferior contenedor seccion centrar-texto">

        <div class="iconos-nosotros ">
           
            <div class="icono">
                <img src="./img/icono-vision.svg" alt="Icono Mejor Precio">
                <br></br>
                <h4><p>Los pueblos indígenas son los guardianes de una sabiduría ancestral. Han vivido en armonía con la tierra durante siglos, y sus conocimientos son fundamentales para proteger el medio ambiente.Los pueblos indígenas tienen derechos consuetudinarios y naturales que han sido transmitidos de generación en generación. Estos derechos están relacionados con su relación con la tierra, su cultura y su modo de vida.Los pueblos indígenas están luchando para proteger sus tierras, culturas y modos de vida de la destrucción y la contaminación. Necesitamos apoyarlos y ayudar a garantizar que sus derechos sean respetados.Podemos apoyar a los pueblos indígenas informándonos sobre sus derechos, donando a organizaciones que los apoyan, escribiendo a nuestros representantes políticos y educando a otros sobre su importancia.Juntos, podemos construir un futuro donde los pueblos indígenas sean valorados y respetados, y donde sus conocimientos y prácticas sean preservados para las generaciones futuras.</p></h4>
                
                
            </div>
        </div>
             
    </section>

    <section class="BgImage3"></section>
    
  

    </body>
    

    
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


        

</html>



   

    

    
       