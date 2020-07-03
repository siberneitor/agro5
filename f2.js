
function buscarcod($cod){
	cadena={codigo:$cod}
	
	 $.ajax({
  		url:'f3.php',
  		type:'POST',
  		data:cadena,
  		beforesend:function(){
  			$('.tcodigo').val('');
  		},
  		success:function(xx){
  			dividir=xx.split('/');
  		},
  		error:function(e,ee,eee){
  			console.log(e);
  			console.log(ee);
  			console.log(eee);
  		},
  		complete: function(){
  			if (dividir==""){
  				alert('el codigo ingresado no existe');
  				UNO=$(".tcodigo").val('');
  			}else{
  							
	  			UNO=$(".td3").val(dividir[0]);
	  			dos=$(".td4").val(dividir[1]);
	  			tres=$(".td5").val(dividir[2]);
	  		  			
  				PRECIO=dividir[2];
  				numdos=parseInt(PRECIO);
				NNN=NNN+numdos;
				$("h1").text('TOTAL: '+NNN);
				console.log(NNN);

  				$('.divR').load('tabla3.php');
  				$('.tcodigo').val('');
  				$('.td1').val('');
  				$('.td2').val('');
  			}
  		}

  	});

}

function enviarV($as,$bs,$cs,$ds,$es,$fs){
	 cadena={
		txt1:$as,
		txt2:$bs,
		txt3:$cs,
		txt4:$ds,
		txt5:$es,
		txt6:$fs
	}

	$.ajax({
		type:'POST',
		url:'f2.php',
		data:cadena,
		success:function(x){

			if (x!=1){
				alert('error al insertar');
			}else{
				$('.divR').load('tabla1.php');
				alert("insertado correctamente 1");
			}
		},
		error:function(jqXHR,estado,error){
			console.log(estado);
			console.log(error);
		},
		complete:function(){
						
			$('.text1').val('');
			$('.text2').val('');
			$('.text3').val('');
			$('.text4').val('');
			$('.text5').val('');
			$('.text6').val('');
			$('.text1').focus();
		}
	});
}


function enviarVT($as,$bs,$cs){
	
	 cadena={
		txt1:$as,
		txt2:$bs,
		txt3:$cs
	}

	$.ajax({
		type:'POST',
		url:'f4.php',
		data:cadena,
		success:function(x){
			if (x!=1){
				alert('error al insertar');
			}
		},
		error:function(jqXHR,estado,error){
			console.log(estado);
			console.log(error);
		},
		complete:function(){
			$('.divR').load('tabla3.php');
		}
	});
}


function buscarcliente(idc){
	dato={idclient:idc
	}

	$.ajax({
		type:'POST',
		data:dato,
		url:'buscarcliente.php',
		beforesend:function(){
		},
		success: function(r){
			console.log(r);
			if (r<1 || r==""){
	 			alert('el numero de cliente es invalido');
	 		}else{
				labelno = $('#nocli').text(r);
				$('#tcliente').attr('hidden','true');
							 	
	 		}
		},
		error:function(r,rr,rrr){
			console.log(r);
			console.log(rr);
			console.log(rrr);
		},
		complete:function(){
			 
			nv=$('#nocli').text();
			alert('cliente '+nv+' encontrado');
		}
	});
}


function ventanacobrar(){
	$('h6').text('TOTAL: '+'$'+NNN);
	
	$('#txtcambio').change(function(){
		valorcambio=$('#txtcambio').val();
		vcambio=valorcambio-NNN;
		$('h5').text('cambio: '+'$'+vcambio);
	});
} 

function cobrar(){
	$('#txtcambio').focus();
	nv=$('#nocli').text();

	enviar={
		cobro:valorcambio,
		cambiot:vcambio,
		numcli:nv
	}
	
	$.ajax({
		url:'f5.php',
		type:'POST',
		data:enviar,
		success:function(x){
			if(x==1){
				alert('borrado correctamente');
			}
		},
		error:function(primer,segundo,tercer){
			console.log('primer');
			console.log('segundo');
			console.log('tercer');
		},
		complete:function(){
			$('.divR').empty();
			$('H1').empty();
			NNN=0;
			
			//vaciar valores de ventana cambio
			$('#txtcambio').val('');
			$('h5').text('');
			
			//vaciar valores de campos de texto de desc de punto vent
			$(".td3").val('');
  			$('.td4').val('');
  			$(".td5").val('');

  			nv=$('#nocli').empty();
  			$('#tcliente').attr('hidden','false');
			

			borrar();
		}
	})
}
/*
function buscadordinamico(){
	$(document).load('componentes/buscador.php');
	('#buscadorvivo').select2();

			$('#buscadorvivo').change(function(){
				$.ajax({
					type:"post",
					data:'valor=' + $('#buscadorvivo').val(),
					url:'php/crearsession.php',
					success:function(r){
						$('#tabla').load('componentes/tabla.php');
						alert ('has seleccionado'+r);
					}
				});
			});
}

*/
function borrar(){
	
	$.ajax({
		url:'f7.php',
		type:'POST',
		success:function(x){
		},
		error:function(primer,segundo,tercer){
			console.log('primer');
			console.log('segundo');
			console.log('tercer');
		},
		complete: function(){
			
			$('#ttcodigo').focus();

		}
	});
}