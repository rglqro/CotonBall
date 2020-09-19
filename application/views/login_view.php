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

   
 
<!--body-->
<body class="hold-transition login-page" style="background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(10, 5, 1, 0.5)), url('<?php echo base_url(); ?>dist/img/back_l.JPG') no-repeat center; background-size: cover; min-height: 100vh; line-height: normal;">



<div class="login-box">
  <div class="login-logo" >
    <a href="<?php echo base_url(); ?>index.php/Principal"><img src="<?php echo base_url(); ?>dist/img/newlogo2.png" style="margin-top: 15px;"></a>
  </div>
  <!-- /.login-logo -->
  <div class="card" style="background-color: rgba(0,0,0,0.3);">
    <div class="card-body login-card-body" style="background-color: rgba(0,0,0,0.3);">
      <p class="login-box-msg" style="color: #fff; ">INICIAR SESIÓN</p>
      <p style="color: white; font-size: 15px;">Ingresa tus credenciales de acceso, si aún no cuentas con ellas puedes registrarte <b><a href="<?php echo base_url(); ?>index.php/Registro">aquí.</a></b></p>

      <form action="<?= site_url('Login/Verificar')?>" method="post" role="form" id="quickForm">

        <div class="form-group has-feedback">
        <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Usuario" required="true" autocomplete="off" autofocus style="border-radius: 5px;">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="password" id="contrasena" name="contrasena" class="form-control" placeholder="Constraseña" style="border-radius: 5px;">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
        
 
        <div class="row">
          <div class="col-12"><br>
 
          </div>
          <!-- /.col -->
       
          <!-- /.col -->
        </div>
        <div class="row">
             <div class="col-12">
            <button type="submit" class="btn btn-lg btn-block" style="background: #ff7f50; color: #fff;">Iniciar Sesión</button>
          </div>
        </div>
      </form>

      <div> 
        <div class="col-12"><br></div>

       <div class="col-12">
        <p>
        <a href="<?php echo base_url(); ?>index.php/Reestablecer_controlador" style="color: gray; font-size: 15px;">Olvidé mi contraseña.</a>
      </p>
    </div>
 
       <div class="col-12">
      <p><a href="<?php echo base_url(); ?>index.php/Registro_user" style="color: gray; font-size: 15px;">Registrarme en CottonBall</a>
      </p>
    </div>
      </div>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->


 

 <link rel="stylesheet" type="text/css" href="<?=base_url("data/dist/css/adminlte.min.css")?>">
 
 <script src="<?=base_url("plugins/jquery/jquery.min.js")?>"></script>

 <script src="<?=base_url("data/plugins/bootstrap/js/bootstrap.bundle.min.js")?>"></script>
 <script src="<?=base_url("data/dist/js/adminlte.min.js")?>"></script>
 <script src="<?=base_url("data/dist/js/demo.js")?>"></script>

</body>
</html>
