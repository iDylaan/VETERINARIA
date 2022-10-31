<?php
include ('conexion.php');
session_start();

if ( isset($_POST['correo']) && isset($_POST['contrasena']) ) { 

    function validate ($data){
        $data = tria($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $correo = validate($_POST['correo']);
    $contrasena = validate($_POST['contrasena']);

    if (empty($correo)) {
        header("Location: ./inicio_sesion.php?error-E1 Usuario Es Requerido");
        exit();
    } elseif (empty(contrasena)) {
        header( "Location: ./inicio_sesion.php?error-La clave Es Requerida");
        exit();
    } else {

        //$Clave = md5($Clave); //Ayudara al registro
        $query = "SELECT * FROM usuarios WHERE correo = '$correo' AND contrasena= '$contrasena'";
        $result = mysqli_query($conexion, $query);

        if (mysqli_num_row($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            if ($row['correo'] === $correo && $row['contrasena'] === $contrasena ) {
                $_SESSION['correo'] = $row['correo'];
                $_SESSION['nombre'] = $row['nombre'];
                $_SESSION['apellido_pa'] = $row['apellido_pa'];
                $_SESSION['apellido_ma'] = $row['apellido_ma'];
                $_SESSION['id_rol'] = $row['id_rol'];
                $_SESSION['id'] = $row['id'];
                header("Location: ../index.php");
                exit();
            } else {
                header("Location: ./inicio_sesion.php?error=El usuario o la clave son incorrectas");
                exit();
            }
        } else {
            header("Location: ./inicio_sesion.php?error=El usuario o la clave son incorrectas");
            exit();
        }
    }
} else {
    header("Location: index.php ");
    exit();
}