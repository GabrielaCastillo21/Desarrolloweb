crud_empleado.php
<?php

if(isset($_POST["btn_agregar"])){
include("datos_conexion.php");
$db_conexion = mysqli_connect($db_host,$db_usr,$db_pass,$db_nombre);
$txt_codigo = utf8_decode($_POST["txt_codigo"]);
$txt_nombres = utf8_decode($_POST["txt_nombres"]);
$txt_apellidos = utf8_decode($_POST["txt_apellidos"]);
$txt_direccion = utf8_decode($_POST["txt_direccion"]);
$txt_telefono = utf8_decode($_POST["txt_telefono"]);
$drop_puesto = utf8_decode($_POST["drop_puesto"]);
$txt_fn = utf8_decode($_POST["txt_fn"]);
$sql ="INSERT INTO empleados(codigo, nombres, apellidos, direccion, telefono, fecha_nacimiento, id_puesto)VALUES('". $txt_codigo."','".$txt_nombres."', '".$txt_apellidos."','".$txt_direccion."','".$txt_telefono."','". $txt_fn."', ". $drop_puesto.");";
if ($db_conexion->query($sql)===true){
  $db_conexion ->close();
  echo"exito";
  header('Location: index.php');
}else{
  echo"Error" . $sql ."<br>.".$db_conexion ->close();
}
}
ob_end_flush();
?>