<?php
include 'php/conexion.php'; // Incluir el archivo de conexión a la base de datos

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $deleteQuery = "DELETE FROM blogs WHERE id = $id";
    $resultado = mysqli_query($conectar, $deleteQuery);

    if ($resultado) {
        header("Location: lista_blogs.php"); // Redirige a la página de lista_blogs.php
        exit();
    } else {
        echo "<p>Error al eliminar el blog.</p>";
    }
} else {
    echo "<p>No se ha proporcionado un ID válido.</p>";
}
?>
