<?php
include 'conexion.php';

	$rrr2=mysql_query("delete from temporal")or die(mysql_error());
	 echo $rrr2;
?>
