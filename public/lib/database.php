<?php 

$dbUser = 'root';
$dbPassword = 'Kagebunshin';
$dbHost = 'localhost';
$dbDatabase = 'employees';

try {
    $mdbConnexion = new PDO("mysql:host=${dbHost};dbname=${dbDatabase}", $dbUser, $dbPassword);
    $mdbConnexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo 'Error en la conexion a la base de datos'. $e->getMessage();
}

?>