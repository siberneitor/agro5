<?php
$server='localhost';
$database='sistemaventas';
$user='root';
$password='root';
$conn=mysql_connect($server,$user,$password)or die('error al establacer la conexion');
mysql_select_db($database,$conn) or die ('no hubo conexion con la bd');
?>