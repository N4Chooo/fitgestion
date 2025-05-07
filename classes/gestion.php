<?php

class gestion extends Connection{
/*CLASES*/
public function getInfoClases(){
    $sql = "SELECT * from clases ";
$result = $this->getconn()->query($sql);
return $result;
}

public function getInfoClase($name){
    $sql = "SELECT * from clases where id_clase=". $name."";
$result = $this->getconn()->query($sql);
return $result;
}

public function drawClases($name){
    if ($name != null){
        $result = $this->getInfoClase($name);
    }else{
        $result = $this->getInfoClases();  
    }
foreach ($result as $row){
echo "<div id='clases'style='background-color:#121e2cc9' >
<div > <h4><a class='tit'> ID:</a> " . $row['id_clase'] . "</h4></div>
<div ><a class='tit'>Nombre:</a> " . $row['nombre'] . "</div> 
<div ><a class='tit'>Descripción:</a> " . $row['descripción'] . "</div>  
<div ><a class='tit'>Cupo maximo: </a>" . $row['cupo_maximo'] . "</div>
<div ><a class='tit'>Id entrenador:</a> " . $row['id_entrenador'] . "</div>
<div ><a class='tit'>Fecha:</a> " . $row['fecha'] . "</div> 
<div ><a class='tit'>Hora inicio:</a> " . $row['hora_inicio'] . "</div>  
<div ><a class='tit'>Hora fin:</a> " . $row['hora_fin'] . "</div>
<a href='#'><div class='comprar' id='reservar'>RESERVAR</div></a>
</div>"; 
}

}
/*ENTRENAMIENTO*/
public function getInfoEntrenamientos(){
    $sql = "SELECT * from entrenamientos";
$result = $this->getconn()->query($sql);
return $result;
}

public function getInfoEntrenamiento($name){
    $sql = "SELECT * from entrenamientos where id_entrenamiento=". $name."";
$result = $this->getconn()->query($sql);
return $result;
}

public function drawEntrenamientos($name){
    if ($name != null){
    $result = $this->getInfoEntrenamiento($name);
}else{
    $result = $this->getInfoEntrenamientos();  
}
foreach ($result as $row){
echo "<div id='clases'style='background-color:#121e2cc9' >
<div > <h4><a class='tit'> ID:</a> " . $row['id_entrenamiento'] . "</h4></div>
<div ><a class='tit'>Nombre:</a> " . $row['nombre'] . "</div> 
<div ><a class='tit'>Objetivo:</a> " . $row['objetivo'] . "</div>  
<div ><a class='tit'>Descripción: </a>" . $row['descripción'] . "</div>
<div ><a class='tit'>Nivel:</a> " . $row['nivel'] . "</div>
<a href='#'><div class='comprar' id='guardar'>GUARDAR</div></a>
</div>"; 
}
}
/*MEMBRESIA*/
public function getInfoMembresias(){
    $sql = "SELECT * from membresias ";
$result = $this->getconn()->query($sql);
return $result;
}

public function getInfoMembresia($name){
    $sql = "SELECT * from membresias where id_membresia=". $name."";
$result = $this->getconn()->query($sql);
return $result;
}

public function drawMembresias($name){
    if ($name != null){
        $result = $this->getInfoMembresia($name);
    }else{
        $result = $this->getInfoMembresias();  
    }
foreach ($result as $row){
echo "<div id='clases' style='background-color:#121e2cc9'>
<div > <h4><a class='tit'> ID:</a> " . $row['id_membresia'] . "</h4></div>
<div ><a class='tit'>Nombre:</a> " . $row['nombre'] . "</div> 
<div ><a class='tit'>Precio:</a> " . $row['precio'] . "</div>  
<div ><a class='tit'>Duración:</a> " . $row['duración_días'] . "</div>
<div ><a class='tit'>Descripción:</a> " . $row['descripción'] . "</div>
<a href='#'><div class='comprar' id='contratar'>CONTRATAR</div></a>
</div>"; 
}
}
/*PRODUCTOS*/
public function getInfoProductos(){
    $sql = "SELECT * from productos ";
$result = $this->getconn()->query($sql);
return $result;
}

public function getInfoProducto($name){
    $sql = "SELECT * from productos where id_producto=". $name."";
$result = $this->getconn()->query($sql);
return $result;
}

public function drawProductos($name){
    if ($name != null){
        $result = $this->getInfoProducto($name);
    }else{
        $result = $this->getInfoProductos();  
    }
foreach ($result as $row){
echo "<div id='clases' style='background-color:#121e2cc9'>
<div > <h4><a class='tit'> ID:</a> " . $row['id_producto'] . "</h4></div>
<div ><a class='tit'>Nombre:</a> " . $row['nombre'] . "</div> 
<div ><a class='tit'>Precio:</a> " . $row['precio'] . "</div>  
<div ><a class='tit'>Stock:</a> " . $row['stock'] . "</div>
<div ><a class='tit'>Categoría:</a> " . $row['categoría'] . "</div><br><br>
<a href='#'><div class='comprar'>COMPRAR</div></a>
</div>";
}
}

}


