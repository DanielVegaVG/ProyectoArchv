<?php
session_start();
require 'configdb.php';
  function conectar(){
	//Crear la variable de conexion con la base de datos
	$conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
	$conexion->set_charset("utf8"); 
    return $conexion;
  }
function consultar(){
    $conexion=conectar();
    $sql="select * from Alumnos";
    $resultado=$conexion->query($sql);
    while ($fila=$resultado->fetch_array()){
        echo '<option value="' .$fila["puesto"] .'">'.$fila["nombre"].'</option>';
    }
}
  ?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Agradecer</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu+Mono&display=swap" rel="stylesheet">
<link rel="stylesheet" href="estilo.css">
</head>

<body>

<header>
    <h1><span class="textog">A</span>GRADECE <span class="textop">EN</span> <span class="textog">C</span>OMPAÑÍA</h1>
</header>
    <nav class="menu">
        <a href="agradecer.php">Agradecer</a>
        <a href="misagradecimientos.html">Mis agradecimientos</a>
        <a href="cerrar.php">Cerrar sesión</a>
    </nav>
    <section class="formulario">
        <form action="">
            <label for="alumno"><b>Alumno:</b></label>
            <select name="alumno">
            <?php
            
            ?>
            </select>
            <button type="submit">VER</button>
        </form>
    </section>
</body>
</html>