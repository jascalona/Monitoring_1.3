<?php

include "./CONTROLLER/conexion.php";



session_start();
session_destroy();

$ruta0 = base64_encode('Location: ../index_close_destroy');
session_start();
session_destroy();
header("location: ../index.php?" . $ruta0);

?>