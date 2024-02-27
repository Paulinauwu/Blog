<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
    <meta name="viewport" content="wwidth=device-width,user-scalable=no, initial-scale=1.0,maximun-scale=1.0,minimun-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="../img/minifav.png">
    <title>Registro</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
     
   <!-- Agrega el enlace a Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<?php include 'header.php'; ?>





<div class="capa"></div>
<!--	--------------->
<input type="checkbox" id="btn-menu">
<div class="container-menu">
	<div class="cont-menu">
    <label for="btn-menu"> &#10005; </label>
		<nav>
			<a href="../php/signup.php">Registrate</a>
			<a href="../noticias.php">Blog</a>
			<a href="../beneficios.php">Beneficios</a>
		    <a href="../Instituciones-Internas/Politica-interna.php">Instituciones Internas</a>
		    <a href="../Instituciones externas/Politica externa.php">Instituciones Externas</a>
            <a href="../proyectos.php">Proyectos</a>
             <a href="../beneficios-uni.php">Universidad en Línea </a>
		</nav>
		
	</div>
</div>

<body class="fondo">
    

 
       <div id="wrapper" class="contenedor seccion-login">
  
         
            
                  


                  <div class="login-box">
                  <h2>Ingresa los siguientes datos</h2>
                        <form  method="POST" name="form-work" action="guardar.php">
                    
                  
                          
                                 
                                 
                                    <div class="user-box">
                                      
                                      <input name="usuario" class="form-control" placeholder="Ingresa tu nombre" type="text" required>
                                      </div>
                                 
                          
                                   
                                       
                                      <div class="user-box">
                                        <input name="email" class="form-control" placeholder="Ingresa un correo electronico" type="text" required>
                                      </div>
                                  
                          
                                    
                          
                                    
                                     
                                     
                                   
                                      <div class="user-box">
                                        <input name="clave" class="form-control" placeholder="Ingresa tu contraseña" type="password" required>
                                      </div>  
                          
                                         
                                   
                                  
                                    <div class="button-container">
                                     
                                      <input id="inicio" type="submit" value= "registrar" >
                                         
                                          
                                    </div>
                                        
                                 
                              </form>
                   </div>
       </div>
  </div> 




</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</html>