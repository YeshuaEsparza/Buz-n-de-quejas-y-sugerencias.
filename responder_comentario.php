<?php
session_start();
include "conexionbd.php";
$link = Conectarse();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $comentario = $_POST['comentario'];
    $respuesta = $_POST['respuesta'];
    $fecha_respuesta = date('Y-m-d H:i:s');

    $query = "UPDATE comentarios SET respuesta='$respuesta', fecha_respuesta='$fecha_respuesta' WHERE comentario='$comentario'";

    if (mysqli_query($link, $query)) {
        header("Location: cajacomentariosAdm.php");
    } else {
        echo "Error al actualizar la respuesta: " . mysqli_error($link);
    }
}

mysqli_close($link);
?>
