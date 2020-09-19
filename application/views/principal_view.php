<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Cotton Ball | Oficial</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">

 
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/bower_components/select2/dist/css/select2.min.css">

<link rel="stylesheet" href="<?php echo base_url(); ?>data/dist/css/fuenteAton.css">
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
  margin:0;
  position: relative;
}
.btn-outline-success{
  font-size: 18px;
  font-family: sans-serif;
  color: #393d42;
}
header{
  background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(10, 5, 1, 0.5)), url('<?php echo base_url(); ?>dist/img/mujerfinal.jpg') no-repeat center;
  background-size: cover;
  min-height: 100vh;
  line-height: normal;
}

 .header .navbar{
   background: linear-gradient(#c0c0c0);
}
#nav{
  background-color: linear-gradient(rgba(255,0,0,0.2), rgba(255, 0, 0, 0.2));
  background: #fff;
  opacity: 0.5;
}
.picture{
  margin-left: 100px;
  filter: contrast(.8) brightness(.8) grayscale(.8);
}
#letra{
  font-size: 18px;
  color: #393d42;
  font-family: sans-serif;
  margin-right: 15px;

}
#botonesprincipal{
  background:#FF7F50;
  border: 1px solid #393d42;
  border-radius: 5px;
  color: #393d42;
  font-family: sans-serif;
  font-size: 20px;
  text-decoration: none;
  box-shadow: 2px 4px 3px #393d42;
  transition: .5s ease;
}
.botonesprincipal:hover{
 background: #393d42;
 color: #fff;
 border: 1px solid #FF7F50;

}
#botombuscar{
background:#FF7F50;
  border: 1px solid #393d42;
  border-radius: 5px;
  color: #393d42;
  font-family: sans-serif;
  font-size: 20px;
  text-decoration: none;
  box-shadow: 2px 4px 3px #393d42;
  transition: .5s ease;
   width: 200px;
 }
.botombuscar:hover{
   background: #fff;
 color: #393d42;
 border: 1px solid #FF7F50;
}
#letra:hover{
  color: #FF7F50;
}
#title{
 padding: 20px 25px;
 margin-top: 200px;
 height:auto;
}

#search{
  font-size: 25px;
  color: #FF7F50;
   float: left;
   margin-right: -1px;
   margin-top: 3px;
}

.frass{
  margin-left: 2px;
 text-align: center;
  color: #fff;
  font-size: 70px;
  font-family: 'Anton';

}
 .lema{

  text-align: justify;
  font-family: sans-serif;
  font-size: 20px;
  color: #fff;
}
.dropdown-item{
  font-size: 15px;
  color: #FF7F50;
  font-family: sans-serif;;
}
.fa-user-circle{
  font-size: 25px;
  color: #FF7F50;
  margin-top: -2px;
}
/*botones*/
.boton1{
  text-align: center;
  margin-top: -5px;
}
.btn-success{
  background: #FF7F50;
  color: #393d42;
  width: 150px;
  border-radius: 5px;
  margin-top: 50px;
  font-size: 20px;
  border: 1px solid #FF7F50;
  transition: .5s ease;
  bottom: 48px;
  font-family: 'Anton';
  padding: 10px;
  text-decoration: none;
  box-shadow: 2px 4px 3px #393d42;
}
.btn-success:hover{
  color:#fff;
  background-color: #393d42;
}
#btnviaje{
  background: #FF7F50;
  color: #393d42;
  width: 150px;
  border-radius: 5px;
  margin-top: 50px;
  font-size: 20px;
  border: 1px solid #FF7F50;
  transition: .5s ease;
  bottom: 48px;
  font-family: 'Anton';
  padding: 10px;
  text-decoration: none;
  box-shadow: 2px 4px 3px #393d42;
}
#btnviaje:hover{
  color:#fff;
  background-color: #393d42;
}
.boton2{
  text-align: center;
}
#boton2{
   background: #393d42;
   color: #fff;
   width: 250px;
   border-radius: 5px;
   margin-top: 10px;
   font-size: 20px;
   border: 1px solid #393d42;
   transition: .5s ease;
   bottom: 60px;
   font-family: 'Anton';
   padding: 10px;
   text-decoration: none;
}
#boton2:hover{
  color:#FF7F50;
  background-color: #fff;
}
.boton3{
  text-align: center;
}
#boton3{
  background: #393d42;
  color: #fff;
  width: 250px;
  border-radius: 5px;
  margin-top: 10px;
  font-size: 20px;
  border: 1px solid #393d42;
  transition: .5s ease;
  bottom: 60px;
  font-family: 'Anton';
  padding: 10px;
}
#boton3:hover{
  color:#FF7F50;
  background-color: #fff;
}
.boton4{
  text-align: center;
}
#boton4{
  background: #393d42;
  color: #fff;
  width: 250px;
  border-radius: 5px;
  margin-top: 10px;
  font-size: 20px;
  border: 1px solid #393d42;
  transition: .5s ease;
  bottom: 60px;
  font-family: 'Anton';
  padding: 10px;
  text-decoration: none;
}
#boton4:hover{
  color:#FF7F50;
  background-color: #fff;
}
/* medidas*/
@media (min-width: 1900px) and (max-width: 2000px) {
  /* pantalla grande*/
}
@media (min-width: 768px) {
  /*tablet*/
}
.row{
  margin-top: 20px;
}
/* section embajador registro*/
.embajador{
  padding: 95px;
}
#ofertas{
  padding: 20px;
  background-color: #FF7F50;
}
#ver{
  font-size: 30px;
  font-family:sans-serif;
}
#tags{
  margin-top: 8px;
}
#info{
  background-color: #393d42;
  padding: 30px 0;
}
#destino{
  font-size: 40px;
  font-family: sans-serif;
}
#visualizar{
  font-size: -10px;
  margin-left: 250px;
  font-family: sans-serif;
  margin-top: -15px;
}

