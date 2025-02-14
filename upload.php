<?php session_start(); 


$target_dir = "media_comentarios/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Intenta mover el archivo subido al directorio de destino
move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);


// Conecta a la base de datos
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "bdsugerencias");

// Verifica la conexión
if (!$link) {
    echo "ERROR: No se pudo conectar a la BD. ";
}

// Prepara la consulta SQL
$nombreUsuario = $_SESSION["k_user"];
$comentario = $_POST['comentario'];
$media = basename($_FILES["fileToUpload"]["name"]);

if(!$media) {
    $insercion = mysqli_query($link, "CALL insertar_com('$nombreUsuario', '$comentario')");
} else {
    $insercion = mysqli_query($link, "CALL insertar_com_media('$nombreUsuario', '$comentario', '$media')");
}

if($insercion){
    header("Location: cajacomentarios.php");
}else{
    echo "Error al subir el comentario." . mysqli_error($link);
}
// Cierra la conexión
mysqli_close($link);
