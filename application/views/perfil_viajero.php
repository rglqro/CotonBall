
<?php
    require("head.php");
    require("menu.php");
?>  

<style type="text/css">
  .lb-days{
    font-size: 10px;

  }
</style>
 

 <div class="modal fade" id="modal_editar" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-header bg-primary">
              <h5 class="modal-title">Editar información personal.</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            </div>

            <form method="post" id="formulario_edicion_embajador">
                <div class="modal-body"></div>
            </form>
 
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>



 <div class="modal fade" id="modal_foto" >
        <div class="modal-dialog modal-sm">
          <div class="modal-content">

            <form id="formulario_edicion_foto" method="post" >
                <div class="modal-body">
                  
                </div>
            </form>
 
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>


<!-- Large modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      ...
    </div>
  </div>
</div>




 
 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <!--   <div class="col-sm-6">
            <h1>Perfil</h1>
          </div> -->
 
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
 
          </div>
          <div class="col-md-12">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active btn-secondary" href="#datosGenerales" data-toggle="tab" >Datos generales</a></li>
                 </ul>
              </div>
              <div class="card-body" style="background: #E0E0E0;">
                <div class="tab-content">
                  <div class="active tab-pane" id="datosGenerales">
                    
                    <div class="post">
 
                     <div class="row">
                      <div class="col-md-4">
                       <center><img class="img-circle img-bordered-sm" src="<?php echo base_url(); ?>data/dist/img/<?php echo $usuario[0]->foto_perfil;?>"  alt="user image" style="width: 200px; height: 200px;" >

                        <button class="editar_foto" style="border: none;background: none; color:#ff7f50;" value="<?php echo $usuario[0]->foto_perfil;?>"><i class="fas fa-pen " aria-hidden="true"></i></button></center>

                        <div class="user-block">
                      <span class="username">
                          <a href="#"><?php echo strtoupper($usuario[0]->nombre.' '.$usuario[0]->apellidopa.' '.$usuario[0]->apellidoma)  ;?></a><br>
                           <!-- <span style="color: gray;" ><i class="fas fa-medal" style="font-size: 20px;"></i> <?php echo strtoupper( $this->session->userdata('inicio_sesion')["descripcion"]);?></span> -->
                      </span> 

                      <span class="username">
                          <?php
                          $str = strtoupper($usuario[0]->descripcion);
                           switch ($usuario[0]->id_opcion) {
                            case '1':
                              echo "<a href='#' style='color:#CDA434;'>".strtoupper($this->session->userdata('inicio_sesion')["descripcion"]).' '.strtoupper($str)."</a>";
                              break;

                            case '2':
                              echo "<a href='#' style='color:#7F7679;'>".strtoupper($this->session->userdata('inicio_sesion')["descripcion"]).' '.strtoupper($str)."</a>";
                              break;

                            case '3':
                              echo "<a href='#' style='color:#565F6B;'>".strtoupper($this->session->userdata('inicio_sesion')["descripcion"]).' '.strtoupper($str)."</a>";
                              break;
                            
                            default:
                              echo "<a href='#' style='color:green;'>".strtoupper($this->session->userdata('inicio_sesion')["descripcion"]).' '.strtoupper($str)."</a>";
                              break;
                          }?><br>
                       </span> 
                      </div>


                     </div>
 

                   
 
                      <div class="col-md-4">
                         
                        <div class="user-block">
                          <label>DATOS PERSONALES</label>
                          <span class="description"><b>Nombre: </b>&nbsp;&nbsp;<?php echo $usuario[0]->nombre;?></span>
                          <span class="description"><b>Apellido Paterno: </b>&nbsp;&nbsp;<?php echo $usuario[0]->apellidopa;?></span>
                          <span class="description"><b>Apellido Materno: </b>&nbsp;&nbsp;<?php echo $usuario[0]->apellidoma;?></span>
                          <span class="description"><b>Correo: </b>&nbsp;&nbsp;<?php echo $usuario[0]->email;?></span>
                          <span class="description"><b>Teléfono: </b>&nbsp;&nbsp;<?php echo $usuario[0]->celular;?></span>
                          <span class="description"><b>Direccion</b>&nbsp;&nbsp;<?php echo $usuario[0]->direccion;?></span>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="user-block">
                           <label>DATOS LABORALES</label>
