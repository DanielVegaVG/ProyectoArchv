<?php
session_start();
require 'configdb.php';

$idEmisor = '00';
$idReceptor = $_POST['receptor'];
$mensaje = $_POST['mensaje'];
$conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
$conexion->set_charset("utf8");
$sql = "INSERT INTO Agradecimientos (idEmisor, idReceptor, mensaje) VALUES ('$idEmisor', '$idReceptor', '$mensaje')";
if ($conexion->query($sql) === TRUE) {
    echo "Mensaje guardado correctamente";
} else {
    echo "Error: " . $conexion->error;
}
$conexion->close();
?>