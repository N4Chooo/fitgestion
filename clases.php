<?php
require_once "autoload.php";
$gestion= new gestion;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/vnd.icon" href=" logo.ico">
    <link rel="stylesheet" href="estilos.css">
    <title>FitGestion</title>
</head>
<body>
    <header>
        <img src=logo.jpg>
        <h1>CLASES</h1>
        <nav >
            <a href="index.html"class="hover"><h6>Inicio</h6></a>
            <a href="Info.html"class="hover"><h6>Información</h6></a>
            <a href="productos.php"class="hover"><h6>Productos</h6></a>
            <a href="Contacto.html"class="hover"><h6>Contacto</h6></a>
    </nav>
    </header>
    <a href="Info.html" id="flecha"><img src="volver.png" style="width: 2em; height: 2em;"></a>
<form action="" method="POST" class="esp">
            <input type="text" placeholder="*FILTRO OPCIONAL*  1-15" name="filtro">
            <input type="submit" value="Selecciona Uno">
        </form>
        
        <?php
        if(isset($_POST["filtro"])){
            if($_POST["filtro"] <= 15){
                $gestion->drawClases($_POST["filtro"]);
            }else{
                echo "<div id='inf' style='text-align: center; color: #121E2C;'>Elige un numero inferior o igual a 15</div>";
                $gestion->drawClases(null);
            }
           }else{
           $gestion->drawClases(null);}

        ?>
</body>
</html>
