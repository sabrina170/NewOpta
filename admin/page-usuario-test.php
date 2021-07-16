<?php 
session_start();


if (isset($_SESSION["usuario"])) {
    if ($_SESSION["privilegio"] == 2) {
      
    }
  } else {
    //header("location:login.php");
}
include('header-link.php');
include('header-usuario.php');
include('vistas/test.php');
include('footer.php');
?>
<style>
.dev-form{
  display: none;
}
</style>
<script>

/* VARIABLES */

var nombre = "";
var apellidos = "";
var edad = "";
var grado = "";

var EstG1 = "";
var EstG2 = "";
var EstG3 = "";

var EstE1 = "";
var EstE2 = "";
var EstE3 = "";

var FE1 = "";
var FF1 = "";

var FE2 = "";
var FF2 = "";

var FE3 = "";
var FF3 = "";

var TotalExito = "";
var TotalFracaso = "";

var NFE1 = "";
var NFF1 = "";

var NFE2 = "";
var NFF2 = "";

var NFE3 = "";
var NFF3 = "";

var formulario2 = [];

function Step(boton){
  var tar = $(boton).data('tar');
  $('.dev-form').css({'display':'none'});
  $('#' + tar).css({'display':'block'});
}

$('#reg1').on('click', function(){
    nombre = $('#reg1_nombre').val();
    apellidos = $('#reg1_apellidos').val();
    edad = $('#reg1_edad').val();
    grado = $('#reg1_grado').val();

    validar_campos = ValidadorAuto('.au1');

    if(validar_campos == "true"){
      $('#name_reg').html(nombre + " " + apellidos);
      $('#edad_reg').html(edad);
      $('#grado_reg').html(grado);
      Step('#reg1');
      Form2();
    }else{
      return false;
    }
});

function Form2(){
  $('#reg2').on('click', function(){
    formulario2 = $('#formulario_2').serializeArray();

    console.log(formulario2);
    
    $.each( formulario2, function( key, value ) {
      $('#' + value['name']).html(value['value']);
    });

    validar_campos2 = ValidadorAuto('.au2');

    if(validar_campos2 == "true"){
      calcularPrecio();
      Step('#reg2');
      Form3();
    }else{
      return false;
    }

    
  });
}



function Form3(){
  $('#reg3').on('click', function(){

    EstG1 = $('#Eleccion_EstG1').val();
    EstG2 = $('#Eleccion_EstG2').val();
    EstG3 = $('#Eleccion_EstG3').val();

    
    console.log(EstG1 + " " + EstG2 + " " + EstG3);

    console.log("la suma es de: " + $("#EstGTotal").val());
    
    if ($("#Eleccion_EstGTotal").val() == 100) {
      console.log("continuar");
      Step('#reg3');
      Form4();

    } else {
                alert("EL TOTAL DEBE SER 100");
                //ok = false;
                return false;
            }
  });
}

