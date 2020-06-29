<?php
//include 'conexion.php';
include 'conexionClase.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

	$a=$_POST['txt1'];
	$b=$_POST['txt2'];
	$c=$_POST['txt3'];
	$d=$_POST['txt4'];
	$e=$_POST['txt5'];
	$f=$_POST['txt6'];



//$qmax=mysql_query("SELECT max(id_producto) as NUMAX from producto")or die(mysql_error());
$qmax = "SELECT max(id_producto) as NUMAX from producto";


//$rmax=mysql_fetch_array($qmax,MYSQL_ASSOC);
//$rm= $rmax["NUMAX"];

$resultado = $conexion->prepare($qmax);
        $resultado->execute();        

        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);

		
//$rm++;
$data++;



//	echo $rrr=mysql_query("insert into producto values ('$rm','$a','$b','$c','$d','$e','$f')")or die(mysql_error());
$rrr = "insert into producto values ('$rm','$a','$b','$c','$d','$e','$f')";
$resultado2 = $conexion->prepare($rrr);
        $resultado2->execute();   

		$q2=mysql_query("select distinct *from producto")or die(mysql_error());

$conexion=null;

	

?>