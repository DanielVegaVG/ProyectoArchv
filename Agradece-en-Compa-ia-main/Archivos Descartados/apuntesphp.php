

<?php
//require 'opreacionesdb.php' ;
include 'operacionesdb.php';
$total_afectadas

?>
///
<?php
require 'configdb.php';
function conectar(){
    //Lo primero que hay que hacer es conectarse con la base de datos del metodo conectarse 
    //con la funcion conectar creamos un objeto conexion

    //$conexion = new mysqli ('esvirgua.com','usuario','contraseña','nombre base de datos');
    $conexion->set_charset("utf8");
    return $conexion;
}
?>
//Hay que hacer una funcion que muestra el id y el nombre de todos los alumnos

//Crear variables y constantes
<?php 
define ("SERVIDOR",'localhost');
define ("USUARIO",'root');
define ("PASSWORD",'');
define ("BBDD",'cursos');
?>

function consultar(){
    $conexion=conectar();
    $sql="select * from alumnos";
    $resultado=$conexion->query($sql);
    while ($fila=$resultado->fecth_array()){
        echo "<p>";
        echo $fila["id"].'-'.$fila["nombre"];
        echo "</p>";
    }
}

meter 3 alumnos en la base de datos y hacer un metodo que muestre los 3 alumnos