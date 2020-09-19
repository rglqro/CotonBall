<!DOCTYPE html>
<html>

<style type="text/css">
  
  .error{
  color: #ff7f50;
  font-size: 20px;
  font-family: sans-serif;
}


/*span.error{ color: red; font-size: 0.8em; }*/
.has-error{ 
  color: red; 
  font-size: 1em; 
}


</style>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- <title>Cotton Ball | Perfil de usuario</title> -->
   <meta name="viewport" content="width=device-width, initial-scale=1">

 
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/bower_components/select2/dist/css/select2.min.css">

<link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/fuenteAton.css">
<link rel="stylesheet" type="text/css" href="<?= base_url("dist/css/font-awesome.min.css")?>">

<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

   </head>


 

      <div class="modal fade" id="modal_request_true" data-backdrop="static" data-keyboard="false" href="#">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-body">
              <p style="font-family: sans-serif; color: black;">¡Excelente, ahora manten la calma!<br>
              Nos pondremos en contacto lo mas pronto posible contigo.</p>
              <center><button class="btn btn-success cerrar_recargar">ENTENDIDO</button></center>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="modal_request_false" data-backdrop="static" data-keyboard="false" href="#">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-body">
              ¡Tu soliciud no fue prosesada!<br>
              Revisa bien tus datos y/o tu conexión a internet y vuelve a intentar.

              <center><button class="btn btn-warning cerrar_recargar">ENTENDIDO</button></center>
            </div>
          </div>
        </div>
      </div>



 
<!--body-->
<body class="hold-transition login-page" style="background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(10, 5, 1, 0.5)), url('<?php echo base_url(); ?>dist/img/viajero_6.JPG') no-repeat center; background-size: cover; min-height: 100vh; line-height: normal;">



<div class="box">
  <div class="login-logo" >
    <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>dist/img/newlogo2.png" style="margin-top: 15px;"></a>
  </div>
  <!-- /.logo -->
  <div class="card" style="background-color: rgba(0,0,0,0.3);">
    <div class="card-body card-body" style="background-color: rgba(0,0,0,0.3);">
      <center><b><p style="color: white; font-size: 20px;">¿No recuerdas tu contraseña?</p></b></center>
       <p style="color: white; font-size: 15px;"><B>¡No te preocupes!</b>
              Nos sucede a todos. Ingresa tu Email y te ayudaremos para que volvamos a estar conectados.</p></p>

      <!-- <form method="post" role="form  id="quickForm"> -->
      <form id="formulario_restablecer_contraseña" method="post" >

       <div class="row">
        <div class="form-group has-feedback col-md-12">
          <label style="color: gray;">Correo</label>
          <input type="email" id="correo_restablecer" name="correo_restablecer" class="form-control" placeholder="Ingresa el Correo Electrónico con el que te registraste." required="true" autocomplete="off" autofocus style="border-radius: 5px;">
        </div>
      </div>

      <div class="row">
        <div class="col-12"><br>
        </div>
      </div>

      <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
          <button type="submit" class="btn btn-lg btn-block" style="background: #ff7f50; color: #fff;">Solicitar</button>
        </div>
<!-- 
        <div class="col-4">
          <p><br>
            <a href="<?php echo base_url(); ?>index.php/Reestablecer_controlador" style="color: gray; font-size: 15px;">Olvidé mi contraseña.</a>
          </p>
        </div> -->
      </div>
    </form>
  </div>
</div>
</div>



 <link rel="stylesheet" type="text/css" href="<?=base_url("data/dist/css/adminlte.min.css")?>">
 
 <script src="<?=base_url("plugins/jquery/jquery.min.js")?>"></script>

 <script src="<?=base_url("data/plugins/bootstrap/js/bootstrap.bundle.min.js")?>"></script>
 <script src="<?=base_url("data/dist/js/adminlte.min.js")?>"></script>
 <script src="<?=base_url("data/dist/js/jquery.validate.js")?>"></script>
 <script src="<?=base_url("data/dist/js/url.js")?>"></script>
 <script src="<?=base_url("data/dist/js/demo.js")?>"></script>



 <script>
   

$("#formulario_restablecer_contraseña").submit( function(e) {
    e.preventDefault();
    // var formData = new FormData($("#form")[0]);
}).validate({
    submitHandler: function( form ) {

        var data = new FormData( $(form)[0] );
        // data.append("foto_perfil", foto_perfil);

        $.ajax({
            url: url + "Restablecer/send_data_user",
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'json',
            method: 'POST',

                type: 'POST', // For jQuery < 1.9
                success: function(data){
                    if(true){
                        $("#modal_request_true").modal();
                         // location.reload();
                        // alert("Se subió correctamente");// 
                    }else{
                      $("#modal_request_false").modal();
                        // alert("NO SE HA PODIDO COMPLETAR LA SOLICITUD");
                    }
                },error: function( ){
                    alert("ERROR EN EL SISTEMA");
                }
            });
    }
});





$(document).ready(function() {
jQuery.extend(jQuery.validator.messages, {
  required: "Este campo es obligatorio.",
  remote: "Por favor, rellena este campo.",
  email: "Por favor, escribe una dirección de correo válida",
  url: "Por favor, escribe una URL válida.",
  date: "Por favor, escribe una fecha válida.",
  dateISO: "Por favor, escribe una fecha (ISO) válida.",
  number: "Por favor, escribe un número entero válido.",
  digits: "Por favor, escribe sólo dígitos.",
  creditcard: "Por favor, escribe un número de tarjeta válido.",
  equalTo: "Por favor, escribe el mismo valor de nuevo.",
  accept: "Por favor, escribe un valor con una extensión aceptada.",
  maxlength: jQuery.validator.format("Por favor, no escribas más de {0} caracteres."),
  minlength: jQuery.validator.format("Por favor, no escribas menos de {0} caracteres."),
  rangelength: jQuery.validator.format("Por favor, escribe un valor entre {0} y {1} caracteres."),
  range: jQuery.validator.format("Por favor, escribe un valor entre {0} y {1}."),
  max: jQuery.validator.format("Por favor, escribe un valor menor o igual a {0}."),
  min: jQuery.validator.format("Por favor, escribe un valor mayor o igual a {0}.")
});
});




// $( ".cerrar_recargar" ).click(function() {
$(document).on("click", ".cerrar_recargar", function(){
  $("#modal_request_true").modal('toggle');
  location.reload();
});

$(document).on("click", ".cerrar_mal", function(){
  $("#modal_request_false").modal('toggle');
});

 

 </script>

</body>
</html>
