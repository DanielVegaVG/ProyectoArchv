<?php
  //Necesitar hacer include o require del archivo que tiene la conexión
  function conectar(){
	//Crear la variable de conexion con la base de datos
	$conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
	$conexion->set_charset("utf8"); 
    return $conexion;
  }
  function insertar(){
	$conexion = conectar();

	//$sql = "INSERT INTO alumnos VALUES ('valorx','valory')";

	$conexion->query($sql);
	$filas
  }
  //Función para mostrar filas de una tabla
  function mostrar_alumnos(){ 
	//Conecta con la base de datos y crea el objeto $conexión.
	$conexion=conectar();  
	
	//Ejecuta la consulta sql
	$sql='select * from alumnos;';
	$resultado=$conexion->query($sql);	
	
	//Extrae cada una fila del resultado de la consulta
	$fila=$resultado->fetch_array();
	
	//Ejemplo que muestra un campo
	   echo '<p>';
	   echo 'Nombre alumno: '.$fila["nombre"]; 
	   echo 'puesto alumno: '.$fila["puesto"];
	   echo '</p>';
  }
 
 ?>
  