<?php
    include 'veterinariabd.php';

    $id_usu = $_POST['id'];
    $correo_usu = $_POST['correo'];
    $nombre_usu= $_POST['nombre'];
    $fecha_usu= $_POST['fecha'];
    $contra_usu= $_POST['contrasena'];
   

    // Crear query
    $query = "INSERT INTO usuarios(id, correo, nombre, fecha, contrasena, nombre)
              VALUES ('$usuario', '$id_usu, '$correo_usu', '$nombre_usu', '$fecha_usu', '$contra_usu', NULL, '$nombre')";

    $verificar_correo = mysqli_query($conexion, "SELECT email FROM usuarios WHERE email = '$email' ");
    if(mysqli_num_rows($verificar_correo) > 0 ) {
        echo '
            <script>
                alert("Este correo electrónico ya está registrado.");
                window.location = "../servicios/registro.html";
            </script>
        ';
        exit;
        mysqli_close($conexion);
    }
    $verificar_usuario = mysqli_query($conexion, "SELECT nom_usu FROM usuarios WHERE nom_usu = '$usuario' ");
    if(mysqli_num_rows($verificar_usuario) > 0 ) {
        echo '
            <script>
                alert("Este nombre de usuario no está disponible, intenta con otro.");
                window.location = "../servicios/registro.html";
            </script>
        ';
        exit;
        mysqli_close($conexion);
    }

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar) {
        echo '
            <script>
                alert("Te haz registrado exitosamente!");
                window.location = "../servicio/inicio_sesion.html";
            </script>
        ';
    } else {
        echo '
            <script>
                alert("Intentalo nuevamente, no se realizó el registro...");
                window.location = "../servicios/registro.html";
            </script>
        ';
    }

    mysqli_close($conexion);
?>