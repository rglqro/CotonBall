
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fa fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.html" class="nav-link">BIENVENIDO</a>
      </li>
       
    </ul>

    <!-- SEARCH FORM -->
  

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      

      <?php

      if($this->session->userdata('inicio_sesion')["perfil"]=='2'){

        ?>


         <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">CRÉDITOS<b>$280.00</b>
        </a>
         
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">SALDO <b>$5,780.00</b>
        </a>
         
      </li>

      <?php

      }

      ?>

     

      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
         
      </li>
      <!-- Notifications Dropdown Menu -->
      
      <li class="nav-item">
     
         <a class="nav-link" href="<?=site_url("Home/cerrar_sesion")?>">Cerrar Sesión</a>

      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <center><br>
<!-- 
      <img class="img-circle elevation-1" alt="User Image" src="<?php echo base_url(); ?>data/dist/img/<?php echo $usuario[0]->foto_perfil;?>"style="width: 55px; height: 55px;" >

      <img class="img-circle img-bordered-sm" src="<?php echo base_url(); ?>data/dist/img/<?php echo $usuario[0]->foto_perfil;?>"  alt="user image" style="width: 200px; height: 200px;" > -->



      <span class="brand-text font-weight-light" style="color: #EBEBEB; font-weight: bold;"><br><b><?php $str = strtoupper($this->session->userdata('inicio_sesion')["nombre"]); $sts = strtoupper($this->session->userdata('inicio_sesion')["apellidopa"]); echo $str.' '.$sts;?></b></span> <br><small style="color: #BABABA;"><?php
      echo $this->session->userdata('inicio_sesion')["descripcion"]; ?></small><br></center>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
 
          <li class="nav-item has-treeview">
            <a href="<?=site_url("Home")?>" class="nav-link">
              <i class="nav-icon fa fa-home"></i>
              <p>
                Inicio
              </p>
            </a>
          </li>

          <?php

          switch ($this->session->userdata('inicio_sesion')["perfil"]) {
            case '1':
              # code...
            echo "<li class='nav-item has-treeview'><a href='".site_url("Embajador/perfil")."' class='nav-link'><i class='nav-icon fa fa-user'></i> <p> Perfil </p></a></li>";

            echo "<li class='nav-item has-treeview'><a href='".site_url("Embajador/pagos")."' class='nav-link'><i class='nav-icon fa fa-dollar'></i> <p> Mis Pagos </p></a></li>";

            echo "<li class='nav-item has-treeview'><a href='".site_url("Embajador/gestiones")."' class='nav-link'><i class='nav-icon fa fa-th'></i> <p> Gestiones </p></a></li>";

            echo "<li class='nav-item has-treeview'><a href='".site_url("Embajador/mensajes")."' class='nav-link'><i class='nav-icon fa fa-commenting'></i> <p> Mensajes </p></a></li>";

            echo "<li class='nav-item has-treeview'><a href='".site_url("Embajador/historial")."' class='nav-link'><i class='nav-icon fa fa-list'></i> <p> Historial </p></a></li>";

            // echo "<li class='nav-item has-treeview'><a href='".site_url("Embajador/planes")."' class='nav-link'><i class='nav-icon fa fa-trophy'></i> <p> Planes </p></a></li>";
           
              break;

            case '2':
              # code...
            echo "<li class='nav-item has-treeview'><a href='".site_url("Embajador/perfil")."' class='nav-link'><i class='nav-icon fa fa-user'></i> <p> Perfil </p></a></li>";

            echo "<li class='nav-item has-treeview'><a href='".site_url("Conductor/recargas")."' class='nav-link'><i class='nav-icon fa fa-dollar'></i> <p> Saldos </p></a></li>";

            echo "<li class='nav-item has-treeview'><a href='".site_url("Conductor/publicar")."' class='nav-link'><i class='nav-icon fa fa-th'></i> <p> Publicar </p></a></li>";

            echo "<li class='nav-item has-treeview'><a href='".site_url("Conductor/viajes")."' class='nav-link'><i class='nav-icon fa fa-car'></i> <p> Mis viajes </p></a></li>";

            echo "<li class='nav-item has-treeview'><a href='".site_url("Embajador/mensajes")."' class='nav-link'><i class='nav-icon fa fa-commenting'></i> <p> Mensajes </p></a></li>";

            echo "<li class='nav-item has-treeview'><a href='".site_url("Embajador/planes")."' class='nav-link'><i class='nav-icon fa fa-bookmark'></i> <p> Planes </p></a></li>";

            // echo "<li class='nav-item has-treeview'><a href='".site_url("Embajador/planes")."' class='nav-link'><i class='nav-icon fa fa-trophy'></i> <p> Reseñas </p></a></li>";

              break;

            case '3':
              # code...
            echo "<li class='nav-item has-treeview'><a href='".site_url("Administrador/viajes")."' class='nav-link'><i class='nav-icon fa fa-car'></i> <p> Viajes </p></a></li>";

            echo "<li class='nav-item has-treeview'><a href='".site_url("Administrador/conductores")."' class='nav-link'><i class='nav-icon fa fa-user-circle'></i> <p> Conductores </p></a></li>";

            echo "<li class='nav-item has-treeview'><a href='".site_url("Administrador/embajadores")."' class='nav-link'><i class='nav-icon fa fa-user'></i> <p> Embajadores </p></a></li>";

            echo "<li class='nav-item has-treeview'><a href='".site_url("Administrador/viajeros")."' class='nav-link'><i class='nav-icon fa fa-users'></i> <p> Viajeros </p></a></li>";

            echo "<li class='nav-item has-treeview'><a href='".site_url("Administrador/recargas")."' class='nav-link'><i class='nav-icon fa fa-tag'></i> <p> Recargas </p></a></li>";

            echo "<li class='nav-item has-treeview'><a href='".site_url("Administrador/restablecer")."' class='nav-link'><i class='nav-icon fa fa-repeat'></i> <p> Reestablecer </p></a></li>";

            //reporte diario de viajes dia, veificar con Ricardo

              break;

            case '4':
              # code...
            echo "<li class='nav-item has-treeview'><a href='".site_url("Cliente/perfil")."' class='nav-link'><i class='nav-icon fa fa-user'></i> <p> Perfil </p></a></li>";

            echo "<li class='nav-item has-treeview'><a href='".site_url("Cliente/buscar")."' class='nav-link'><i class='nav-icon fa fa-search'></i> <p> Buscar viaje </p></a></li>";

            echo "<li class='nav-item has-treeview'><a href='".site_url("Cliente/viajes")."' class='nav-link'><i class='nav-icon fa fa-car'></i> <p> Mis viajes </p></a></li>";

            echo "<li class='nav-item has-treeview'><a href='".site_url("Cliente/mensajes")."' class='nav-link'><i class='nav-icon fa fa-commenting'></i> <p> Mensajes </p></a></li>";

            echo "<li class='nav-item has-treeview'><a href='".site_url("Cliente/viajes")."' class='nav-link'><i class='nav-icon fa fa-list'></i> <p>Historial </p></a></li>";

            // echo "<li class='nav-item has-treeview'><a href='".site_url("Cliente/reseñas")."' class='nav-link'><i class='nav-icon fa fa-trophy'></i> <p> Reseñas </p></a></li>";

              break;

            
            default:
              # code...
              break;
          }

          ?>

 
        
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>