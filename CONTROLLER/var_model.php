<?php


$ruta1 = null;

if (isset($_GET['ruta'])) {
    
    $ruta1 = $_GET['ruta'];

}

//echo $ruta1;



$table = 'm_Uload';
$mode = 'DESC';


if ($ruta1 != null) {
    
    $init = ($ruta1 - 1) * 150;
    $max = 150;

} else{

    $ruta1 = 1;
    $init = 0;
    $max = 150;
}




