<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wwidth=device-width,user-scalable=no, initial-scale=1.0,maximun-scale=1.0,minimun-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="img/minifav.png">
    <title>Beneficios</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
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


<?php include './php/header.php'; ?>





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
             <a href="beneficios-uni.php">Universidad en Línea </a>
		
		</nav>
		
	</div>
</div>

<body>
    <!-- Imagen en la ventana emergente 
<div class="overlay" id="overlay"></div>
<div class="popup" id="popup">
    <p>¡Conoce los beneficios que te da tu tarjeta SCIN y disfruta los cursos que tenemos para ti!</p>
    <!-- Imagen en la ventana emergente 
    <img src="img/pop.jpg" alt="Imagen Emergente" width="600">

    <p>Si ya cuentas con tu tarjeta SCIN da click en el boton de "Beneficios" para mas información puedes leer el beneficio 5.</p>
    <br>
    <!-- Enlace para redireccionar 
    <a href="cursosbenefic.php" class="btn">Beneficios</a>
    
    <!-- Botón para cerrar la ventana emergente
    <button id="closePopup" class="btn">Cerrar</button>
    
</div>-->

<script>
    // Función para abrir la ventana emergente automáticamente al cargar la página
    window.onload = function() {
        document.getElementById("overlay").style.display = "block";
        document.getElementById("popup").style.display = "block";
    };

    // Función para cerrar la ventana emergente
    document.getElementById("closePopup").addEventListener("click", function () {
        document.getElementById("overlay").style.display = "none";
        document.getElementById("popup").style.display = "none";
    });
</script>  
<style>
      .overlay {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.7);
}

.popup {
  display: none;
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: #fff;
  padding: 60px;
  border-radius: 10px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
  z-index: 1000;
  text-align: center;
}

.popup img {
    width: 100%; /* Asegura que la imagen ocupe todo el ancho disponible */
    max-width: 100%;
    height: auto;
}

.popup .btn {
    margin-top: 10px;
    font-size: 20px;
    cursor: pointer;
    border: 2px solid #8B4513; 
    box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    background-color: #8B4513; 
    color: white;
    margin-left: 10px;
}
p {
font-size: 20px;
border-radius: 5px;

}
    </style>
  <br>
    <h2 class="fw-700 centrar-texto margin">Beneficios</h2>
     

        <!-- contenedor video -->
        <div class="seccion-inferior beneficios">
      <main class="seccion-inferior contenedor seccion centrar-texto">
   
        
        <section class="testimoniales">
            <div class="contenedor contenido-contacto">
              
                <h2>Etapa 1:Beneficios de tener tu credencial
                     con el Gobierno del Supremo Consejo Indígena Nacional</h2>
                <section class="blog">
            <video src="./video/beneficiouno.webm" width="800px" height="500px" controls >
                 <source src=”./video/beneficiouno.webm” type=”video/mp4”>
                Tu navegador no admite la etiqueta de video.
              </video>
        </section>
        <br>
</source>
                <p>Reconociendo y protegiendo los derechos territoriales de los pueblos indígenas.
                    Los pueblos indígenas de México tienen un derecho fundamental a sus tierras y territorios.
                     Estos territorios son la base de su cultura, su economía y su identidad. 
                     Sin embargo, los pueblos indígenas han sido históricamente marginados y sus territorios han 
                     sido usurpados.
                    </p>
                  <span class="dots">...</span>

                  <p class="extra">Es por eso que es importante reconocer y proteger los derechos 
                    territoriales de los pueblos indígenas. Esto significa identificar
                     y mapear sus territorios ancestrales, negociar con el gobierno y 
                     otras partes interesadas para asegurar el reconocimiento y protección
                      legal de estos territorios, y apoyar a los pueblos indígenas en el 
                      desarrollo de sus propios sistemas de gobernanza territorial.
                  Beneficios del reconocimiento y protección de los derechos territoriales: <br>
      El Gobierno del Supremo Consejo Indígena Nacional está comprometido por cuidar y velar por el reconocimiento
 y protección de los derechos territoriales
 de los pueblos indígenas por ejemplo:Proteger el derecho de los pueblos indígenas a su cultura, 
 su economía y su identidad.
