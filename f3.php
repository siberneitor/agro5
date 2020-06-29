<?php
	include 'conexion.php';

	$rcod=$_POST['codigo'];
	

	//print_r($a.'<p>'.$b.'<p>'.$c);
	//echo $a.'<p>'.$b.'<p>'.$c;
	 $qselect=mysql_query("select *from producto where codigo='$rcod'")or die(mysql_error());
	 
	 //verifico si se ingreso un dato en la caja de texto "codigo"
	 $numcols=mysql_num_rows($qselect);

	 if ($numcols==0){

	}else{

	 $rq=mysql_fetch_row($qselect);

 
	 $primer=$rq[1];	 
	 $segun=$rq[2];	 
	 $tercer=$rq[4];
	 
	echo $primer.'/'.$segun.'/'.$tercer.'/'.$numcols;

	

	$rrr=mysql_query("insert into temporal values ('$primer','$segun','$tercer')")or die(mysql_error());

	$q2=mysql_query("select distinct *from producto")or die(mysql_error());
	}
?>
