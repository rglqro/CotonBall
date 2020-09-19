
<?php
    require("head.php");
    require("menu.php");
?>  


 

 <div class="modal fade" id="modal_editar" >
        <div class="modal-dialog modal-lg">
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
                      <div class="col-md-12">
                       <center><img class="img-circle img-bordered-sm" src="<?php echo base_url(); ?>data/dist/img/<?php echo $usuario[0]->foto_perfil;?>"  alt="user image" style="width: 200px; height: 200px;" >

                        <button class="editar_foto" style="border: none;background: none; color:#ff7f50;"><i class="fas fa-pen " aria-hidden="true"></i></button></center>
                     </div>
 

                     <div class="col-md-3">&nbsp;</div>

                      <div class="col-md-6">
                        <div class="user-block">
                      <span class="username">
                          <a href="#"><?php echo $usuario[0]->nombre.' '.$usuario[0]->apellidopa.' '.$usuario[0]->apellidoma;?></a><br>
                           <!-- <span style="color: gray;" ><i class="fas fa-medal" style="font-size: 20px;"></i> <?php echo $usuario[0]->descripcion;?></span> -->
                      </span> 
                      </div>
                      </div>

                      <div class="col-md-3">&nbsp;</div>

                      <div class="col-md-3">&nbsp;</div>

                      <div class="col-md-6">
                        <div class="user-block">
                      <span class="username">
                          <?php
                          $str = strtoupper($usuario[0]->descripcion);
                           switch ($usuario[0]->id_opcion) {
                            case '1':
                              echo "<a href='#' style='color:#CDA434;'><i class='fas fa-medal' style='font-size: 20px;'></i>".$str."</a>";
                              break;

                            case '2':
                              echo "<a href='#' style='color:#7F7679;'><i class='fas fa-medal' style='font-size: 20px;'></i>".$str."</a>";
                              break;

                            case '3':
                              echo "<a href='#' style='color:#565F6B;'><i class='fas fa-medal' style='font-size: 20px;'></i>".$str."</a>";
                              break;
                            
                            default:
                              echo "<a href='#' style='color:green;'><i class='fas fa-medal' style='font-size: 20px;'></i>".$str."</a>";
                              break;
                          }?><br>
                       </span> 
                      </div>
                      </div>

                      <div class="col-md-3">&nbsp;</div>


                      <div class="col-md-2">&nbsp;</div>

                      <div class="col-md-4">
                        <div class="user-block">
                          <span class="description"><b>Correo: </b>&nbsp;&nbsp;<?php echo $usuario[0]->email;?></span>
                          <span class="description"><b>Teléfono: </b>&nbsp;&nbsp;<?php echo $usuario[0]->celular;?></span>
                          <span class="description"><b>Direccion</b>&nbsp;&nbsp;<?php echo $usuario[0]->direccion;?></span>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="user-block">
                          <span class="description"><b>Calificación: </b>&nbsp;&nbsp;<?php echo '4.7';?></span>
                          <span class="description"><b>Fecha de contrato: </b>&nbsp;&nbsp;<?php echo $usuario[0]->fecha_creacion;?></span>
                          
                        </div>
                      </div>

                      <div class="col-md-2">&nbsp;</div>

                      <div class="col-md-2">&nbsp;</div>


                      <div class="col-md-7">
                        <div class="user-block">
                          <span class="description"><b>Dias laborables: </b>&nbsp;&nbsp;Lunes - Viernes - Domingo</span>
                          <span class="description"><b>Descripción: </b>&nbsp;&nbsp;<?php echo $usuario[0]->acerca;?></span>
                          <!-- <span class="description"><small>Editar información</small></span> -->
                        </div>
                      </div>

                      <div class="col-md-3">&nbsp;
                        <button class="btn btn-primary editar_perfil" value="<?php echo $usuario[0]->id_usuario;?>">Editar información</button>
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
   // alert( "hola kelyn"+id_usuario);


    $("#modal_editar .modal-body").html("");
    // $("#modal_editar .modal-footer").html("");

    $("#modal_editar .modal-body").append('<div class="row"><div class="col-md-4">Nombre&nbsp;<b><input type="text" class="form-control" value="'+id_usuario+'"></div><div class="col-md-4">Apellido paterno&nbsp;<b><input type="text" class="form-control" value="'+id_usuario+'"></div><div class="col-md-4">Apellido materno&nbsp;<b><input type="text" class="form-control" value="'+id_usuario+'"></div></div>');
    $("#modal_editar .modal-body").append('<div class="row"><div class="col-md-4">Correo&nbsp;<b><input type="text" class="form-control" value="'+id_usuario+'"></div><div class="col-md-4">Teléfono&nbsp;<b><input type="text" class="form-control" value="'+id_usuario+'"></div><div class="col-md-4">Dirección&nbsp;<b><input type="text" class="form-control" value="'+id_usuario+'"></div></div>');
    $("#modal_editar .modal-body").append('<div class="row"><div class="col-md-12">Sobre mi:&nbsp;<b><input type="text" class="form-control" value="'+id_usuario+'"></div></div>');
    $("#modal_editar .modal-body").append('<div class="row"><div class="col-md-12">Días laborables:&nbsp;<b><input type="text" class="form-control" value="'+id_usuario+'"></div></div>');

    $("#modal_editar .modal-body").append('<div class="row"><div class="col-md-12"><br><br></div></div>');

    $("#modal_editar .modal-body").append('<div class="row"><div class="col-md-3"></div><div class="col-md-6"><button class="btn btn-success" style="margin-right:15px;">GUARDAR CAMBIOS</button> <button class="btn btn-danger">CANCELAR</button></div></div>');

    $("#modal_editar").modal();


 

});








 $( ".editar_foto" ).click(function() {
   // id_usuario = $(this).val();
   // alert( "hola kelyn"+id_usuario);


    $("#modal_foto .modal-body").html("");
    $("#modal_foto .modal-footer").html("");

    $("#modal_foto .modal-body").append('<div class="row"> <div class="col-md-12"><center><img class="img-circle img-bordered-sm" src="<?php echo base_url(); ?>data/dist/img/<?php echo $usuario[0]->foto_perfil;?>"  alt="user image" style="width: 150px; height: 150px;" ></center></div></div>');

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
                        alert("Se subió correctamente");// 
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