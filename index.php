<html>
    <head>
        <title>Práctica 1 - Despliegue de aplicaciones web</title>
        <link rel="stylesheet" href="css/estilos.css">
    </head>

    <body>
        <div class="contenedor">
            <div class="tarjeta">
                <?php
                echo "<h1>Servidor DAW</h1>";
                echo "<p> Mario Alonso Moreno Gonz&aacute;lez - Pr&aacute;ctica 1 DAW</p>";
                echo "<p>Fecha: " . date("d/m/Y H:i:s") . "</p>";
                echo "<p>PHP: " . PHP_VERSION . "</p>";
                echo "<p>Servidor: " . $_SERVER['SERVER_NAME'] . "</p>";
                echo "<p>IP cliente: " . $_SERVER['REMOTE_ADDR'] . "</p>";
                echo "<p>Protocolo: " .
                    ((!empty($_SERVER['HTTPS'])) ? "HTTPS" : "HTTP")
                    . "</p>";
                ?>
            </div>
        </div>
    </body>
</html>