function Form4(){
  $('#reg4').on('click', function(){

    EstE1 = $('#EstE1').val();
    EstE2 = $('#EstE2').val();
    EstE3 = $('#EstE3').val();
    

    $('#Est_G1').html(EstG1);
    $('#Est_E1').html(EstE1);

    $('#Est_G2').html(EstG2);
    $('#Est_E2').html(EstE2);

    $('#Est_G3').html(EstG3);
    $('#Est_E3').html(EstE3);

    var FE1 = (EstG1 / 100) * (EstE1 / 10);
    var FF1 = (EstG1 / 100)  *  ((10 - EstE1) / 10);

    var FE2 = (EstG2 / 100) * (EstE2 / 10);
    var FF2 = (EstG2 / 100)  *  ((10 - EstE2) / 10);

    var FE3 = (EstG3 / 100) * (EstE3 / 10);
    var FF3 = (EstG3 / 100)  *  ((10 - EstE3) / 10);

    var TotalExito = FE1 + FE2 + FE3;
    var TotalFracaso = FF1 + FF2 + FF3;

    var NFE1 = Math.round((FE1 / TotalExito) * 100);
    var NFF1 = Math.round((FF1 / TotalFracaso) * 100);

    var NFE2 = Math.round((FE2 / TotalExito) * 100);
    var NFF2 = Math.round((FF2 / TotalFracaso) * 100);

    var NFE3 = Math.round((FE3 / TotalExito) * 100);
    var NFF3 = Math.round((FF3 / TotalFracaso) * 100);

    $('#in_E1').html(NFE1);
    $('#in_F1').html(NFF1);

    $('#in_E2').html(NFE2);
    $('#in_F2').html(NFF2);

    $('#in_E3').html(NFE3);
    $('#in_F3').html(NFF3);

    $(function() {
      $(".ExportToWord").click(function(event) {
        $("#form-5").wordExport();
      });
    });

    validar_campos3 = ValidadorAuto('.au3');

    if(validar_campos3 == "true"){

      $.ajax({
                type: "POST",
                url: "controlador/acciones.php",
                data: {
                    accion: 'GuardarTest',

                    // DATOS USUARIO 
                    nombre : nombre,
                    apellidos : apellidos,
                    edad : edad,
                    grado : grado,

                    // DATOS TABLA 
                    Pre1A :formulario2[0]['value'],
                    Pre2A :formulario2[1]['value'],
                    Pre3A :formulario2[2]['value'],
                    Pre4A :formulario2[3]['value'],
                    Pre5A :formulario2[4]['value'],
                    Pre6A :formulario2[5]['value'],
                    Pre7A :formulario2[6]['value'],
                    Pre8A :formulario2[7]['value'],
                    Pre9A :formulario2[8]['value'],
                    Pre10A: formulario2[9]['value'],
                    Pre11A: formulario2[10]['value'],
                    Pre12A: formulario2[11]['value'],

                    Pre1B :formulario2[12]['value'],
                    Pre2B :formulario2[13]['value'],
                    Pre3B :formulario2[14]['value'],
                    Pre4B :formulario2[15]['value'],
                    Pre5B :formulario2[16]['value'],
                    Pre6B :formulario2[17]['value'],
                    Pre7B :formulario2[18]['value'],
                    Pre8B :formulario2[19]['value'],
                    Pre9B :formulario2[20]['value'],
                    Pre10B: formulario2[21]['value'],
                    Pre11B: formulario2[22]['value'],
                    Pre12B: formulario2[23]['value'],

                    Pre1C :formulario2[24]['value'],
                    Pre2C :formulario2[25]['value'],
                    Pre3C :formulario2[26]['value'],
                    Pre4C :formulario2[27]['value'],
                    Pre5C :formulario2[28]['value'],
                    Pre6C :formulario2[29]['value'],
                    Pre7C :formulario2[30]['value'],
                    Pre8C :formulario2[31]['value'],
                    Pre9C :formulario2[32]['value'],
                    Pre10C: formulario2[33]['value'],
                    Pre11C: formulario2[34]['value'],
                    Pre12C: formulario2[35]['value'],

                    EstE1 : EstE1,
                    EstE2 : EstE2,
                    EstE3 : EstE3,

                    EstG1 : EstG1,
                    EstG2 : EstG2,
                    EstG3 : EstG3,

                    // RESULTADOS
                    NFE1 :  NFE1,
                    NFF1 :  NFF1,
                    NFE2 :  NFE2,
                    NFF2 :  NFF2,
                    NFE3 :  NFE3,
                    NFF3 :  NFF3,

                    // ID USUARIO 
                    id_usu : "<?php echo $_SESSION["usuario"]; ?>"

                },
                success: function(datos) {
                  console.log(datos);
                  if(datos == 1){
                    Step('#reg4');
                  }else{
                    return false;
                  }
                }
            });
     
    }else{
      return false;
    }

  });
}

function Form5(){
  $('#reg5').on('click', function(){

    validar_campos = ValidadorAuto('.au');

    if(validar_campos == "true"){
      
    }else{
      return false;
    }

  });
}

function calcularPrecio(){
  $('.price').keyup(function() {
        
        console.log("Muestra");

        var ide = $(this).data('ide');

        $('#' + ide).html($(this).val());

          var sum = 0;
          $('.price').each(function() {
              sum += Number($(this).val());
          });
          $('#Eleccion_EstGTotal').val(sum);

  });
}
        
function validar() {
            //var ok = true;
            if ($("#totalPrice").val == 100) {} else {
                alert("EL TOTAL DEBE SER 100");
                //ok = false;
                return false;
            }
            //return ok;
}



  </script>