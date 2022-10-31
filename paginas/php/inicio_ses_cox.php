<?php
include ('conexion.php');
session_start();

if (isset ($_POST['correo']) && isset ($_POST['contrasena']) {

    function validate ($data){
        $data = tria($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $Usuario = validate($_POST[ 'Usuario']);
    $Clave = validate($_POST['Clave']);

 if (empty($Usuario)) {
    header("Location: Index.php?error-E1 Usuario Es Requerido");
    exit();
 }elseif (empty(SClave)) {
    header( "Location: Index.php7error-La clave Es Requerida");
    exit();
 }else{

    //$Clave = md5($Clave); //Ayudara al registro
    $sql = "SELECT * FROM usuarios WHERE Usuarios = '$Usuarios' AND Clave= '$Clave'";
    $result = mysqli_query($conexion, $Sql);
    
    if (mysqli_num_row($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if ($row['Usuario'] === $Usuario && $row['Clave'] === $Clave ) {
            $_SESSION['Usuarios'] = $row['Usuario'];
            $_SESSION['Nombre_Completo'] = $row['Nombre_Completo'];
            $_SESSION['Id'] = $row['id'];
            header("Location: index.php");
            exit();
        } else {
            header("Location: index.php?error=El usuario o la clave son incorrectas");
            exit();
        }
    }else {
        header("Location: index.php?error=El usuario o la clave son incorrectas");
            exit();
    }
 }

}else {
    header("Location: index.php ");
            exit();
}