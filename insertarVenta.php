<?php
    include 'conexion_bd.php';
    if(isset($_POST['aceptar'])){
        if(isset($_POST['n_pro_venta']) &&
           isset($_POST['precio_v']) &&
           isset($_POST['unidades_v'])) {
            // COMPROBAMOS SI LOS CAMPOS ESTAN VACIOS
            if(strlen($_POST['n_pro_venta']) >= 1 &&
               strlen($_POST['precio_v']) >= 1 &&
               strlen($_POST['unidades_v']) >= 1) {
                // RECUPERAMOS Y LIMPIAMOS LOS DATOS DEL FORMULARIO
                $producto_vent = trim($_POST['n_pro_venta']);
                $precio_vent = trim($_POST['precio_v']);
                $unidades_vent = trim($_POST['unidades_v']);
                // INSERTAMOS LOS DATOS EN LA BBDD
                $consulta = "INSERT INTO ventas (n_pro_venta, precio_v, unidades_v) VALUES ('$producto_vent', '$precio_vent', '$unidades_vent')";
                $resultado = mysqli_query($conexion, $consulta);
               }
            }
        } 
?>
