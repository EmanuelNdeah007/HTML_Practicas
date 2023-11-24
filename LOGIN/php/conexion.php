<?php

$conexion = mysqli_connect ("localhost","root","","login"); 

if($conexion){
    echo 'conexion exitosa';
} else{
    echo 'no se pudo conectar';
}

?>