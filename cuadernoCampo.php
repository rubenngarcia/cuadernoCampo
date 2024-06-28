<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FARM DIARY</title>
    <link rel="stylesheet" href="inicio.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"
    integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
    crossorigin="" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div id="logo">
            <a href="login.php"> <img src="imagenes/lechuga-removebg-preview.png" alt=""></a>
        </div>

        <nav>
            <ul class="menu">
                <li><a href="#inventario">INVENTARIO</a></li>

                <li><a href="#myMap">GEOLOCALIZACIÓN</a></li>
            </ul>
        </nav>
    </header>

        <?php
            include 'conexion_bd.php';
        ?>

    <main>

        <div id="inventario" class="container">

            <div class="cosecha">
                <div class="cajones1">
                    <form method="post" action="">
                        <h1>COMPRAS</h1>
                        <?php
                            include 'insertarCompra.php';
                        ?>
                        <input type="text" name="n_pro_compra" placeholder="producto">
                        <input type="number" name="precio_c" step="any" placeholder="precio">
                        <input type="number" name="unidades_c" placeholder="unidades">               
                        <div>
                            <input type="submit" id="aceptar" name="aceptar" value="ACEPTAR">
                        </div>
                        <div>
                            <button class="pdf"><a href="fpdf/pdfCompras.php" target="_blank" type="submit">GENERAR PDF</a></button>
                        </div>
                    </form>
                </div>

                <div class="cajones1">
                    <form method="post" action="">
                        <h1>VENTAS</h1>
                        <?php
                            include 'insertarVenta.php';
                        ?>
                        <input type="text" name="n_pro_venta" placeholder="producto">
                        <input type="number" name="precio_v" step="any" placeholder="precio">
                        <input type="number" name="unidades_v" placeholder="unidades">
                        <div>
                            <input type="submit" id="aceptar" name="aceptar" value="ACEPTAR">
                        </div>
                        <div class="pdf">
                            <button class="pdf"><a href="fpdf/pdfVentas.php" target="_blank" type="submit">GENERAR PDF</a></button>
                        </div>
                    
                    </form>
                </div>
            </div>

            <div class="tratamientos">
                <div class="cajones2">
                    <form method="post" action="">
                        <h1>FITOSANITARIOS</h1>
                        <?php
                            include 'insertarFito.php';
                        ?>
                        <input type="text" name="ref_fitosanitario" placeholder="Fitosanitario empleado">
                        <input type="text" name="técnico" placeholder="técnico">
                        <input type="number" name="longitud" step="any" placeholder="longitud">
                        <input type="number" name="latitud" step="any" placeholder="latitud">
                        <div>
                            <input type="submit" id="aceptar" name="aceptar" value="ACEPTAR">
                        </div>
                        <div >
                            <button class="pdf"><a href="fpdf/pdfFitosanitario.php" target="_blank" type="submit">GENERAR PDF</a></button>
                        </div>
                    
                    </form>
                </div>

                <div class="cajones2">
                    <form method="post" action="">
                        <h1>FERTILIZANTES</h1>
                        <?php
                            include 'insertarFert.php';
                        ?>
                        <input type="text" name="ref_fertilizante" placeholder="Fertilizante empleado">
                        <input type="text" name="técnico" placeholder="técnico">
                        <input type="number" name="longitud" step="any" placeholder="longitud">
                        <input type="number" name="latitud" step="any" placeholder="latitud">
                        <div>
                            <input type="submit" id="aceptar" name="aceptar" value="ACEPTAR">
                        </div>
                        <div>
                            <button class="pdf"><a href="fpdf/pdfFertilizantes.php" target="_blank" type="submit">GENERAR PDF</a></button>
                        </div> 
                    </form>        
                </div>
            </div>      
        </div>

        <div id="myMap" class="mapa">
            <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
            integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="crossorigin=""></script>
            <script src="map.js"></script>
        </div>

    </main>

    <footer>
        <div>
            <img src="imagenes/logo-gmail-2048.png" alt="" width="20px">
        </div>
        <div>
            <img src="imagenes/logogoogle.png" alt="" width="20px">
        </div>
        <div>
            <img src="imagenes/logoinsta.png" alt="" width="20px">
        </div>
        <div>
            <img src="imagenes/logowasap.png" alt="" width="20px">
        </div>
    </footer>

</body>
</html>