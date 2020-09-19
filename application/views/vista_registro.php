<!DOCTYPE html>
<html>
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


      <div class="modal fade" id="modal_request_true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-body">
              <p style="font-family: sans-serif; color: black;">¡Gracias por querer ser parte de nosotros!<br>
              Ahora ya puedes iniciar sesión y comenzar a viajar con nosotros.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="modal_request_false">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-body">
              ¡Tu soliciud no fue prosesada!<br>
              Revisa tu conexión a internet y vuelve a intentar.
            </div>
          </div>
        </div>
      </div>

 
<!--body-->
<body class="hold-transition login-page" style="background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(10, 5, 1, 0.5)), url('<?php echo base_url(); ?>dist/img/viajero_2.JPG') no-repeat center; background-size: cover; min-height: 100vh; line-height: normal;">



<div class="box">
  <div class="login-logo" >
    <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>dist/img/newlogo2.png" style="margin-top: 15px;"></a>
  </div>
  <!-- /.logo -->
  <div class="card" style="background-color: rgba(0,0,0,0.3);">
    <div class="card-body card-body" style="background-color: rgba(0,0,0,0.3);">
       <p style="color: white; font-size: 15px;"><B>Registrate</B> y no esperes mas para viajar en la red de trotamundo más importante de México. </p>

      <!-- <form method="post" role="form  id="quickForm"> -->
        <form id="formulario_registro_cliente" method="post" >

        <div class="row">
        <div class="form-group has-feedback col-md-4">
          <label style="color: gray;">Nombre</label>
          <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre Completo" required="true" autocomplete="off" autofocus style="border-radius: 5px;">
        </div>

        <div class="form-group has-feedback col-md-4">
          <label style="color: gray;">Apellido Paterno</label>
          <input type="text" id="apellido_paterno" name="apellido_paterno" class="form-control" placeholder="Apellido Paterno" required="true" autocomplete="off" autofocus style="border-radius: 5px;">
        </div>


        <div class="form-group has-feedback col-md-4">
          <label style="color: gray;">Apellido Materno</label>
          <input type="text" id="apellido_materno" name="apellido_materno" class="form-control" placeholder="Apellido Materno" required="true" autocomplete="off" autofocus style="border-radius: 5px;">
        </div>

      </div>


       <div class="row">
        <div class="form-group has-feedback col-md-8">
          <label style="color: gray;">Correo</label>
          <input type="email" id="correo" name="correo" class="form-control" placeholder="Correo Electrónico" required="true" autocomplete="off" autofocus style="border-radius: 5px;">
        </div>

        <div class="form-group has-feedback col-md-4">
          <label style="color: gray;">Celular</label>
          <input type="number" max="10" id="celular" name="celular" class="form-control" placeholder="Numero Celular" required="true" autocomplete="off" autofocus style="border-radius: 5px;">
        </div>
        </div>




        <div class="row">
        <div class="form-group has-feedback col-md-6">
          <label style="color: gray;">Usuario</label>
          <input type="text" id="usuario" name="usuario" max="10" class="form-control" placeholder="Usuario" required="true" autocomplete="off" autofocus style="border-radius: 5px;">
        </div>

        <div class="form-group has-feedback col-md-6">
          <label style="color: gray;">Contraseña</label>
          <input type="text" id="contrasena" name="contrasena" class="form-control" placeholder="Contraseña" required="true" autocomplete="off" autofocus style="border-radius: 5px;">
        </div>
 
      </div>

 
        <div class="row">
          <div class="col-12"><br>
 
          </div>
          <!-- /.col -->
       
          <!-- /.col -->
        </div>
        <div class="row">
             <div class="col-4"></div>

             <div class="col-4">
            <button type="submit" class="btn btn-lg btn-block" style="background: #ff7f50; color: #fff;">Registrarme</button>
          </div>

          <div class="col-4">
            <p><br>
        <a href="<?php echo base_url(); ?>index.php/Restablecer" style="color: gray; font-size: 15px;">Olvidé mi contraseña.</a>
      </p>
          </div>
        </div>
      </form>

       
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->


 

 <link rel="stylesheet" type="text/css" href="<?=base_url("data/dist/css/adminlte.min.css")?>">
 
 <script src="<?=base_url("plugins/jquery/jquery.min.js")?>"></script>

 <script src="<?=base_url("data/plugins/bootstrap/js/bootstrap.bundle.min.js")?>"></script>
 <script src="<?=base_url("data/dist/js/adminlte.min.js")?>"></script>
 <script src="<?=base_url("data/dist/js/jquery.validate.js")?>"></script>
 <script src="<?=base_url("data/dist/js/url.js")?>"></script>
 <script src="<?=base_url("data/dist/js/demo.js")?>"></script>



 <script>
   

$("#formulario_registro_cliente").submit( function(e) {
    e.preventDefault();
    // var formData = new FormData($("#form")[0]);
}).validate({
    submitHandler: function( form ) {

        var data = new FormData( $(form)[0] );
        // data.append("foto_perfil", foto_perfil);

        $.ajax({
            url: url + "Registrar/send_data_register",
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


 </script>

</body>
</html>
