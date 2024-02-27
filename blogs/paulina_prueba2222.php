<?php
$titulo = "Paulina prueba2222";
$contenido = "<div>dsss</div>";

$descripcion = "ggsf";

$rutaDestino = "../img/1d782174-0627-4c9d-8dcc-3001c42ea0e4 (2).jfif";

$autor = "isaacc";

$estado = "Tijuana";
?> 
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Noticias</title>
      <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
  
      <link rel="stylesheet" href="../css/styles.css">
  </head>
  <body>
  
      <header class="site-header">
          <div class="contenedor contenido-header">
              <div class="barra">
              </div>
          </div> <!-- contenedor -->
      </header>

      <div class="centrar-texto">
          <h1 class="fw-700 centrar-texto"><?php echo $titulo  ?> </h1>
          <div class="contenedor seccion contenido-centrado">
            <p><?php echo nl2br($descripcion);  ?> </p> <br>
        </div>
          <img src="<?php echo $rutaDestino ?> " alt="Imagen Anuncio">
      </div>
      
  
      <main class="contenedor seccion contenido-centrado">
          <div class="resumen-propiedad">
              <p class="precio"><?php echo $autor  ?> </p>
             
          </div><!--.resumen-propiedad-->
  
          <p><?php echo nl2br($contenido);  ?> </p>
  
      </main>
  
      <footer class="site-footer seccion">
          <div class="contenedor contenedor-footer">
              <nav class="navegacion">
                  <a href="#">Quiénes somos</a>
                  <a href="#">Contacto</a>
              </nav>
              <p class="copyright">Todos los Derechos Reservados 2023 &copy; </p>
          </div>
      </footer>
  </body>
  </html>