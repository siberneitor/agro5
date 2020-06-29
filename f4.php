<?php
include 'conexion.php';

	$a=$_POST['txt1'];
	$b=$_POST['txt2'];
	$c=$_POST['txt3'];

	//print_r($a.'<p>'.$b.'<p>'.$c);
	//echo $a.'<p>'.$b.'<p>'.$c;
	echo $rrr=mysql_query("insert into temporal values ('$a','$b','$c')")or die(mysql_error());

	$q2=mysql_query("select distinct *from producto")or die(mysql_error());
?>