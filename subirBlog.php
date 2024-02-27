
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Sube tu Blog</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/siteText.css">
    <link rel="stylesheet" href="css/richtext.min.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="./js/jquery.richtext.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <!-- Agrega el enlace a Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>

<?php include './php/header-usuario.php'; ?>

    <h2 class="fw-300 centrar-texto">Sube tu Blog</h2>
    

    <main class="contenedor seccion contenido-centrado">
        <h3 class="fw-300 centrar-texto" > Contenido
   
      </div>
        </h3>

        <form class="contacto" action="scripts/crear_pagina.php" method="POST" enctype="multipart/form-data">
            <fieldset>
                <h4>Noticia</h4>
                <label for="titulo">Titulo:</label>
                <input type="text" name="titulo" placeholder="Coloca un titulo">

                <label for="descripcion">Coloca la descripción de tu blog: </label>
                <textarea style ="height:10rem; resize: none; " name="descripcion" rows="2" cols="10" required></textarea><br>

                <label for="imagen">Sube tu imagen</label>
                <input class="boton boton-verde" type="file" name="imagen" placeholder="Sube tu imagen" required>

               
                <label for="imagen" >Sube tu contenido</label>
                <div class="container">
                <section class="formularioProyecto aling-items-stretch">
                <div class="container-fluid">
                    <br>

                    <!-- Apartado para editor te texto -->

                    <div class="page-wrapper box-content">
                    <textarea class="content" name="contenido"></textarea>
                    </div>
                    <script>
                     $(document).ready(function() {
                    $('.content').richText();
                        });
                    </script><br>

                <label for="autor">Nombre del autor: </label>
                <input type="text" name="autor" placeholder="Coloca el nombre del autor"><br>

        
                <label for="estado">Selecciona el estado: </label>
                <select name="estado" required>
                    <option value="" disabled selected>-- Seleccione --</option>
                    <option value="CDMX">CDMX</option>
                    <option value="Puebla">Puebla</option>
                    <option value="Tijuana">Tijuana</option>
                    <option value="Tlaxcala">Tlaxcala</option>
                </select>

               
            </fieldset>
            
            <input type="submit" value="Subir" class="boton boton-verde">

        </form>
        <br>
    </main>

    <footer class="site-footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="index.php">Quiénes somos</a>
                <a href="contacto.php">Contacto</a>
            </nav>
            <p class="copyright">Todos los Derechos Reservados 2023 &copy; </p>
        </div>
    </footer>
</body>
</html>