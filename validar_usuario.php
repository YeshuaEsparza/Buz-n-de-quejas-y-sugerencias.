<?php 
session_start();

$matricula = $_REQUEST['matricula'];
$pas = $_REQUEST['password'];

$link = mysqli_connect("localhost", "root", "");
if (!$link) {
    die("Error de conexión: " . mysqli_connect_error());
}

$bdSeleccionada = mysqli_select_db($link, "bdsugerencias");
if (!$bdSeleccionada) {
    die("Error al seleccionar la base de datos: " . mysqli_error($link));
}

$result = mysqli_query($link, "SELECT* FROM usuario WHERE matricula='$matricula'");
if (!$result) {
    die("Error en la consulta: " . mysqli_error($link));
}

if ($row = mysqli_fetch_array($result)) {
   if ($row["password"] == $pas) {
      $_SESSION["k_username"] = $row['nombre'];
      $_SESSION["k_tipo"] = $row['tipo'];
      $_SESSION["k_user"] = $row["user_name"];
      
      if ($row['tipo'] == 0)
         header("Location:indexAdm.php");
      else
         header("Location:indexUR.php");
   } else {
      header("Location:errorUsuario.php");
      //print("Password incorrecto");
      //echo '<a href="index.php"> Regresar</a></p>';
   }
} else {
   header("Location:errorUsuario.php");
}
?>