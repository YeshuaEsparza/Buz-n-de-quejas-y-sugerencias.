<?php 

    $conexion = mysqli_connect("localhost", "root", "", "bdsugerencias");

    $nombre =$_REQUEST['nombre'];
    //echo "$nombre <br/>";
    $apellidos =$_REQUEST['apellidos'];
    //echo "$apellidos <br/>";
    $correo =$_REQUEST['correo'];
    //echo "$correo <br/>";
    $matricula =$_REQUEST['matricula'];
    //echo "$matricula <br/>";
    $usuario =$_REQUEST['usuario'];
    //echo "$usuario <br/>";
    $fecha_nac=$_REQUEST['fecha_nac'];
    //echo "$fecha_nac <br/>";
    $password =$_REQUEST['password'];
    //echo "$password <br/>";  

    $queryVerificaMatricula = "SELECT matricula FROM usuarios WHERE matricula='$matricula'";
    if(!$queryVerificaMatricula){
        $query = "CALL insertar_usuario ('$nombre', '$apellidos', '$matricula', '$usuario', '$fecha_nac', '$correo', '$password')";

        $ejecutar = mysqli_query($conexion, $query);
    
        header("Location:index.php");
    }else{
        header("Location:errorMatriculaDuplicada.php");
    }
    

?>  