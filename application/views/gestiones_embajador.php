
<?php
    require("head.php");
    require("menu.php");
?>  
 







<div class="modal fade modal-alertas" id="modal_newmessage" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
           
            <form method="post" id="form_mensaje_individual">
                <div class="modal-body"></div>
            </form>
        </div>
    </div>
</div>




 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
<!--           <div class="col-sm-6">
            <h1>Gestiones</h1>
          </div>
  -->
        </div>
      </div><!-- /.container-fluid -->
    </section>

  <!-- Main content -->


 <section class="content">

      <!-- Default box -->
      <div class="card card-solid">


        <div class="card-header p-2">
                <p style="color: gray"><i class="fa fa-info-circle"></i>&nbsp;<small>En este apartado podrás visualizar todos los viajes asignados, de esta manera los podrás gestionar para que se lleven a cabo correctamente.</small></p>
              </div>


        <div class="card-body pb-0">
          <div class="row d-flex align-items-stretch">
 
            <div class="col-md-12 text-center"></div>



            <?php
            $i = 0;

            // echo '<div class="col-md-12 text-center">';
            foreach($viajes_gestionar as $viajes_gestionar ){
              // echo '  <div class="row"><div class="col-lg-12"><h5><label class="text-primary">'.$viajes_gestionar->nombre .'</label><br>DESCRIPCIÓN: <b>'. $viajes_gestionar->descripcion .'<br></b> CANTIDAD:'. $viajes_gestionar->cantidad .'</h5></div></div>';


              echo '<div class="col-4 col-sm-4 col-md-4 align-items-stretch">
              <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                  COTTON BALL
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b>Conductor:</b>'.$viajes_gestionar->origen.'</h2>
                      <p class="text-muted text-sm"><b>Ruta: </b>'.$viajes_gestionar->origen.'</p>
                      <p class="text-muted text-sm"><b>Paradas: </b>'.$viajes_gestionar->origen.'</p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-chevron-right"></i></span> Plazas: '.$viajes_gestionar->origen.'</li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-clock"></i></span> Salida: '.$viajes_gestionar->origen.'</li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-clock"></i></span> Llegada: '.$viajes_gestionar->origen.'</li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-bus"></i></span> Vehículo: '.$viajes_gestionar->origen.'</li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <img src="../../dist/img/user2-160x160.jpg" alt="" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer" style="background: #CFCFCF;">
                  <div class="text-right">
                    <a href="#" class="btn btn-sm bg-teal mensaje_viaje" title="Enviar mensaje" value="'.$viajes_gestionar->id_viaje.'">
                      <i class="fas fa-comments"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-primary" title="Gesionar Viaje" value="'.$viajes_gestionar->origen.'">
                      <i class="fas fa-user"></i> Gestionar Viaje
                    </a>
                  </div>
                </div>
              </div>
            </div>';


              $i = $i + 1;
            }

            // echo '</div>';
            if($i == 0){
              echo '<h5 class="text-red">SIN DATOS REQUERIDOS</h5>';
            }


              
 ?>

<!-- 
        <div class="col-4 col-sm-4 col-md-4 d-flex align-items-stretch">
              <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                  Digital Strategist
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b>Nicole Pearson</b></h2>
                      <p class="text-muted text-sm"><b>About: </b> Web Designer / UX / Graphic Artist / Coffee Lover </p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Demo Street 123, Demo City 04312, NJ</li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52</li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <img src="../../dist/img/user2-160x160.jpg" alt="" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <a href="#" class="btn btn-sm bg-teal">
                      <i class="fas fa-comments"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-primary">
                      <i class="fas fa-user"></i> View Profile
                    </a>
                  </div>
                </div>
              </div>
            </div>
 -->
 




 
 
          </div>



           </div>
         </div>
 
 
    </section>  


 
  </div>




<?php
    require("footer_private.php");
 
?>

<script>


 
    function formatMoney( n ) {
        var c = isNaN(c = Math.abs(c)) ? 2 : c,
        d = d == undefined ? "." : d,
        t = t == undefined ? "," : t,
        s = n < 0 ? "-" : "",
        i = String(parseInt(n = Math.abs(Number(n) || 0).toFixed(c))),
        j = (j = i.length) > 3 ? j % 3 : 0;
        return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
    };

    //  $(window).resize(function(){
    //     table_gestiones.columns.adjust();
      
    // });



      // $("#tabla_clientes tbody").on("click", ".ejemplo", function(){
      //     index_cliente = $(this).attr("value");
      //     window.location.href = url+"index.php/ClientesReventa/index/" + index_cliente;
      //   });


      $( ".mensaje_viaje" ).click(function() {
        index_conductor = $(this).attr("value");

        $.getJSON(url + "/Embajador/datos_conductor_viaje/"+index_conductor).done( function( data ){
          $.each( data, function( i, v){

            if(data){
              $("#modal_newmessage .modal-body").html("");
              $("#modal_newmessage .modal-body").append('<div class="row"><div class="col-md-12"><p>Mensaje a: <b>'+v.driver+'</b></p></div></div>');
              $("#modal_newmessage .modal-body").append('<div class="row"><div class="col-md-12"><input class="form-control" type="text" name="datos_mensaje" id="datos_mensaje" placeholder="Escribe aqui tu mensaje." required></div></div>');

               $("#modal_newmessage .modal-body").append('<br><div class="row"><div class="col-md-4">&nbsp;</div><div class="col-md-8"><input class="btn btn-success" type="submit" value="Enviar" style="background-color: #20c997;margin-right:20px;"><input class="btn btn-danger" type="button" value="Cancelar"></div></div>');

              $("#modal_newmessage").modal();
            
            }else{
              $("#modal_newmessage .modal-body").html("");
              $("#modal_newmessage .modal-body").append('<div class="row">¡Error! Verifica tu conexión a internet.</div>');
              $("#modal_newmessage").modal();
            }
          });
        });


 

        // alert( index_cliente);
      });


      $( ".gestionar" ).click(function() {
        index_cliente = $(this).attr("value");
        alert( index_cliente);
      });



</script>


  

