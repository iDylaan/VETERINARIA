<?php
    include 'veteriariabd.php';
    
    $id_produ=$_POST['txtid'];
    $nom_produ = $_POST['txtnombre'];
    $desc_produ = $_POST['txtdescripcion'];
    $precio_produ = $_POST['txtprecio'];
    $cate_produ = $_POST['txtcategoria'];

    if(isset($_FILES['txtimagen'])){
        $file=$_FILES['txtimagen'];
        $nombre_img=$file['name'];
        $tipo=$file['type'];
        $ruta_provicional=$file['tmp_name'];
        $size=$file['size'];
        
        if( $size > 16 * 1024 * 1024 ) {
            echo '
            <script>
                alert("El tamaño de la imagen es demasiado grande.../nEl tamaño máximo es de 16MB");
                window.location = "../dinamica/agregar-producto.php";
            </script>
            ';
            exit;
        } else {
            $src = $carpeta . $nombre_img;
            move_uploaded_file($ruta_provicional, $src);
            $imagenp="../imagenes/" . $nombre_img;

            if($imagenp == "../imagenes/") {
                if(isset($_POST['stock'])) {
                    $stock = 1;
                }
            
                $query="UPDATE productos SET precio='$precio_produ', nom_produ='$nom_produ', desc_produ='$desc_produ', cate_produ='$cate_produ',
                WHERE id_produ = '$id_produ'";
            
                $ejecutar = mysqli_query($conexion, $query);
                if($ejecutar){
                    echo '
                        <script>
                            alert("¡Su producto se ha editado exitosamente!");
                            window.location = "../servicio/lista_productos.html";
                        </script>
                    ';
                } else {    
                    echo mysqli_error($conexion);
                }
            
                mysqli_close($conexion);
            }

            if(isset($_POST['stock'])) {
                $stock = 1;
            }
        
            $query="UPDATE productos SET precio='$precio_produ', nom_produ='$nom_produ', desc_produ='$desc_produ',cate_produ='$cate_produ',
            WHERE id_prod = '$idp'";
        
            $ejecutar = mysqli_query($conexion, $query);
            if($ejecutar){
                echo '
                    <script>
                        alert("¡Su producto se ha editado exitosamente!");
                        window.location = "../servicio/lista_producto.html";
                    </script>
                ';
            } else {    
                echo mysqli_error($conexion);
            }
        
            mysqli_close($conexion);
        }
    }

?>