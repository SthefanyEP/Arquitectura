<?php
    require ' config/database.php';
    $db = new Database();
    $con = $db->conectar();

    $sql = $con->prepare("SELECT id,nombre,precio FROM productos WHERE activo=1");
    $sql->execute();
    $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edificios</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Racing+Sans+One&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/styles2.css">

    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap" as="font"
    crossorigin="crossoringin">

</head>
<body>
    <header class="header">

        <div class="contenedor">
            <div class="barra">
                <a class="logo" href="index.html">

                    <h1 class="logo__nombre  centrar-texto">Espacio Arquitectonico <span class="logo__bold">MEXICO</span></h1>
                </a>
                
                <nav class="navegacion">
                    <a href="edificios.html" class="navegacion__enlace">Edificios</a>
                    <a href="espacioUrbano.html" class="navegacion__enlace">Espacios urbanos</a>
                    <a href="Bibliografia.html" class="navegacion__enlace">Biografia</a>
                    <a href="login.html" class="navegacion__enlace">Iniciar Sesion</a>
                </nav>

            </div>

        </div>

        <div class="header__texto">
            <h2 class="no-margin"> Espacio Arquitectonico y urbano del siglo XIX</h2>
            <h4 class="no-margin"> Y PRINCIPIOS DEL SIGLO XX </h4>
        </div>
    </header>


    <main class="contenedor">
        <h1>Edificios</h1>
        <h2>En este apartado se muestran todos las edificaciones analizadas</h2>     
           <div class="grid">


            <div class="producto"> <!--producto-->
                <a href="producto.html">
                    <img class="producto__imagen" src="img2/1.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">Teatro de la Republica</p>
                        <p class="producto__precio">CDMX</p>
                    </div>
                </a>
            </div> <!--producto-->

            <div class="producto"> <!--producto-->
                <a href="producto.html">
                    <img class="producto__imagen" src="img2/2.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">Mercado la Victoria</p>
                        <p class="producto__precio">CDMX</p>
                    </div>
                </a>
            </div> <!--producto-->

            <div class="producto"> <!--producto-->
                <a href="producto.html">
                    <img class="producto__imagen" src="img2/3.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">Almacen Ciudad de Mexico</p>
                        <p class="producto__precio">CDMX</p>
                    </div>
                </a>
            </div> <!--producto-->

            <div class="producto"> <!--producto-->
                <a href="producto.html">
                    <img class="producto__imagen" src="img2/4.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">Fabricas Universales de Mexico</p>
                        <p class="producto__precio">CDMX</p>
                    </div>
                </a>
            </div> <!--producto-->


        <?php foreach($resultado as $row) { ?>
            <div class="producto"> <!--producto-->
                <a href="producto.html">
                    <img class="producto__imagen" src="img2/5.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">Kiosko Morisco</p>
                        <p class="producto__precio">CDMX</p>
                    </div>
                </a>
            </div> <!--producto-->
        <?php } ?>


            <div class="producto"> <!--producto-->
                <a href="producto.html">
                    <img class="producto__imagen" src="img2/6.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">Museo Universitario del Chopo</p>
                        <p class="producto__precio">CDMX</p>
                    </div>
                </a>
            </div> <!--producto-->

            <div class="producto"> <!--producto-->
                <a href="producto.html">
                    <img class="producto__imagen" src="img2/7.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">Iglesia San Felipe de Jesus</p>
                        <p class="producto__precio">CDMX</p>
                    </div>
                </a>
            </div> <!--producto-->

            <div class="producto"> <!--producto-->
                <a href="producto.html">
                    <img class="producto__imagen" src="img2/8.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">Teatro Juarez</p>
                        <p class="producto__precio">CDMX</p>
                    </div>
                </a>
            </div> <!--producto-->

            <div class="producto"> <!--producto-->
                <a href="producto.html">
                    <img class="producto__imagen" src="img2/9.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">Teatro Juarez</p>
                        <p class="producto__precio">CDMX</p>
                    </div>
                </a>
            </div> <!--producto-->

            <div class="producto"> <!--producto-->
                <a href="producto.html">
                    <img class="producto__imagen" src="img2/10.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">Donceles 66</p>
                        <p class="producto__precio">CDMX</p>
                    </div>
                </a>
            </div> <!--producto-->

            <div class="producto"> <!--producto-->
                <a href="producto.html">
                    <img class="producto__imagen" src="img2/11.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">Palacio de mineria</p>
                        <p class="producto__precio">CDMX</p>
                    </div>
                </a>
            </div> <!--producto-->

            <div class="producto"> <!--producto-->
                <a href="producto.html">
                    <img class="producto__imagen" src="img2/12.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">Java Script</p>
                        <p class="producto__precio">CDMX</p>
                    </div>
                </a>
            </div> <!--producto-->

            <div class="producto"> <!--producto-->
                <a href="producto.html">
                    <img class="producto__imagen" src="img2/13.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">La esmeralda</p>
                        <p class="producto__precio">CDMX</p>
                    </div>
                </a>
            </div> <!--producto-->

            <div class="producto"> <!--producto-->
                <a href="producto.html">
                    <img class="producto__imagen" src="img2/14.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">Casa de Antonio Rivas Mercado</p>
                        <p class="producto__precio">CDMX</p>
                    </div>
                </a>
            </div> <!--producto-->

            <div class="grafico grafico--camisas"></div>
            <div class="grafico grafico--node"></div>


        </div>
    </main>

    
</body>
</html>