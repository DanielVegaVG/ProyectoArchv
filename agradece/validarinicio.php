<?php
require 'configdb.php';
session_start();
$usuario=$_POST["usuario"];
$psw=$_POST["psw"];
$conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
$conexion->set_charset("utf8"); 
$sql="select puesto from Alumnos
WHERE usuario='".$usuario."' AND psw='".$psw."';";
$resultado=$conexion->query($sql);
if($resultado->num_rows > 0){
    $fila=$resultado->fetch_array();
	$_SESSION["puesto"]=$fila["puesto"];


header("Location: agradecer.php");
exit();
}
else{
header("Location: inicio.html");
exit();
}
$conexion->close();
?>