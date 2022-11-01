<?php
    include 'veterinariabd.php';

    $id_prod = $_POST['txtid'];    

    // Crear query
    $query = "DELETE FROM productos WHERE id_prod='$id_prod'";

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar) {
        echo '
            <script>
                alert("Se elimino el producto");
                window.location = "../veterinario/lista_producto.html";
            </script>
        ';
    } else {
        echo '
            <script>
                alert("No se pudo eliminar el producto");
                window.location = "../veterinario/lista_producto.html";
            </script>
        ';
        echo mysqli_error($conexion);
    }

    mysqli_close($conexion);
?>