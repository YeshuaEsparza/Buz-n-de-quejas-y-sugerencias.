<?php 
session_start();

$usu=$_REQUEST['usuario']; 

$link=mysqli_connect("localhost","root",""); 
mysqli_select_db($link,"videoteca");

$result = mysqli_query($link, "SELECT usuario FROM clientes WHERE usuario='$usu'");
if($row = mysqli_fetch_array($result)){
	if($row["usuario"] == $usu){
		header("Location:errorUsuarioExistente.php");
	}
}else{
    header("Location:registro2.php?usuario=" . urlencode($usu));
}
?>