.visualizar{
  font-size: 8px;
}
.icon{

  text-align: center;
  font-size: 50px;
  color: #FF7F50;
}
.logos{
  text-align: center;
  font-size: 50px;
  color: #FF7F50;
}
button{
  text-align: center;
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
.btocancelar{
   font-family: sans-serif;
  background: #393d42;
  color: #fff;
  border: 1px solid #c0c0c0;
  border-radius: 4px;
}
.btocancelar:hover{
 background: #c0c0c0;
 color: #ff7f50;

}
.botonesmodal{
 border: 1px solid #393d42;
 border-radius: 2px;
 font-size: 10px;
 font-family: sans-serif;
 background: #ff7f50;
 color: #fff;
}
.botonesmodal:hover{
 border: 1px solid #ff7f50;
 border-radius: 2px;
 font-size: 10px;
 font-family: sans-serif;
 background: #393d42;
 color: #fff;
}
#cotton{
  text-align: center;
  font-size: 35px;
  color: #fff;
  font-family: sans-serif;
}
.botonprincipal{
  background-color:#FF7F50;
  color: #393d42;
  width: 70px;
  height: 50px;
  border-radius: 5px;
  margin-top: 30px;
  font-size: 20px;
  border: 1px solid #FF7F50;
  font-family: 'Anton';
  transition: .8s ease;
  bottom: 50px;
  padding: 2px;
  text-decoration: none;
  box-shadow: 1px 2px 1px #FF7F50;
}
.botonprincipal:hover{
  color:#393d42;
  background-color:#fff;
}
.buscador{
  text-align:center;
  margin-left: 485px;
}
h1{
  color: #fff;
  text-align: center;
  font-size: 40px;
  font-family: sans-serif;
}
h3{
  color: #fff;
  text-align: center;
  font-size: 25px;
  font-family: sans-serif;
  padding: 25px;
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
#link:hover{
  color:#393d42;
}
#seguir{
  padding: 30px;
  background-color: #393d42;
}
h4{
  text-align: center;
  background-color: #FF7F50;
  padding: 15px;
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
#empresafoo{
  font-family: sans-serif;
  font-size: 5px;
  text-align: center;
}
h6{
  color: #fff;
  font-size: 15px;
}
.icons{
  color: #fff;
  font-size: 25px;
}
.derechos{
  text-align: center;
}
#terminos:hover{
  color:#FF7F50;
}
#copy:hover{
  color:#FF7F50;
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

</style>
 
 
<!--body-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">

<header>
  <?php include "navbar_principal.php";?>


      <!------  ./fn navbar barra-->
     <div  id="title">
        <h2 class="frass">Viaja con Cotton</h2>
        <br>
        <p><span class="lema"><b>La red de trotamundos donde todos ganan <br> por viajar</b></span> </p>
     <div class="row">
      <div class="col-sm">&nbsp;</div>
       <div class="col-sm">
        <br>
        <a href="<?php echo base_url(); ?>index.php/Buscar"><button type="submit" name="button" id="botonesprincipal" class="btn  btn-lg" style="margin-left:130px; ">Buscar Viajes</button></a>
      </div>
        <div class="col-sm">&nbsp;</div>
    </div>
    </div>
      <br>
      <br>
