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
echo "<div id='clases' >
<div > <h4><a class='tit'> ID:</a> " . $row['id_clase'] . "</h4></div>
<div ><a class='tit'>Nombre:</a> " . $row['nombre'] . "</div> 
<div ><a class='tit'>Descripción:</a> " . $row['descripción'] . "</div>  
<div ><a class='tit'>Cupo maximo: </a>" . $row['cupo_maximo'] . "</div>
<div ><a class='tit'>Id entrenador:</a> " . $row['id_entrenador'] . "</div>
<div ><a class='tit'>Fecha:</a> " . $row['fecha'] . "</div> 
<div ><a class='tit'>Hora inicio:</a> " . $row['hora_inicio'] . "</div>  
<div ><a class='tit'>Hora fin:</a> " . $row['hora_fin'] . "</div>
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
echo "<div id='clases' >
<div > <h4><a class='tit'> ID:</a> " . $row['id_entrenamiento'] . "</h4></div>
<div ><a class='tit'>Nombre:</a> " . $row['nombre'] . "</div> 
<div ><a class='tit'>Objetivo:</a> " . $row['objetivo'] . "</div>  
<div ><a class='tit'>Descripción: </a>" . $row['descripción'] . "</div>
<div ><a class='tit'>Nivel:</a> " . $row['nivel'] . "</div>
</div>"; 
}
}

}



       /*CLIENTES
public function getInfoClientes(){
    $sql = "SELECT * from clientes";
$result = $this->getconn()->query($sql);
return $result;
}

public function getInfoCliente($name){
    $sql = "SELECT * from clientes where nombre=". $name." ";
$result = $this->getconn()->query($sql);
return $result;
}

public function drawClientes($name){
    if ($name != null){
    $result = $this->getInfoCliente($name);
}else{
    $result = $this->getInfoClientes();  
}
foreach ($result as $row){
echo "<div class='' >
<div > <h4>" . $row['id_cliente'] . "</h4></div>
<div >" . $row['nombre'] . "</div> 
<div >" . $row['apellidos'] . "</div>  
<div >" . $row['dni'] . "</div>
<div > " . $row['email'] . " </div>
<div > " . $row['telefono'] . "  </div>
<div >" . $row['direccion'] . "</div>  
<div >" . $row['fecha_nacimiento'] . "</div>
<div > " . $row['fecha_registro'] . " </div>
<div > " . $row['estado'] . "  </div>
</div>"; 
}
}
VENTAS
public function getInfoVentas(){
    $sql = "SELECT * from ventas";
$result = $this->getconn()->query($sql);
return $result;
}

public function getInfoVenta($id){
    $sql = "SELECT * from ventas where id_venta=". $id." ";
$result = $this->getconn()->query($sql);
return $result;
}
public function drawVentas($id){
    if ($id != null){
    $result = $this->getInfoVenta($id);
}else{
    $result = $this->getInfoVentas();  
}
foreach ($result as $row){
echo "<div class='' >
<div > <h4>" . $row['id_venta'] . "</h4></div>
<div >" . $row['id_cliente'] . "</div> 
<div >" . $row['fecha_venta'] . "</div>  
<div >" . $row['total'] . "</div>
</div>"; 
}
}*/