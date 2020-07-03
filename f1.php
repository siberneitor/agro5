<?php
include 'header.html';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="bootstrap-4.0.0/dist/css/bootstrap.min.css">
	<script src="jquery-3.2.1.min.js"></script>
	<script src="bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>
	<script src="f2.js"></script>
	<script>
		
	</script>
</head>
<body>
<label>PRODUCTOS</label>
	<p>
	<form id="form1"  method="post" accept-charset="utf-8" class="form-horizontal">
		<div class="form-group">
		<label class="col-sm-2 control-label">codigo</label>
		<input type="text" class="text1" name="txt1" placeholder="codigo" autofocus>
		<p>
		<label class="col-sm-2 control-label">articulo</label>
		<input type="text" class="text2" name=txt2 placeholder="articulo">
		<p>
		<label class="col-sm-2 control-label">costo</label>
		<input type="text" class="text3" name="txt3" placeholder="costo">
		<p>
		<label class="col-sm-2 control-label">precio</label>
		<input type="text" class="text4" name="txt4" placeholder="precio">
		<p>
		<label class="col-sm-2 control-label">proveedor</label>
		<input type="text" class="text5" name="txt5" placeholder="proveedor">
		<p>
		<label class="col-sm-2 control-label">fecha caducidad</label>
		<input type="text" class="text6" name="txt6" placeholder="fecha caducidad">
		</div>
	</form>
	<button class="btn btn-success">agregar</button>
	<p>
	<div class="divR"></div>
	<script>
		$(document).ready(function(){
			$('.divR').load('tabla1.php');
			$('.text1').focus();
			$('.text1').keypress(function(e){
			
				if(e.which == 13) {
					$('.text2').focus();
			
				}
			})
			$('.text2').keypress(function(e){
			
				if(e.which == 13) {
					$('.text3').focus();
			
				}
			})
			$('.text3').keypress(function(e){
			
				if(e.which == 13) {
					$('.text4').focus();
			
				}
			})
			$('.text4').keypress(function(e){
			
				if(e.which == 13) {
					$('.text5').focus();
			
				}
			})
			$('.text5').keypress(function(e){
			
				if(e.which == 13) {
					$('.text6').focus();
			
				}
			})
			$('.text6').keypress(function(e){
			
				if(e.which == 13) {
					$('button').focus();
			
				}
			})

			
			$('button').click(function(){
				
				uno=$('.text1').val();
				dos=$('.text2').val();
				tres=$('.text3').val();
				cuatro=$('.text4').val();
				cinco=$('.text5').val();
				seis=$('.text6').val();

			//dos=document.form2.txt2.value;
			//tres=document.form3.txt3.value;
			
			agregarProducto(uno,dos,tres,cuatro,cinco,seis);
			
					
			});
		})
	</script>
</body>
</html>