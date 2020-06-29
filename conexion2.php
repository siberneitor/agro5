<?php
$server='localhost';
$user='root';
$password='root';
$bd='sistemaventa';

$conexion=mysql_connect($server,$user,$password) or die(mysql_error());
$sdb=mysql_select_db($bd,$conexion) or die(mysql_error());
?>