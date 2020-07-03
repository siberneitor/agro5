<?php
include 'header.html';
?>
<!DOCTYPE html>

<html>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="bootstrap-4.0.0/dist/css/bootstrap.min.css">
	<script src="jquery-3.2.1.min.js"></script>
	<script src="bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>
	<script src="f2.js"></script>
	<script>
		
	</script>
	<!-- librerias buscador selector dinamico -->
	<link rel="stylesheet" type="text/css" href="librerias/select2/css/select2.css">
<script src="librerias/select2/js/select2.js"></script>
</head>
<body>

	<p>
	<form id="form2"  method="post" accept-charset="utf-8" class="form-horizontal">
		<label><H2>punto de ventaY</H2></label>
		<P>
		<label for="ttcodigo">codigo</label>
		<input type="text" class="tcodigo" name="txtcodigo" id="ttcodigo" placeholder="codigo"autofocus>
		&nbsp;&nbsp;&nbsp;&nbsp;
		<label for="tcliente"> no cliente:</label>
		<input type="text" class="tcliente" name="txtcliente" id="tcliente" placeholder="cliente">
		<label id="nocli"></label>
		<p>
		<input type="text" class="td1" name="tdato1" hidden>
		<input type="text" class="td2" name="tdato2" hidden>
		<p>
			<div class="form-group">
		<label>codigo:</label>	
		<input type="text" class="td3" name="tdato3" placeholder="codigo">
		<label>articulo:</label>	
		<input type="text" class="td4" name="tdato4" placeholder="articulo">
		<label>precio:</label>	
		<input type="text" class="td5" name="tdato5" placeholder="precio">
	</div>
	</form>
	<button id="search" class="btn btn-primary">buscar</button>
	<button id="btnadd" class="btn btn-dark">añadir</button>	
	<button id="btncobrar"  data-toggle="modal" data-target="#myModal" class="btn btn-success">cobrar</button>	
	<button id="btnborrar" class="btn btn-danger">borrar</button>	
	<button id="btnbdin" class="btn btn-primary" data-toggle="modal" data-target="#modalbusqueda">search</button>	
	<div class="divR"></div>
	
	<!--<h5></h5>-->
	<div style="width: 800px">
		<h3></h3>
		<div id="divtabla">
			<h4></h4>
		</div>
		<div style="margin-left:80px; margin-top:1px; position:relative">
			<h1></h1>
		</div>
	</div>
	<h2></h2>
<!--modal busqueda------------------------------------------------------>

	<div class="modal fade" id="modalbusqueda" role="dialog">
    	<div class="modal-dialog" role="dialog">
    
      	<!-- Modal content-->
      		<div class="modal-content">
        		<div class="modal-header">
        			<h4 class="modal-title">VENTANA BUSQUEDA</h4>
          			<button id="btnclose" type="button" class="close" data-dismiss="modal">&times;</button>
          			<!--content-->
				</div>
          			<div class="modal-body col-xs-4" >
        				<div id="buscador"></div>
     		   		</div>
        			
        		</div>
      		</div>	
        </div>
   	
<!--fin modal busqueda-------------------------------------------------------->

<!--modal ventana cobrar------------------------------------------------------>
<div>
	<div class="modal fade" id="myModal" role="dialog">
    	<div class="modal-dialog">
    
      	<!-- Modal content-->
      		<div class="modal-content">
        		<div class="modal-header">
        			<h4 class="modal-title">VENTANA COBRAR</h4>
          			<button type="button" class="close" data-dismiss="modal">&times;</button>
          			
        		</div>
        		<div class="modal-body">
        			<strong>
        				<h6></h6>
      					<label>pago con:</label>
      					<input type="text" id="txtcambio" autofocus/>
       					<h5></h5>
      				</strong>
     		   </div>
        		<div class="modal-footer">
        	 		<button type="button" class="btn btn-primary" data-dismiss="modal" onclick="cobrar();">abonar</button>
          			<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        		</div>
      		</div>
       	</div>
    </div>
</div>
<!--fin modal------------------------------------------------------------------------->

<script>
	$(document).ready(function(){
		n=0;
		n2=0;
		num1=1;
		NNN=0;

	//evento a realizar al presionar "enter" en el campo de ingreso de codigo
	//
			$('#tcliente').keypress(function(E){
				

				if(E.which == 13) {
					
					
					txtcl=$('#tcliente').val();
					buscarcliente(txtcl);
					
				}
			});

			$('.tcodigo').keydown(function(e) {
				
				if(e.which == 120) {
					//ventanacobrar();
					//alert('estas presionando la tecla');
					$('#btncobrar').click();
					$('#txtcambio').focus();
			
				}

       			if(e.which == 13) {
					uno=$('.tcodigo').val();	
					dos=$('.text2').val();
					tres=$('.text3').val();
					numdos=parseInt(dos);
					buscarcod(uno);

				}
		
				
		});
		
		
		$('#btnadd').click(function(){
		})


		$('#btncobrar').click(function(){
			ventanacobrar();
		})			



		$('#btnborrar').click(function(){
			borrar();
		});
		$('#btnbdin').click(function(){
		$('#buscador').load('componentes/buscador.php');
		});
	})		
	
</script>
</body>

</html>