<!--                           <span class="description"><b>Calificación: </b>&nbsp;&nbsp;<?php echo '4.7';?></span>
 -->                          <span class="description"><b>Fecha de contrato: </b>&nbsp;&nbsp;<?php echo $usuario[0]->fecha_creacion;?></span>
                          
           
                          <span class="description"><b>Dias laborables: </b>&nbsp;&nbsp;
                            <?php

                            if($usuario[0]->lunes!=0||$usuario[0]->lunes!=''){
                              echo "Lunes ";
                            }
                            if($usuario[0]->martes!=0||$usuario[0]->martes!=''){
                              echo "Martes ";
                            }
                            if($usuario[0]->miercoles!=0||$usuario[0]->miercoles!=''){
                              echo "Miercoles ";
                            }
                            if($usuario[0]->jueves!=0||$usuario[0]->jueves!=''){
                              echo "Jueves ";
                            }
                            if($usuario[0]->viernes!=0||$usuario[0]->viernes!=''){
                              echo "Viernes ";
                            }
                            if($usuario[0]->sabado!=0||$usuario[0]->sabado!=''){
                              echo "Sábado ";
                            }
                            if($usuario[0]->domingo!=0||$usuario[0]->domingo!=''){
                              echo "Domingo ";
                            }

                             ?> </span>
                          <span class="description"><b>Descripción: </b>&nbsp;&nbsp;<?php echo $usuario[0]->acerca;?></span>
                          <!-- <span class="description"><small>Editar información</small></span> -->
                        
                       
                        <span class="description"><BR><button class="btn btn-primary editar_perfil" data-value="<?php echo $usuario[0]->id_opcion;?>" value="<?php echo $usuario[0]->id_usuario;?>">Editar información</button></span>
                        </div>
                      </div>


                    </div>
                  </div>
                </div>
              </div>
            </div> 
          </div>
        </div>
      </div>
    </div>
  </section>
    <!-- /.content -->
  </div>




<?php
    require("footer_private.php");
 
?>

