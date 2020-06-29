<?php
include 'conexion.php';

	$a=$_POST['txt1'];
	$b=$_POST['txt2'];
	$c=$_POST['txt3'];
	$d=$_POST['txt4'];
	$e=$_POST['txt5'];
	$f=$_POST['txt6'];



$qmax=mysql_query("SELECT max(id_producto) as NUMAX from producto")or die(mysql_error());


$rmax=mysql_fetch_array($qmax,MYSQL_ASSOC);
$rm= $rmax["NUMAX"];
//echo $rm;
$rm++;


	echo $rrr=mysql_query("insert into producto values ('$rm','$a','$b','$c','$d','$e','$f')")or die(mysql_error());

	$q2=mysql_query("select distinct *from producto")or die(mysql_error());

?>