<style>

 .header .navbar{
   background: linear-gradient(#B6B6B6);
}
#nav{
  background-color: linear-gradient(rgba(255,0,0,0.2), rgba(255, 0, 0, 0.2));
  background: #fff;
  opacity: 0.5;
  text-decoration: none;
}

#nav li a{
	display: block;
	transition: .10s;
}
#search{
  font-size: 20px;
  color: #F0581F;
  margin-top: -1px;
}

#search2{
  font-size: 27px;
  color: #F0581F;
  margin-top: -1px;
}
/*boton*/
.navbar-toggler{
 font-size: 20px;
  cursor: pointer;
   background-color: linear-gradient(rgba(255,0,0,0.2), rgba(255, 0, 0, 0.2));
  background: #fff;
  opacity: 0.5;
  color: white;
  padding: 10px 15px;
  border: 2px solid #000;
  top: 0;
  margin-bottom: 10px;

}
.navbar-toggler:hover{
	 background-color: #F0581F;
	  border: 2px solid #000;
}
.dropdown-item{
  font-size: 15px;
  color: #F0581F;
  font-family: sans-serif;;
}
#letra{
  font-size: 18px;
  color: #393d42;
  font-family: sans-serif;
  margin-right: 15px;

}
#letra:hover{
  color: #F0581F;
}
</style>
 

<nav class="navbar navbar-expand-lg navbar-light bg-light" id="nav">
  <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>dist/img/newlogo.png" class="cottonball"  style="max-width:100%;width:auto;height:auto;margin-top: -15px; margin-left: 60px;"> </a>
  <!-- <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>dist/img/newlogo2.png" style="margin-top: 15px;"></a> -->
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  

  <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent" align="right">
    <ul  class="nav navbar-nav navbar-right">
       -->

      <div class="navbar-nav ml-auto">
    <ul class="nav navbar-nav navbar-right">



      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>index.php/Buscar" id="letra"><i class="fa fa-search" id="search"></i>&nbsp;&nbsp;Buscar Viaje</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>index.php/Principal/conductor" id="letra">Quiero Ser Conductor</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>index.php/Principal/embajador" id="letra">Quiero Ser Embajador</a>
      </li>
 
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-user-circle-o" aria-hidden="true" id="search2"></i>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
           <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/Login">Iniciar sesión</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/Registrar">Registrarme</a>
        </div>
      </li>

    </ul>
  
  </div>
</nav>


