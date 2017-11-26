<?php

include 'model/jsonPOST.php';
include 'model/jsonGET.php';
include 'model/util.php';

$str = explode(",", ObtenerCoordenadasGPS("Carlos Villaran 140 La Victoria Lima"));
$listTiendas = ObtenerTiendas($str[0], $str[1]);
$i=1;

foreach ($listTiendas as $objTienda) {
    $i++;
    echo $objTienda->zona."<br/>";
    echo $objTienda->direccion. " " . $objTienda->distrito . "<br/>"; 
    echo $objTienda->horario."<br/><br/><br/>"; 
    if ($i>2) {
        return "listo";
    }
}
?>