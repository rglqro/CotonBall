<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Cotton Ball | Conductor</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">

 
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/bower_components/select2/dist/css/select2.min.css">

<link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/fuenteAton.css">
<link rel="stylesheet" type="text/css" href="<?=base_url("data/dist/css/adminlte.min.css")?>">
<link rel="stylesheet" type="text/css" href="<?= base_url("dist/css/font-awesome.min.css")?>">

<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<style type="text/css">
  *{
    outline: none;
  }
 body{
  font-family: 'Anton', sans-serif;
  height: 100%;
  padding: 0;
  margin: 0;
  position: relative;

}
header{
  background-color: #393d42 ;
 
}
.header .navbar{
  background: linear-gradient(#c0c0c0);
}
#nav{
  background-color: linear-gradient(rgba(255,0,0,0.2), rgba(255, 0, 0, 0.2));
  background: #fff;
  opacity: 0.5;
}
.dropdown-item{
  color: #FF7F50;
}
.fa-user-circle-o{
  font-size: 25px;
  color: #FF7F50;
}
.fa-key{
  font-size: 18px;
  color: #ff7f50;
}
.fa-user-tie{
    font-size: 18px;
  color: #ff7f50;
}
.picture{
 margin-left: 100px;
   filter: contrast(.9) brightness(.9) grayscale(.10);
}
#letra{
  font-size: 18px;
  color: #393d42;
  font-family: sans-serif;
  margin-right: 20px;
}
#letra:hover{
  color: #FF7F50;
}
.iconosemb{
  font-size: 25px;
  color: #FF7F50;
}
/*logo de buscador*/
#search{
  font-size: 25px;
  color: #FF7F50;
   float: left;
   margin-right: -1px;
   margin-top: 5px;
}
#despliege:hover{
  color:#393d42;
}
 
.title{
  padding: 20px;
}
.fa-user-circle{
  font-size: 25px;
  color: #FF7F50;
  margin-top: -2px;
}
/*info del conductor*/
#registroem {
  color: #fff;
  font-family: sans-serif;
  text-align: left;
  font-size: 20px;
  margin-top: 30px;
}
 
#info{
  text-align: center;
  font-size: 35px;
  color: #fff;
  font-family: sans-serif;
  margin-top: -30px;

}
.dropdown-item{
  font-size: 15px;
  font-family: sans-serif;
}
 
#section{
  padding-top: 90px;
  background: #393d42;
}
/*
#word{
  font-family: sans-serif;
  font-size: 20px;
}*/
#wbtn{
  font-family: sans-serif;
  bottom: 50px;
  font-size: 20px;
  background-color: #FF7F50;
  border-radius: 5px;
  border: 1px solid #FF7F50;
  transition: .6s ease;
}
#wbtn:hover{
  background: #fff;
  color: #393d42;
}
#palabras{
  font-size: 15px;
  text-align: center;
  font-family: sans-serif;
  color: #fff;

}
.icons{
  color: #FF7F50;
  text-align: center;
  font-size: 50px;
}
p, span, a{
  color: #fff;
  text-align: center;
  font-size: 20px;
  font-family: sans-serif;
}
a:active{
  color: #ff8000;
}
/*-------pie de pagina--->*/
.footer{
  padding: 10px;
  margin-top: -6px;
  background: #000;
  text-align: center;
  font-family: sans-serif;
  font-size: 15px;

}
h6{
  color: #fff;
  font-size: 18px;
}
#copy:hover{
  color:#FF7F50;
}
#terminos:hover{
  color:#FF7F50;
}
#empresafoo{
  font-family: sans-serif;
  font-size: 10px;
  text-align: center;
}
/*ventanas modal*/
/* The Modal (background) */

/* The Close Button */
.close {
  /* Position it in the top right corner outside of the modal */
  position: absolute;
  right: 10px;
  top: 0;
  color: #393d42;
  font-size: 35px;
  font-weight: bold;
}

/* Close button on hover */
.close:hover,
.close:focus {
  color: #fff;
  cursor: pointer;
}
/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)}
  to {-webkit-transform: scale(1)}
}

@keyframes animatezoom {
  from {transform: scale(0)}
  to {transform: scale(1)}
}
.botonlogin{
   font-family: sans-serif;
  background: #393d42;
  color: #fff;
  border: 1px solid #c0c0c0;
  border-radius: 5px;
  bottom: 40px;
  width: 200px;
  height: 30px;
  padding: 2px;
  margin-left: -27px;
}
.botonlogin:hover{
 background: #fff;
 color: #ff7f50;

} 
.conductor-form .form-control[type=text]{
  background-color: #fff;
  display: inline-block;
  transition: .5s;
  font-family: sans-serif;
  font-size: 18px;
  color: #393d42;
  text-align: center;
    border: 1px solid #ff7f50;
}
.conductor-form .form-control[type=email]{
  background-color: #fff;
  display: inline-block;
  transition: .5s;
  font-family: sans-serif;
  font-size: 18px;
  color: #393d42;
  text-align: center;
  border: 1px solid #ff7f50;
}
.btn-snviar{
  background-color: #ff7f50;
  color: #fff;
  font-size: 15px;
  font-family: sans-serif;
  margin-left: 8px;
}
.btn-snviar:hover{
  background-color: #fff;
  color: #393d42;
}
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
</head>




      <div class="modal fade" id="modal_request_true" data-backdrop="static" data-keyboard="false" href="#">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-body">
              <p style="font-family: sans-serif; color: black;">¡Gracias por querer ser parte de nosotros!<br>
              Te hemos enviado un correo con los requisitos necesarios para ser parte de Cotton Ball y empezar a <b>conducir</b> en la red de trotamundo más importante de México. <b style="color: #FF7F50;"><br>Revisa tu correo electrónico.</b></p>
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
<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    
<header>
  <?php include "navbar_principal.php";?>
      <!------  ./fn navbar barra-->

