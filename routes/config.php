<?php

define("KEY", "AES-256-ECB");
define("AES", "AES-256-ECB");

$ruta0 = base64_encode('Location: ../panel');
$ruta1 = base64_encode ('Location: ../control_asistencia');
$ruta2 = base64_encode ('Location: ../control_cuentas');
$ruta3 = base64_encode ('Location: ../registros');
$ruta4 = base64_encode ('Location: ../close');
$ruta5 = base64_encode ('Location: ../CONTROLLER/close');



if (isset($_GET['URL0']) == 'index') {
    header('Location: ../index.php?' . openssl_encrypt($ruta0, AES,passphrase: KEY));
}

if (isset($_GET['URL1']) == 'panel') {
    header('Location: ../panel.php?' . openssl_encrypt($ruta1, AES,passphrase: KEY));
}

if (isset($_GET['URL2']) == 'control_asistencia') {
    header('Location: ../control_asistencia.php?' . openssl_encrypt($ruta2, AES,passphrase: KEY));
}

if (isset($_GET['URL3']) == 'control_cuentas') {
    header('Location: ../control_cuentas.php?' .  openssl_encrypt($ruta3, AES,passphrase: KEY));
}

if (isset($_GET['URL4']) == 'registro') {
    header('Location: ../registro.php?' .  openssl_encrypt($ruta4, AES,passphrase: KEY));
}

if (isset($_GET['URL5']) == 'close') {
    header('Location: ../CONTROLLER/close.php?' .  openssl_encrypt($ruta5, AES,passphrase: KEY));
}

//sub_Directory 

