
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

