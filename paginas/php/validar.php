<?php
    $usuario=$_POST['usuario'];
    $contraseña=$_POST['contraseña'];
    session_start();
    $_SESSION['usuario']=$usuario;

    include('db.php');

    $consulta="SELECT*FROM usuario where usuario='$usuario' and contraseña='$contraseña'";
    $resultado=mysqli_query($conexion,$consulta);

    $filas=mysqli_num_rows($resultado);

    if($filas){
        header("locatyion:index.html")
    }else{
        ?>
        <?php
        include("inicio_sesion.html")
        ?>
        <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);