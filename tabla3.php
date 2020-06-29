
<?php

include 'conexion.php';

date_default_timezone_set('UTC');
date_default_timezone_set("America/Mexico_City");


$q2=mysql_query("select distinct *from temporal")or die(mysql_error());
//$q3=mysql_query("select *from tabla1 where campo1=$a")or die(mysql_error());
//$q4=mysql_query("select campo1 from tabla1")or die(mysql_error());
//$num=mysql_num_rows($q1);
//$num2=mysql_num_rows($q3);
//$num3=mysql_num_rows($q4);

?>

<table border="1" class="table-hover">
<tr>
	<td>cantidad</td>
	<td>codigo</td>
	<td>articulo</td>
	<td>precio</td>
	<td>total</td>
	
</tr>
<?php
$numproductos=0;
while ($r=mysql_fetch_row($q2)){
	
	$uno=$r[0];
	$dos=$r[1];
	$tres=$r[2];
	
	
	/*
	if($uno==$a){
		//echo 'si es igual a 4';
		$d=$num2;
	}else{
		*/
		$q4=mysql_query("select campo1 from temporal where campo1='$uno'")or die(mysql_error());
			$num3=mysql_num_rows($q4);
				//$d=$num3;


			 $numproductos = $numproductos + $num3;
			 $totalporprod= $tres * $num3; 
	?>

	


	<tr>
		<td><?php echo $num3;?></td>
		<td><?php echo $uno;?></td>
		<td><?php echo $dos;?></td>
		<td><?php echo $tres;?></td>
		<td><?php echo $totalporprod;?></td>
	</tr>


	<!--
	echo $uno.'&nbsp;'.'&nbsp;'.'&nbsp;'.$r[1].'&nbsp;'.'&nbsp;'.'&nbsp;'.$r[2].'&nbsp;'.'&nbsp;'.'&nbsp;'.$num3.'<br>';
	-->

	<?php
	
		}
	
	?>

	</table>

<?php 
echo 'total articulos'.' '.$numproductos;


?>
 