<!-- ./container-fluid-->
      <div  class="container-fluid" style="margin-top: 100px;">
        <div class="row">
        <div class="col-md-3">&nbsp;</div>
     <div class="col-md-6"><h2 style="margin-right: 5px; text-align: center; color: #fff; font-size: 70px;font-family: 'Anton';">¡Sé un Conductor!</h2></div>
                  <div class="col-md-3">&nbsp;</div>
        </div>
         <br>
        <div class="row">
                  <div class="col-md-2">&nbsp;</div>
          <div class="col-md-8"><p><span style="font-size: 21px; font-family: sans-serif; text-align: center">Conduce, conoce y gana, realiza viajes cuando quieras y a donde <br
            >quieras generando ganancias</span> </p></div>
                            <div class="col-md-2">&nbsp;</div>

        </div>
    
   <br>
   <div class="row">
    <div class="col-md-2">&nbsp;</div>

     <div class="col-md-8">
           <p style="text-align: left; color: #fff; font-family: sans-serif; font-size: 20px;">Registrate</p>



<form id="formulario_quiero_ser_conductor" method="post" >

    <div class="form-row">
      <div class="col">
        <input type="text" class="form-control" id="name_driver" name="name_driver" placeholder="Digita Nombre Completo" style="font-family: sans-serif;" required="required">
      </div>
      <div class="col">
        <input type="email" class="form-control" id="email_driver" name="email_driver" placeholder="Digita tu Email"  style="font-family: sans-serif;" required="required">
      </div>
      <input type="submit" class="btn btn-success" style="margin-right:15px;" value="Enviar">
       <div class="data"></div>
       <div class="loader"></div>
      <!-- <input type="submit" value="Enviar" class="btn btn-snviar btn-lg"> -->
    </div>
  </form>



     </div>
         <div class="col-md-2">&nbsp;</div>
          <div class="col-md-12">&nbsp;</div><div class="col-md-12">&nbsp;</div>

   </div> 


   <div class="row" style="background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(10, 5, 1, 0.5)), url('<?php echo base_url(); ?>dist/img/conduc_1.jpg') no-repeat center; background-size:cover; min-height: 45vh; line-height:normal;">
    <div class="col-md-12"></div>
    <div class="col-md-4">
      <p id="palabras"> <span>Genera <b>dinero</b> con tú dispositivo <br>desde cualquier parte de <b>México</b>.</span></p>
             <div class="icons">
               <i class="fa fa-money"></i>
               
             </div>
           </div>
           <div class="col-md-4">
             <p id="palabras"><span>Ayuda a un <b>viajero</b> a llegar a su destino <br> de forma <b>segura</b> y sin <b>complicaciones.</b></span></p>
             <div class="icons">
               <i class="fa fa-users"></i>
             </div>
           </div>
           <div class="col-md-4">
             <p id="palabras"><span><b>Regístrate</b> para obtener tu acceso. <br> ¡Una vez activo comenzaras a <b>ganar</b>!</span> </p>
             <div class="icons">
             <i class="fa fa-laptop"></i>
             </div>
           </div>

   </div>  



    </div>
    
     </header>
 
 <?php include "footer_principal.php";?>
</div>
<!-- ./wrapper -->

 
  
 <script src="<?=base_url("plugins/jquery/jquery.min.js")?>"></script>

 <script src="<?=base_url("data/plugins/bootstrap/js/bootstrap.bundle.min.js")?>"></script>
 <script src="<?=base_url("dist/js/adminlte.min.js")?>"></script>
   <script src="<?=base_url("data/dist/js/jquery.validate.js")?>"></script>
  <script src="<?=base_url("data/dist/js/url.js")?>"></script>

 <script src="<?=base_url("dist/js/demo.js")?>"></script>



 <script>
   

$("#formulario_quiero_ser_conductor").submit( function(e) {
    e.preventDefault();
    // var formData = new FormData($("#form")[0]);
}).validate({
    submitHandler: function( form ) {

        var data = new FormData( $(form)[0] );
        // data.append("foto_perfil", foto_perfil);

        $.ajax({
            url: url + "Principal/send_driver_request",
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
