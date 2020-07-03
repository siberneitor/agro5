<?php
include 'header.html';
?>
<!DOCTYPE html>
<html >
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
		<link rel="stylesheet" href="bootstrap-4.0.0/dist/css/bootstrap.min.css">
		<script src="jquery-3.2.1.min.js"></script>
		<script type="text/javascript" charset="utf-8" async defer></script>
		<script src="bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>
	</head>
	<body>
		<form id="formcliente"  method="post" accept-charset="utf-8" class="form-horizontal">
			<div class="form-group">
				<label>nombre</label>
				<input type="text" class="textnom" name="txtnombre" placeholder="nombre">
				<p>
				<label>apellidos</label>
				<input type="text" class="textape" name="txtapellidos" placeholder="apellidos">
				<p>
				<label>direccion</label>
				<input type="text" class="textdir" name="txtdireccion" placeholder="direccion">
				<p>
				<label>localidad</label>
				<input type="text" class="textloc" name="txtlocalidad" placeholder="localidad">
				<p>
				<label>telefono</label>
				<input type="text" class="texttel" name="txttelefono" placeholder="telefono">
				<p>
				<label>Email</label>
				<input type="text" class="textema" name="txtemail" placeholder="Email">
				<p>
				<label>Monto credito actual</label>
				<input type="text" class="textcredact" name="txtmonto" placeholder="Monto credito actual">
				<p>
				<label>Numero de  creditos</label>
				<input type="text" class="textnocred" name="txtndc" placeholder="Numero de creditos">
				<p>
				<label>Estatus credito actual</label>
				<input type="text" class="texteca" name="txteca" placeholder="Estatus de credito">
			</div>
		</form>
		<button class="btn btn-success" id="btnaddclient">crear cliente</button>
		<p>
	</body>
	<script>
		$(document).ready(function(){
			       	
		/*
			cadenadatos={
				dato1:'t1',
				dato1:'txtapellido',
				dato1:'txtdireccion',
				dato1:'txtlocalidad',
				dato1:'txttelefono',
				dato1:'txtmca',
				dato1:'txtnc',
				dato1:'txteca'			
			}*/

			$('#btnaddclient').click(function(){
				;
			
				$.ajax({
					type:'POST',
					data:$('#formcliente').serialize(),
					url:'agregarcliente.php',
					beforesend:function(){
					},
					success:function(x){
						console.log(x);
						if(x==1){
							alert ('insertado correctamente');
						}else{
							alert('error al insertar');
						}
					},
					error:function(x1,x2,x3){
						console.log(x1,x2,x3);
					}
				});
			});
			return false;
		})
	</script>
</html>