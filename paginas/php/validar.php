<?php
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    session_start();

    include('db.php');

    $consulta = "SELECT * FROM usuario WHERE correo='$correo' AND contrasena ='$contrasena'";
    $resultado = mysqli_query($conexion,$consulta);

    $filas = mysqli_num_rows($resultado);

    if($filas){
        header("Location:index.php");
    }else{
        ?>
        <?php
        include("inicio_sesion.php")
        ?>
        <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
        <?php
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);