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
        <h1>CONSULTA LA INFORMACION</h1>
        <nav >
            <a href="index.html"class="hover"><h6>Inicio</h6></a>
            <a href="Info.php"class="hover"><h6>Información</h6></a>
            <a href="Contacto.html"class="hover"><h6>Contacto</h6></a>
    </nav>
    
    </header>
<form action="" method="POST" id="selec">
            <select name="sel">
                <option value='x'>Selecciona Uno</option>
                <option value='3'>Clases</option>
                <option value='4'>Entrenamientos</option>
            </select>
            <input type="text" placeholder="*FILTRO OPCIONAL*  1-15" name="filtro">
            <input type="submit" value="Selecciona Uno">
        </form>
        <?php
          if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($_POST["sel"] == "x"){ 
                }
            elseif ($_POST["sel"] == '3'){
                if(isset($_POST["filtro"])){
                 $gestion->drawClases($_POST["filtro"]);
                }else{
                $gestion->drawClases(null);}
            }
            elseif ($_POST["sel"] == '4'){
                if(isset($_POST["filtro"])){
                    $gestion->drawEntrenamientos($_POST["filtro"]);
                   }else{
                   $gestion->drawEntrenamientos(null);}
          }}

        ?>
</body>
</html>
