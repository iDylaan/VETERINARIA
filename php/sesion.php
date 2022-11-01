<?php
    session_start();

    include 'veterinariabd.php';

    $usuario = $_POST['correo_usu'];
    $contra = $_POST['contra_usu'];

    $sql="SELECT * FROM usuarios WHERE (nom_usu='$usuario' OR correo='$usuario') AND contra'$contra' ";

    $validar_login = mysqli_query($conexion, $sql);
    if(mysqli_num_rows($validar_login) > 0 ) {
        $_SESSION['usuario'] = $usuario;
        header("location: ../servicios/inicio_sesion.html");
        exit;
    } else {
        echo '
            <script>
                alert("Usuario inexistente, verifica los datos introducidos.");
                window.location = "../servicio/inicio_sesion.html";
            </script>
        ';
        exit;
    }
    
?>