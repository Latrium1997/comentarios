<?php
$connection=mysqli_connect('localhost','root','root','COMENTARIOS') or die("mysql muereeeee!");
$resultado=$connection->query("SELECT texto FROM comentario");
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="estilos.css"/>
    <meta charset="utf-8">
    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <title>Comentarios</title>
</head>
<body>
    <h1>Comentarios</h1>
    <textarea placeholder="Escriba aquí su comentario" id="comentarios"></textarea>
    <button id="enviar">Enviar</button>
    <div id="comentarioescrito"><?php
        $arrayResultado=mysqli_fetch_array($resultado);
        $fecha= date("H:i:s");
        echo "<div class='comentario-enviado'>".$arrayResultado[0]."<span class='fecha'>"."($fecha)"."</span>"."<img class='eliminar' src='closebutton'>"."</img>"."</div>";

        ?></div>
</body>
</html>