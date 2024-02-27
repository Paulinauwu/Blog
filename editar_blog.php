<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="img/minifav.png">
  <title>Editar Blog</title>
  <link rel="stylesheet" href="css/stylean.css">
</head>
<body class="editar-blog">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">



<?php
include 'php/conexion.php'; // Incluir el archivo de conexión a la base de datos

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Aquí puedes obtener los datos del formulario editado
        $nuevoTitulo = $_POST['nuevo_titulo'];
        $nuevaDescripcion = $_POST['nueva_descripcion'];
        $nuevaContenido = $_POST['nueva_contenido'];
        $nuevaAutor = $_POST['nueva_autor'];
        $nuevaEstado = $_POST['nueva_estado'];

        $imagen_actual = $row['imagen']; // Obtener el nombre de la imagen actual

        if (!empty($_FILES['nueva_imagen']['tmp_name'])) {
            $rutaImagenTemporal = $_FILES['nueva_imagen']['tmp_name'];
            $nuevaImagen = $_FILES['nueva_imagen']['name'];
        
            // Si la ruta no comienza con "img/", agregar "img/"
            if (strpos($nuevaImagen, 'img/') === false) {
                $nuevaImagen = "img/" . $nuevaImagen;
            }
        
            $rutaImagenDestino = $nuevaImagen;
            move_uploaded_file($rutaImagenTemporal, $rutaImagenDestino);
        } else {
            // Si la ruta actual comienza con "img/", mantenerla
            if (strpos($imagen_actual, 'img/') === 0) {
                $nuevaImagen = $imagen_actual;
            } else {
                $nuevaImagen = "img/" . $imagen_actual;
            }
        }
        

        // Realizar la actualización en la base de datos
        $updateQuery = "UPDATE blogs SET titulo = '$nuevoTitulo',  descripcion = '$nuevaDescripcion',contenido = '$nuevaContenido', 
         imagen = '$nuevaImagen',autor = '$nuevaAutor',  estado = '$nuevaEstado' WHERE id = $id";
        $resultado = mysqli_query($conectar, $updateQuery);

        if ($resultado) {
            header("Location: lista_blogs.php"); // Redirige a la página de lista_blogs.php
            exit(); // Termina la ejecución del script después de la redirección
        } else {
            echo "<p>Error al guardar los cambios.</p>";
        }
    }

    $selectQuery = "SELECT * FROM blogs WHERE id = $id";
    $result = mysqli_query($conectar, $selectQuery);

    if ($row = mysqli_fetch_assoc($result)) {
        $titulo = $row['titulo'];
        $descripcion = $row['descripcion'];
        $contenido = $row['contenido'];
        $imagen_actual = $row['imagen'];
        $autor = $row['autor'];
        $estado = $row['estado'];

        // Mostrar el formulario de edición
        echo "<form class='editar-blog-form' method='POST' enctype='multipart/form-data'>";
        echo "<label>Título:</label><input type='text' name='nuevo_titulo' value='$titulo'><br>";
        echo "<label>Estado:</label>";
        echo "<select name='nueva_estado'>";
        echo "<option value=' $estado'>$estado</option>";

        echo "<option value='Baja California'>Baja California</option>";
        echo "<option value='Baja California Sur'>Baja California Sur</option>";
echo "<option value='Campeche'>Campeche</option>";
echo "<option value='Chiapas'>Chiapas</option>";
echo "<option value='Chihuahua'>Chihuahua</option>";
echo" <option value='CDMX'>Ciudad de México</option>";
echo" <option value='Coahuila'>Coahuila</option>";
echo" <option value='Colima'>Colima</option>";
echo" <option value='Durango'>Durango</option>";
echo" <option value='Estado de México'>Estado de México</option>";
echo" <option value='Guanajuato'>Guanajuato</option>";
echo" <option value='Guerrero'>Guerrero</option>";
echo" <option value='Hidalgo'>Hidalgo</option>";
echo" <option value='Jalisco'>Jalisco</option>";
echo" <option value='Michoacán'>Michoacán</option>";
echo" <option value='Morelos'>Morelos</option>";
echo" <option value='Nayarit'>Nayarit</option>";
echo" <option value='Nuevo León'>Nuevo León</option>";
echo" <option value='Oaxaca'>Oaxaca</option>";
echo" <option value='Puebla'>Puebla</option>";
echo" <option value='Querétaro'>Querétaro</option>";
echo" <option value='Quintana Roo'>Quintana Roo</option>";
echo" <option value='San Luis Potosí'>San Luis Potosí</option>";
echo" <option value='Sinaloa'>Sinaloa</option>";
echo" <option value='Sonora'>Sonora</option>";
echo" <option value='Tabasco'>Tabasco</option>";
echo" <option value='Tamaulipas'>Tamaulipas</option>";
echo" <option value='Tlaxcala'>Tlaxcala</option>";
echo" <option value='Veracruz'>Veracruz</option>";
echo" <option value='Yucatán'>Yucatán</option>";
echo" <option value='Zacatecas'>Zacatecas</option>";
        echo "</select><br>";
        echo "<label>Descripción:</label><textarea name='nueva_descripcion'  rows='8' cols='80' required>$descripcion</textarea><br>";
        echo "<label>Contenido:</label><textarea name='nueva_contenido'  rows='8' cols='80' required>$contenido</textarea><br>";
        echo "<label>Autor:</label><textarea name='nueva_autor'  rows='8' cols='80' required>$autor</textarea><br>";
        echo "<label>Imagen actual:</label><br>";
echo "<img src='$imagen_actual' alt='Imagen Actual' width='100%'><br><br>";


        echo "<label>Nueva (Solo PNG Y JPG) Imagen:</label><input type='file' name='nueva_imagen'><br><br>";
        echo "<input type='submit' value='Guardar cambios'>";
        echo "<button type='button' name='eliminar_blog' onclick='confirmarEliminar()'>Eliminar Blog</button>";
        echo "</form>";
    } else {
        echo "<p>La noticia no se encontró.</p>";
    }
} else {
    echo "<p>No se ha proporcionado un ID válido.</p>";
}

?>

<script>
function confirmarEliminar() {
  if (confirm('¿Estás seguro de que deseas eliminar este blog? Esta acción no se puede deshacer.')) {
    window.location.href = 'eliminar_blog.php?id=<?php echo $id; ?>';
  }
}
</script>

</body>
</html>