Impulsar programas que promuevan el uso sostenible de los recursos naturales.
Acceso a empleos que reduzcan la pobreza y la marginación.
Mejorar la salud y el bienestar de los pueblos indígenas.
Fortalecer la democracia y la paz.
Activar a la comunidad con un Llamado a la acción!!!.
Al pertenecer a la comunidad a través de la autoadscripción con tu credencial
 vamos a estar comunicando las alianzas con el gobierno mexicano, gobiernos 
 extranjeros y otras partes interesadas para que trabajen juntos para reconocer
  y proteger los derechos territoriales de los pueblos indígenas. Esto es esencial
   para garantizar que los pueblos indígenas puedan vivir una vida digna y próspera.</p>
                    <input type="checkbox" id="btn1">
                    <label for="btn1">Leer mas</label>             
</div>
</main>
</section>
</section>
</div>
  <!-- termina primer video-->

  <!-- contenedor video -->
 <main class="seccion-inferior contenedor seccion centrar-texto">
      
</source>
        <section class="testimoniales">
            <div class="contenedor contenido-contacto">
            <br><br><br>
                <h2>Etapa 2:Preservación de la identidad cultural</h2>
                
                <section class="blog">
            <video src="./video/beneficio2.webm" width="800px" height="500px" controls  >
                 <source src=”./video/beneficio2.wemb” type=”video/mp4”>
                Tu navegador no admite la etiqueta de video.
              </video>
        </section>
        <br>
                <p>Los pueblos indígenas de México tienen una rica cultura
                     que ha sido transmitida de generación en generación durante siglos. 
                     Sin embargo, esta cultura está en peligro de desaparecer 
                     debido a la globalización, la migración y otros factores.
                     Es por eso que es importante preservar la identidad cultural de 
                    los pueblos indígenas. </p>

                  <span class="dots">...</span>

                  <p class="extra"> Esto significa apoyar el desarrollo de programas educativos 
                    que respeten y valoren la cultura indígena, promover el uso de las lenguas indígenas 
                    en la educación, los medios de comunicación y la vida pública, documentar y preservar 
                    el patrimonio cultural indígena, incluyendo la música, la danza, las artes y los 
                    conocimientos tradicionales, y apoyar a las comunidades indígenas en la revitalización 
                    de sus prácticas culturales.Al obtener tu credencial del Gobierno del Supremo Consejo Indígena
                     Nacional obtendrás los siguientes beneficios con programas de la preservación de la identidad cultural 
                     Programas digitales y físicos para fortalecer la identidad y la autoestima de los pueblos indígenas.Proteger 
                     el conocimiento tradicional, que puede ser valioso para el desarrollo sostenible a 
                     través de equipos comunitarios.Promover la diversidad cultural y el diálogo 
                     entre diferentes grupos y alianzas.Ayudar a prevenir la marginación y la discriminación 
                     de los pueblos indígenas.Fortalecer el turismo cultural, que puede
                      generar ingresos para las comunidades indígenas.Al pertenecer a la 
                      comunidad a través de la autoadscripción con tu credencial 
                      vamos a estar comunicando las alianzas con el gobierno mexicano,
                       gobiernos extranjeros y a otras partes interesadas a que trabajen 
                       juntos para preservar la identidad cultural de los pueblos indígenas.
                        Esto es esencial para garantizar que los pueblos indígenas puedan mantener 
                        su cultura viva y vibrante, y para que puedan contribuir plenamente al desarrollo
                         de México.</p>
                    <input type="checkbox" id="btn2">
                    <label for="btn2">Leer mas</label>           
</div>
</main>
</section>
</section>
</div>
  <!-- termina segundo video-->

  <!-- contenedor video -->
 <main class="seccion-inferior contenedor seccion centrar-texto">
     
