<?php
    include 'conexion_bd.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // DEFINIMOS LAS VARIABLES $USUARIO Y $ PASSWORD UTILIZANDO LOS DATOS DEL FORMULARIO
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $query = "SELECT * FROM usuarios WHERE nombre_usuario='$usuario' AND contraseña ='$password'";
    $result = $conexion->query($query);
    
    // VALIDAMOS QUE LOS CAMPOS NO ESTEN VACIOS
   }   if (!empty($usuario) && !empty($password)) {
        if ($result->num_rows == 1) {

            $_SESSION['nombre_usuario'] = $usuario;
        
            header('Location: cuadernoCampo.php'); 
        
    } else {
        //AL MENOS UNO DE LOS CAMPOS ESTA VACIO
        echo "Por favor, completa todos los campos.";
    }
}
 




?>