</header>
  <!--separadpr de ofertas--->
    <section id="ofertas">
     <div class="container">
       <div class="row">
         <div class="col-md-4">
           <p style="font-size: 30px; font-family: sans-serif; color: #fff;"><b>¿A donde quieres ir?</b></p>
         </div>
         <div class="col-md-4">&nbsp;</div>
        <div class="col-md-4">
           <p style="margin-top: 10px;"><span><a href="<?php echo base_url(); ?>index.php/Buscar" style="color:#393d42;">Ver todos los viajes</a></span></p>
         </div>
       </div>
       <div class="row">
         <div class="col-md-4" id="tags">
           <div class="boton2">
             <a href="<?php echo base_url(); ?>index.php/Buscar"><button type="button" name="button" id="boton2">Querétaro a CDMX <br> $170</button></a>
           </div>
         </div>
         <div class="col-md-4" id="tags">
           <div class="boton3">
             <a href="<?php echo base_url(); ?>index.php/Buscar"><button type="button" name="button" id="boton3">Puebla a Querétaro <br>$300</button></a>
           </div>
       </div>
       <div class="col-md-4" id="tags">
         <div class="boton4">
           <a href="<?php echo base_url(); ?>index.php/Buscar"><button type="button" name="button" id="boton4">Cuernavaca a Querétaro $250</button></a>
         </div>
       </div>
       </div>
     </div>
    </section>
    <!----termina pfertas--->
    <section id="info">
      <h3 style="color: #fff; text-align: center; font-size: 25px; font-family: sans-serif; padding: 25px;">Viaja a donde quieras o ayuda a alguien a viajar de la manera más segura y económica posible</h3>
      <br>
      <h1 style="color: #fff; text-align: center; font-size: 40px; font-family: sans-serif;">¿Qué es CottonBall?</h1>
    <div class="container">
     <div class="row">
       <div class="col-sm-4">
         <div class="icon">
             <i class="fa fa-users"></i>
         </div>
        <p><span style="font-size: 18px;">Busca y reserva tu viaje entre toda red de viajeros a cualquier parte de la republica</span> </p>
       </div>
       <div class="col-sm-4">
         <div class="icon">
             <i class="fa fa-user"></i>
         </div>
         <p><span style="font-size: 18px;">Desde que reservas recibe apoyo de un miembro de nuestra red en todo momento hasta concluir tu viaje</span> </p>
       </div>
       <div class="col-sm-4">
         <div class="icon">
           <i class="fa fa-star"></i>
         </div>
         <p><span style="font-size: 18px;">Puedes calificar a cada miembro de nuestra red para asi mejorar nuestro servicio</span> </p>
       </div>
     </div>
     <div class="row">
        <div class="col-sm-4">&nbsp;</div>
        <div class="col-sm-4">
        <a href="<?php echo base_url(); ?>index.php/Buscar"><button type="submit" name="button" id="botombuscar" class="btn btn-lg" style="margin-left: 100px;">Buscar Viajes</button></a>
      </div>
      <div class="col-sm-4">&nbsp;</div>
     </div>
   </div>
    </section>
    <!--termina section-->
    <section id="seguir">
     <h4 id="cotton">¿Porqué usar CottonBall?</h4>
    <div class="container">
     <div class="row">

      <div class="col-sm-4">
        <p><span style="font-size: 18px;">Buscamos que nuestra red de miembros sea la más grande y segura a nivel nacional.</span></p>
      </div>

      <div class="col-sm-4">
        <p><span style="font-size: 18px;">Nuestros miembros pasan para certificar la seguridad de cada uno de los viajes realizados.</span></p>
      </div>

      <div class="col-sm-4">
        <p><span style="font-size: 18px;">No tienes que trasladarte hasta la terminal, te buscamos un punto cerca de donde te encuentras.</span></p>
      </div>

      <div class="col-sm-4">
        <div class="logos">
          <i class="fa fa-location-arrow"></i>
        </div>
      </div>

       <div class="col-sm-4">
        <div class="logos">
          <i class="fa fa-check-square"></i>
        </div>
      </div>

       <div class="col-sm-4">
        <div class="logos">
          <i class="fa fa-map-marker"></i>
        </div>
 

     </div>
    </div>
    </section>
    <!--  ./footer -->
 <?php include "footer_principal.php";?>
</div>
<!-- ./wrapper -->

 
    
 <script src="<?=base_url("plugins/jquery/jquery.min.js")?>"></script>

 <script src="<?=base_url("data/plugins/bootstrap/js/bootstrap.bundle.min.js")?>"></script>
 <script src="<?=base_url("dist/js/adminlte.min.js")?>"></script>
   <script src="<?=base_url("data/dist/js/jquery.validate.js")?>"></script>
  <script src="<?=base_url("data/dist/js/url.js")?>"></script>

 <script src="<?=base_url("dist/js/demo.js")?>"></script>


 
 
</body>
</html>
