<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FARM DIARY</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">  
    <link rel="stylesheet" href="index.css">
    <!-- http://localhost/cuaderno%20de%20campo/login.php -->
</head>


<body>

    <div class="acces">
        <div class="inicioSesion">
            <form  action="controlador.php" method="POST" >
                <h1 class="title">INICIAR SESIÓN</h1>
                <label for="usuario">
                    <i class="fa-solid fa-user"></i>
                    <input placeholder="usuario" type="text" id="usuario" name="usuario" required>
                </label>
                <label for="password">
                    <i class="fa-solid fa-lock"></i>
                    <input placeholder="contraseña" type="password" id="password" name="password" required>
                </label>
                <a href="#" class="link">¿Has olvidado tu contraseña?</a>
                <br>
                <input class="btn" type="submit" name="boton" value="INICIAR SESIÓN">
            </form>           
        </div>
    </div>

    <?php
        include 'conexion_bd.php';
    ?>
</body>
</html>