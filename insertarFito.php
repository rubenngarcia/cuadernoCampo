<?php
    include 'conexion_bd.php';
    if(isset($_POST['aceptar'])){
        if(isset($_POST['ref_fitosanitario']) &&
           isset($_POST['longitud']) &&
           isset($_POST['latitud']) &&
           isset($_POST['técnico'])) {
             // COMPROBAMOS SI LOS CAMPOS ESTAN VACIOS
            if(strlen($_POST['ref_fitosanitario']) >= 1 &&
               strlen($_POST['longitud']) >= 1 &&
               strlen($_POST['latitud']) >= 1 &&
               isset($_POST['técnico'])) {
                // RECUPERAMOS Y LIMPIAMOS LOS DATOS DEL FORMULARIO
                $fito = trim($_POST['ref_fitosanitario']);
                $long = trim($_POST['longitud']);
                $lat = trim($_POST['latitud']);
                $tecnico = trim($_POST['técnico']);
                // INSERTAMOS LOS DATOS EN LA BBDD
                $consulta = "INSERT INTO fitosanitarios (ref_fitosanitario, longitud, latitud,técnico) VALUES ('$fito', '$long', '$lat','$tecnico')";
                $resultado = mysqli_query($conexion, $consulta);
    
               }
            }
        }

   
?>