<?php
    require("head.php");
    require("menu.php");
?>  
<style>
    #map #infowindow-content {
        display: inline;
      }
      
      .ruta-search{
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        background: #fff;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        left: 0;
        position: absolute;
        top: 0;
        width: 440px;
        z-index: 1;
      }
</style>
    
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
          <br>
        <div class="card">
            <div class="card-header"><h3>Registro de viajes</h3></div>
            <div class="card-body">
              <form method="post" enctype="multipart/form-data" id="form_publicar">
                  <input type="hidden" name="accion" id="accion" value="ins"/>
                  <input type="hidden" name="coord_origen" id="coord_origen" value="0.0000"/>
                  <input type="hidden" name="coord_destino" id="coord_destino" value="0.0000"/>
                  
                  <div id="map" style="min-height: 20em; margin-top: 1em; margin-bottom: 1em;">
                     
                  </div>
                  <div class="row">
                      <div class="col-md-6" >
                          <label>Origen:<input type="text" id="origen" name="origen" placeholder="Origen" required class="form-control" style="max-width: 35%"/></label>
                      </div>
                      <div class="col-md-6">
                          <input type="text" id="destino" name="destino" placeholder="Destino" required class="form-control"  style="max-width: 35%"/>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-3">
                          <label for="fecha">Fecha del viaje</label>
                          <input type="date" id="fecha" name="fecha" required class="form-control" value="<?php echo date("Y-m-d");?>"/>
                      </div>
                      <div class="col-md-3">
                          <label for="hora">Hora de salida</label>
                          <input type="time" id="hora" name="hora" required class="form-control" value="<?php echo date("H:i");?>"/>
                      </div>
                      <div class="col-md-3">
                          <label for="plazas">Número de plazas</label>
                          <select id="plazas" name="plazas" required class="form-control">
                              <option>--Seleccione una opción--</option>
                              <?php
                              for($i=1;$i<=50;$i++)
                                  echo '<option value="'.$i.'">'.$i.'</option>';
                              ?>
                          </select>
                      </div>
                      <div class="col-md-3">
                          <label for="precio">Precio por plaza</label>
                          <input type="number" id="precio" name="precio" required class="form-control"/>
                      </div>
                  </div>
                  <div class="row">
                   <!--    <div class="col-md-3">
                          <label for="vehiculo">Vehículo con placas</label>
                            <select id="vehiculo" name="vehiculo" required class="form-control">
                                <option>--Seleccione una opción--</option>
                            </select>
                      </div>
 -->

                      <div class="col-md-3">
                          <label for="unidades">Seleccionar un vehículo</label>
                            <select id="unidades" name="unidades" required class="form-control">
                                <option value="">--Seleccione una opción--</option>
                                <?php
                                foreach ($unidades ->result() as $fila){
                                    echo '<option value="'.$fila->id_unidad.'">'.$fila->modelo.' - '.$fila->caracteristicas.'</option>';
                                }
                                ?>
                            </select>
                      </div>


                      <div class="col-md-3">
                          <label for="conductor">Asignar un conductor</label>
                            <select id="conductor" name="conductor" required class="form-control">
                                <option value="">--Seleccione una opción--</option>
                                <?php
                                foreach ($conductores ->result() as $fila){
                                    echo '<option value="'.$fila->id_usuario.'">'.$fila->nombre.' '.$fila->apellidopa.' '.$fila->apellidoma.'</option>';
                                }
                                ?>
                            </select>
                      </div>
                      <div class="col-md-6">
                          <label for="desc_viaje">Descripción del viaje</label>
                          <textarea class="form-control" name="desc_viaje" id="desc_viaje" rows="3"></textarea>
                      </div>
                  </div>
                  <button type="submit" class="btn btn-primary btn-sm">Crear Viaje</button>
              </form>
          </div>
            <!-- /.invoice -->
        </div><!-- /.col -->
      </div><!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

<script src="../../js/maps.js?v=3"></script>
<!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBPJI9v9jqW-RGVNkwnPtiO7AkvXFfCzY8&libraries=places&v=weekly"></script>-->

<script type="text/javascript">
    
    
    initAutocomplete();
    $("#form_publicar").submit(function (e){
        e.preventDefault();
        var d = new FormData($(this)[0]);
        var result = enviar(d);
        alert(result.msj);
        if (result.respuesta){
            location.reload();
        }
    });
        
    function enviar(d) {
        var result= JSON.parse("{}");
        $.ajax({
            processData: false,
            contentType: false,
            type: "POST",
            url: 'acciones_viaje',
            data: d,
            dataType: "json",
            async: false,
            success: function(data) {
                // Run the code here that needs
                result = data;
            },
            error: function() {
                alert('Error occured');
            }
        });
        return result;
    }
</script>
<?php
    require("footer_private.php");
?>