</source>
        <section class="testimoniales">
            <div class="contenedor contenido-contacto">
            <br><br><br>
                <h2>Etapa 3: Acceso a salud respetando los usos
                     y costumbres y costumbres de las comunidades indígenas y pueblos originarios.</h2>
                <section class="blog">
            <video src="./video/beneficio3.webm" width="800px" height="500px" controls  >
                 <source src=”./video/beneficio3.webm” type=”video/mp4”>
                Tu navegador no admite la etiqueta de video.
              
              </video>
        </section>
        <br>
                <p>Estamos identificando las necesidades sanitarias 
                   específicas de las comunidades indígenas y pueblos originarios. Desarrollar programas de salud que sean culturalmente 
                    apropiados para estas comunidades, basándonos en los usos y costumbres. Proporcionaremo 
                    a las comunidades indígenas los recursos necesarios para implementar estos programas.</p>

                  <span class="dots">...</span>

                  <p class="extra"> Vamos a reclutar personal médico, 
                    hombres y mujeres medicina que cuenten con
                     los conocimientos ancestrales para cuidar de manera honorable la salud de la comunidad.
                     Capacitar al personal de salud en las necesidades específicas de las comunidades indígenas. 
                     Al pertenecer a la comunidad a través de la autoadscripción con tu credencial vamos
                      a estar comunicando las alianzas con el gobierno mexicano,
                       gobiernos extranjeros y a otras partes interesadas a que trabajen
                        juntos para preservar el acceso a la salud respetando los usos y 
                        costumbres de las comunidades indígenas y pueblos originarios.</p>
                    <input type="checkbox" id="btn3">
                    <label for="btn3">Leer mas</label>           
</div>
</main>
</section>
</section>
</div>
</div>
  <!-- termina tercer  video-->
  
   <!-- contenedor video -->
 <main class="seccion-inferior contenedor seccion centrar-texto">
      
</source>
        <section class="testimoniales">
            <div class="contenedor contenido-contacto">
            <br><br><br>
                <h2>Etapa 4:Fortaleciemiento de la autonomia y gobernancia indigena</h2>
                <img src="./video/4.jpg" alt="Imagen de beneficios" width="800px" height="500px">
            
                
                <section class="blog">
            <video src="./video/beneficio4.mp4" width="800px" height="500px" controls  >
                 <source src=”./video/beneficio4.mp4” type=”video/mp4”>
                Tu navegador no admite la etiqueta de video.
              </video>
        </section>
        <br>
                <p> <!---aqui va el texto ---></p>

                  <span class="dots">...</span>

                  <p class="extra"> <!---aqui va el texto ---> </p>
                    <input type="checkbox" id="btn2">
                    <label for="btn2">Leer mas</label>           
</div>
</main>
</section>
</section>
</div>
  <!-- termina cuarto video-->
</div>
  <!-- contenedor video -->
  <main class="seccion-inferior contenedor seccion centrar-texto">
      
      </source>
              <section class="testimoniales">
                  <div class="contenedor contenido-contacto">
                  <br><br><br>
                      <h2>Etapa 5:Beneficios que te otorga tu credencial "SCIN"</h2>
                
                      <img src="./video/5.jpg" alt="Imagen de beneficios" width="800px" height="500px">
                     
                      <section class="blog">
                  <video src="./video/beneficio5.webm" width="800px" height="500px" controls  >
                       <source src=”./video/beneficio5.wemb” type=”video/mp4”>
                      Tu navegador no admite la etiqueta de video.
                    </video>
              </section>
              <br>
                      <p><!---aqui va el texto ---> </p>
      
                        <span class="dots">...</span>
      
                        <p class="extra"> <!---aqui va el texto ---></p>
                          <input type="checkbox" id="btn2">
                          <label for="btn2">Leer mas</label>           
      </div>
      </main>
      </section>
      </section>
      </div>
        <!-- termina quinto video-->


<br><br>


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


          