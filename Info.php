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
            <a href="productos.php"class="hover"><h6>Productos</h6></a>
            <a href="Contacto.html"class="hover"><h6>Contacto</h6></a>
    </nav>
    
    </header>
        <footer>
        <section id="nom">
        <p>CLASES</p>
        <p>ENTRENAMIENTOS</p>
        <p>MEMBRESIA</p>
        </section>
        <section id="imag">
        <a href="clases.php" ><img src=clases.jpg style="width: 27em; height: 25em;"></a>
        <a href="entrenamiento.php" ><img src=entrenamiento.jpg style="width: 27em; height: 25em;"></a>
        <a href="membresias.php" ><img src=membresias.jpg style="width: 27em; height: 25em; "> </a>
</section></footer>
        <?php
          if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($_POST["sel"] == "x"){ 
                }
            elseif ($_POST["sel"] == '1'){
                    if(isset($_POST["filtro"])){
                     $gestion->drawMembresias($_POST["filtro"]);
                    }else{
                    $gestion->drawMembresias(null);}
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
