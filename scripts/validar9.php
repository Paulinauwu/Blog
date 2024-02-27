<?php 

$cadenaV = $_POST['CadenaV'];

    if (strlen($cadenaV) !== 9) {
    echo '<script>
        alert("Revisa tus datos nuevamente")
        location.href = "../cursosbenefic.php";
        </script>';
    }
    // Verificar que todos los caracteres sean números
    if (!ctype_digit($cadenaV)) {
        echo '<script>
        alert("La cadena ingresada tiene caracteres invalidos")
        location.href = "../cursosbenefic.php";
        </script>';
    }
    // Si llegamos aquí, la V$cadenaV es válida
    echo '<script>
        alert("La cadena es valida")
        location.href = "../tarjetas/index.php";
        </script>';
?>

