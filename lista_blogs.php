<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="img/minifav.png">
  <title>Lista de Noticias</title>
  <link rel="stylesheet" type= "text/css" href ="/css/stylean.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

 

</head>
<body>



<main>
<div class="title-container">
    <h1 class="page-title">LISTA DE BLOG</h1>
</div>

<!-- Paginación kev-->
 <link rel="stylesheet" href="css/stylean.css">
<input type="text" id="busqueda" onkeyup="buscar(event)" placeholder="Buscar por título...">


<!-- tabla exterior kev-->
 <table class="outer-table">
    <tr>
      <td>
    <table>
    <tr>
<table>
    <tr>
        <th>ID</th>
        <th>Título</th>
        <th>Descripción</th>
        <th>Contenido</th>
        <th>Autor</th>
        <th>Estado</th>
        <th>Imagen</th>
        <th>Editar</th>
    </tr>
    <?php
    include 'php/conexion.php'; // Incluir el archivo de conexión a la base de datos

    // Configuración de paginación
    $resultados_por_pagina = 10; // Número de resultados por página
    $pagina_actual = isset($_GET['pagina']) ? intval($_GET['pagina']) : 1; // Página actual

    $consulta_total = "SELECT COUNT(*) AS total FROM blogs";
    $result_total = mysqli_query($conectar, $consulta_total);
    $total_resultados = mysqli_fetch_assoc($result_total)['total'];
    $total_paginas = ceil($total_resultados / $resultados_por_pagina);

    $inicio_resultados = ($pagina_actual - 1) * $resultados_por_pagina;
    $consulta_paginada = "SELECT * FROM blogs LIMIT $inicio_resultados, $resultados_por_pagina";
    $result_paginado = mysqli_query($conectar, $consulta_paginada);

    while ($row = mysqli_fetch_assoc($result_paginado)) {
        $id = $row['id'];
        $titulo = $row['titulo'];
        $descripcion = $row['descripcion'];
        $contenido = $row['contenido'];
        $imagen = "img/" . $row['imagen'];
        $autor = $row['autor'];
        $estado = $row['estado'];

        // Acortar la descripción para mostrar solo una parte breve
        $descripcion_corta = substr($descripcion, 0, 100) . "...";
        echo "<tr>";
        echo "<td>$id</td>";
        echo "<td>$titulo</td>";
        echo "<td>$descripcion_corta</td>";
        echo "<td>$contenido</td>";
        $imagen = $row['imagen']; // Ruta almacenada en la base de datos
        echo "<td>$autor</td>";
        echo "<td>$estado</td>";

        // Si la ruta no comienza con "img/", agregar "img/"
        if (strpos($imagen, 'img/') === false) {
            $imagen = "img/" . $imagen;
        }

        echo "<td><img src='$imagen' alt='Imagen' width='100'></td>";
        echo "<td><a href='editar_blog.php?id=$id'><img src='img/editarr.png' alt='Editar' class='edit-icon'></a></td>";
        echo "</tr>";
    }
    ?>

</table>

<!-- ... (código anterior) ... -->

<!-- Paginación kev-->
<div class="pagination">
    <?php if ($total_paginas > 1) : ?>
        <?php
        $inicio_rango = floor(($pagina_actual - 1) / 5) * 5 + 1;
        $fin_rango = min($inicio_rango + 4, $total_paginas);
        ?>

        <?php if ($pagina_actual > 1) : ?>
            <a href="?pagina=<?php echo $pagina_actual - 1; ?>">&larr;</a>
        <?php endif; ?>

        <?php for ($pagina = $inicio_rango; $pagina <= $fin_rango; $pagina++) : ?>
            <a href="?pagina=<?php echo $pagina; ?>" <?php if ($pagina === $pagina_actual) echo 'class="active"'; ?>><?php echo $pagina; ?></a>
        <?php endfor; ?>

        <?php if ($pagina_actual < $total_paginas) : ?>
            <a href="?pagina=<?php echo $pagina_actual + 1; ?>">&rarr;</a>
        <?php endif; ?>
    <?php endif; ?>
</div>

<!-- ... (código posterior) ... -->



<!-- scrip pag kev-->
<script>
    function buscar(event) {
        if (event.key === 'Enter') {
            var input = document.getElementById("busqueda");
            var filter = input.value.toUpperCase();
            var table = document.querySelector("table");
            var rows = table.getElementsByTagName("tr");

            for (var i = 1; i < rows.length; i++) {
                var title = rows[i].getElementsByTagName("td")[1];
                if (title) {
                    var txtValue = title.textContent || title.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        rows[i].style.display = "";
                    } else {
                        rows[i].style.display = "none";
                    }
                }
            }
        }
    }
</script>
</main>
<br>

</body>
</html>
