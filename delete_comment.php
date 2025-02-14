<?php
include "conexionbd.php";
    
    $comentario = $_REQUEST['comentario'];
    echo $comentario;
    
    $link = Conectarse();
    
    // Eliminar comentario de la base de datos
    $user_result = mysqli_query($link, "DELETE  FROM comentarios WHERE comentario = '$comentario'");
    /* if(!$user_result){
        echo "Error de la base de datos" . mysql_error();
    } */
    header("Location:cajacomentarios.php");
?>