<script>


  $( ".editar_perfil" ).click(function() {
   id_usuario = $(this).val();

      // perfil = $(this).val();



   // alert( "hola kelyn"+id_usuario);


    $("#modal_editar .modal-body").html("");
    // $("#modal_editar .modal-footer").html("");

    $("#modal_editar .modal-body").append('<div class="row"><div class="col-md-12">');


    $.getJSON(url + "/Embajador/datos_labora/"+id_usuario).done( function( data ){
          $.each( data, function( i, v){
            if(v.lunes=='1'){
               $("#modal_editar .modal-body").append('<input type="checkbox" name="cb-lunes" checked="true" value="0"> Lunes<br>');
            }else{
               $("#modal_editar .modal-body").append('<input type="checkbox" name="cb-lunes" value="1"> Lunes<br>');
            }

            if(v.martes=='1'){
               $("#modal_editar .modal-body").append('<input type="checkbox" name="cb-martes" checked="true" value="0"> Martes<br>');
            }else{
               $("#modal_editar .modal-body").append('<input type="checkbox" name="cb-martes" value="1"> Martes<br>');
            }

            if(v.miercoles=='1'){
               $("#modal_editar .modal-body").append('<input type="checkbox" name="cb-miercoles" checked="true" value="0"> Míercoles<br>');
            }else{
               $("#modal_editar .modal-body").append('<input type="checkbox" name="cb-miercoles" value="1"> Míercoles<br>');
            }

            if(v.jueves=='1'){
               $("#modal_editar .modal-body").append('<input type="checkbox" name="cb-jueves" checked="true" value="0"> Jueves<br>');
            }else{
               $("#modal_editar .modal-body").append('<input type="checkbox" name="cb-jueves" value="1"> Jueves<br>');
            }

            if(v.viernes=='1'){
               $("#modal_editar .modal-body").append('<input type="checkbox" name="cb-viernes" checked="true" value="0"> Viernes<br>');
            }else{
               $("#modal_editar .modal-body").append('<input type="checkbox" name="cb-viernes" value="1"> Viernes<br>');
            }

            if(v.sabado=='1'){
               $("#modal_editar .modal-body").append('<input type="checkbox" name="cb-sabado" checked="true" value="0"> Sábado<br>');
            }else{
               $("#modal_editar .modal-body").append('<input type="checkbox" name="cb-sabado" value="1"> Sábado<br>');
            }

            if(v.domingo=='1'){
               $("#modal_editar .modal-body").append('<input type="checkbox" name="cb-domingo" checked="true" value="0"> Domingo<br>');
            }else{
               $("#modal_editar .modal-body").append('<input type="checkbox" name="cb-domingo" value="1"> Domingo<br>');
            }

             if(v.acerca!=''||v.acerca!=null){
               $("#modal_editar .modal-body").append('<br><div class="row">Descripción personal<div class="col-md-12"><input type="text" name="cb-desc" class="form-control" placeholder="Describe un poco de ti."  value="'+v.acerca+'" required></div></div>');
            }else{
               $("#modal_editar .modal-body").append('<br><div class="row">Descripción personal<div class="col-md-12"><input type="text" name="cb-desc" class="form-control" placeholder="Describe un poco de ti." required></div></div>');
            }

            $("#modal_editar .modal-body").append('<input type="hidden" name="cb-id" value="'+v.id_usuario+'">');




          });

          $("#modal_editar .modal-body").append('<br><div class="row"><div class="col-md-12"><center>'
            +'<input type="submit" class="btn btn-success" style="margin-right:15px;" value="GUARDAR CAMBIOS"></center>'
            +'</div></div>');


        });


     
      

      

    // $("#modal_editar .modal-body").append('<div class="row"><div class="col-md-4">Descripción&nbsp;<b><input type="text" class="form-control" value="'+id_usuario+'"></div></div>');

    $("#modal_editar").modal();


 

});








 $( ".editar_foto" ).click(function() {
   urls = $(this).val();
   more = 'data/dist/img/';
   alert( url2+more+urls);


    $("#modal_foto .modal-body").html("");
    $("#modal_foto .modal-footer").html("");

    $("#modal_foto .modal-body").append('<div class="row"> <div class="col-md-12"><center><img class="img-circle img-bordered-sm" src="'+url2+more+urls+'"  alt="user image" style="width: 150px; height: 150px;" ></center></div></div>');

    $("#modal_foto .modal-body").append('<div class="row"><div class="col-md-12"><br><input type="file" name="foto_perfil" id="foto_perfil" class="form-control" required /></div></div>');
   

    $("#modal_foto .modal-body").append('<div class="row"><div class="col-md-12"><br></div><div class="col-md-12"><center><input type="submit" class="btn btn-success" style="margin-right:15px;" value="SUBIR"></center></div></div>');

    $("#modal_foto").modal();


 

});




$("#formulario_edicion_foto").submit( function(e) {
    e.preventDefault();
    // var formData = new FormData($("#form")[0]);
}).validate({
    submitHandler: function( form ) {

        var data = new FormData( $(form)[0] );
        data.append("foto_perfil", foto_perfil);

        $.ajax({
            url: url + "Embajador/subir_foto",
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'json',
            method: 'POST',

                type: 'POST', // For jQuery < 1.9
                success: function(data){
                    if(true){
                        // $("#modal_foto").modal('toggle' );
                        location.reload();
                        alert("¡Tu foto se subió con éxito!");// 
                    }else{
                        alert("NO SE HA PODIDO COMPLETAR LA SOLICITUD");
                    }
                },error: function( ){
                    alert("ERROR EN EL SISTEMA");
                }
            });
    }
});




$("#formulario_edicion_embajador").submit( function(e) {
    e.preventDefault();
    // var formData = new FormData($("#form")[0]);
}).validate({
    submitHandler: function( form ) {

        var data = new FormData( $(form)[0] );
        // data.append("foto_perfil", foto_perfil);

        $.ajax({
            url: url + "Embajador/update_informacion",
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'json',
            method: 'POST',

                type: 'POST', // For jQuery < 1.9
                success: function(data){
                    if(true){
                        // $("#modal_foto").modal('toggle' );
                        location.reload();
                        alert("¡Tu cambio se realizó con éxito!");// 
                    }else{
                        alert("NO SE HA PODIDO COMPLETAR LA SOLICITUD");
                    }
                },error: function( ){
                    alert("ERROR EN EL SISTEMA");
                }
            });
    }
});


</script>