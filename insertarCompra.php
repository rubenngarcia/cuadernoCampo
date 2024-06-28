<?php
    include 'conexion_bd.php';
    if(isset($_POST['aceptar'])){
        if(isset($_POST['n_pro_compra']) &&
           isset($_POST['precio_c']) &&
           isset($_POST['unidades_c'])) {
           // COMPROBAMOS SI LOS CAMPOS ESTAN VACIOS
            if(strlen($_POST['n_pro_compra']) >= 1 &&
               strlen($_POST['precio_c']) >= 1 &&
               strlen($_POST['unidades_c']) >= 1) {
                // RECUPERAMOS Y LIMPIAMOS LOS DATOS DEL FORMULARIO
                $producto_comp = trim($_POST['n_pro_compra']);
                $precio_comp = trim($_POST['precio_c']);
                $unidades_comp = trim($_POST['unidades_c']);
                // INSERTAMOS LOS DATOS EN LA BBDD
                $consulta = "INSERT INTO compras (n_pro_compra, precio_c, unidades_c) VALUES ('$producto_comp', '$precio_comp', '$unidades_comp')";
                $resultado = mysqli_query($conexion, $consulta);
               }
            }
        }
?>

