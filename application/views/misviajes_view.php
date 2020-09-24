<?php
    require("head.php");
    require("menu.php");
?>  

<script type="text/javascript">
    var viajes=[];
    var i=0;
</script>

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <br>
            <div class="card">
                <div class="card-header"><h3>Viajes Disponibles</h3></div>
                <div class="card-body">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" id="viajesbttab" href="#tabviajes" role="tab" aria-controls="tabviajes" aria-selected="true">Viajes</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="escalasbttab" href="#tabescalas" role="tab" aria-controls="tabescalas" aria-selected="false">Agregando Escalas</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="tabviajes" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="row">
                            <?php
                            $i=0;
                            foreach ($viajes->result() as $fila){
                                echo '<div class="col-3 col-sm-3 col-md-3 align-items-stretch">
                                <div class="card bg-light">
                                  <div class="card-header text-muted border-bottom-0">
                                    VIAJES COTTON BALL
                                  </div>
                                  <div class="card-body pt-0" id="v_'.$i.'">
                                    <div class="row">
                                      <div class="col-7">
                                        <h2 class="lead"><b>CONDUCTOR:</b>'.$fila->nombre.' '.$fila->apellidopa.' '.$fila->apellidoma.'</h2>
                                        <p class="text-muted text-sm"><b>Origen: </b>'.$fila->origen.'</p>
                                        <p class="text-muted text-sm"><b>Destino: </b>'.$fila->destino.'</p>
                                        <p class="text-muted text-sm"><b>Paradas: </b>OBRERA, CENTRAR N</p>
                                        <ul class="ml-4 mb-0 fa-ul text-muted">
                                          <li class="small"><span class="fa-li"><i class="fas fa-lg fa-chevron-right"></i></span> Plazas: '.$fila->pasajeros.'</li>
                                          <li class="small"><span class="fa-li"><i class="fas fa-lg fa-clock"></i></span> Salida: '.$fila->fechaviaje.' '.$fila->hora.'</li>
                                          <li class="small"><span class="fa-li"><i class="fas fa-lg fa-clock"></i></span> Llegada: 4:00 PM</li>
                                          <li class="small"><span class="fa-li"><i class="fas fa-lg fa-bus"></i></span> Vehículo: TOYOTA</li>
                                        </ul>
                                      </div>
                                      <div class="col-5 text-center">
                                        <img src="../dist/img/'.$fila->foto_perfil.'" alt="" class="img-circle img-fluid"/>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card-footer" style="background: #CFCFCF;">
                                    <div class="text-right">
                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" onclick="mapa_escalas('.$i.')">Agregar Escalas</button>
                                      <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalmarcadores" onclick="rutas('.$i.')">Ruta</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <script type="text/javascript">
                              i++;
                              viajes.push('. json_encode($fila).');
                              </script>';
                                $i++;
                            }
                            ?>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tabescalas" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <button type="button" class="btn btn-info" onclick="regresar()"><span class="material-icons">arrow_back</span>Regresar</button>
                            <div class="row" style="margin-top: 1%; margin-bottom: 1%;">
                                <div class="col-md-8">
                                    <input class="form-control" placeholder="escala" name="escala" id="escala" style="max-width: 50%;"/>
                                    <div id="mapa2" style="width: 100%; height: 512px;"></div>
                                </div>
                                <div class="col-md-4" id="det_viaje">
                                    
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary btn-sm" onclick="add_escala()">Guardar Escala</button>
                        </div>
                      
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
</div>

<div class="modal fade" role="dialog" id="modalmarcadores">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Puntos de recorrido ruta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="row">
            <div class="col-md-8 col-sm-8">
                <div id="mapa1" style="width: 100%; height: 512px;"></div>
            </div>
              <div class="col-md-4 col-sm-4" style="overflow-y: scroll;">
                <h4>Puntos de recorrido</h4>
                <table class="table table-sm" id="tblpuntos">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">Dirección</th>
                      <th scope="col"># Marcador</th>
                    </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

    

<script type="text/javascript" async defer>
    
    let markers = [];
    var latubi=0.0,lngubi=0.0;
    let map,map2;
    var markersregistrados = [];
    var coord_escala="",direccion_escala="";
    var pos_v=0;
    var rowstbl="";
    function initMap() {
        map  = new google.maps.Map(document.getElementById("mapa1"), {
            zoom: 5,
            mapTypeId: "roadmap"
        });
        var geocoder = new google.maps.Geocoder();
        
        geocoder.geocode( {'address' : "Mexico"}, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                map.setCenter(results[0].geometry.location);
            }
        });         
        
    }
    
    
    $(document).ready(function(){
        $('#modalmarcadores').on('shown.bs.modal',function(){
           google.maps.event.trigger(map, "resize");
        });
        initMap();
    });
    
    
    
    function rutas (pos){
        initMap();
        
        var coord = viajes[pos].coord_origen.toString().split(",");
        var coord2 = viajes[pos].coord_destino.toString().split(",");
        
        markersregistrados.push(new google.maps.Marker({
                    position: { lat: parseFloat(coord[0]), lng: parseFloat(coord[1]) },
                    title: viajes[pos].origen
                    ,map: map,
                    icon:"https://maps.google.com/mapfiles/ms/icons/red-dot.png"
                }));
        map.setCenter(markersregistrados[0].getPosition());
        markersregistrados.push(new google.maps.Marker({
                    position: { lat: parseFloat(coord2[0]), lng: parseFloat(coord2[1]) },
                    title: viajes[pos].destino,
                    map: map,
                    icon:"https://maps.google.com/mapfiles/ms/icons/green-dot.png"
                }));
        map.setCenter(markersregistrados[1].getPosition());
        
        var d = new FormData();
        d.append("idregistro",viajes[pos].id_viaje);
        var result = enviar(d,"getparadas_viaje");
        rowstbl='<tr class="origen"><td><b>Origen: </b>'+viajes[pos].origen+'</td><td>1</td></tr>';
        var i=2;
        if (result.respuesta){
            $.each(JSON.parse(result.data),function(index, id){
                console.log('My array has at position ' + index + ', this value: ' + id);
                coord = id.coord.toString().split(",");
                new google.maps.Marker({
                    position: { lat: parseFloat(coord[0]), lng: parseFloat(coord[1]) },
                    map,
                    icon:"https://maps.google.com/mapfiles/ms/icons/blue-dot.png",
                     title: "Marcador "+i
                });
                rowstbl+='<tr class="escala"><td>'+id.direccion+'</td><td>'+i+'</td></tr>';
                i++;
            });
            
        }
        rowstbl+='<tr class="destino"><td><b>Destino: </b>'+viajes[pos].destino+'</td><td>'+i+'</td></tr>';
        $("#tblpuntos tbody").html(rowstbl);
    }
    
    function setMapOnAll(markers,mapa) {
        for (let i = 0; i < markers.length; i++) {
          markers[i].setMap(mapa);
        }
        if(mapa==null)
            markers=[];
    }
    
    function iniinputBusq(){
        map2  = new google.maps.Map(document.getElementById("mapa2"), {
            zoom: 5,
            mapTypeId: "roadmap"
        });
        initAutocomplete();
    }
    
    function initAutocomplete() {
    
        
        var geocoder = new google.maps.Geocoder();

        geocoder.geocode( {'address' : "Mexico"}, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                map2.setCenter(results[0].geometry.location);
            }
        });
    
    
        // Create the search box and link it to the UI element.
        const input = document.getElementById("escala");
        const searchBox = new google.maps.places.SearchBox(input,
        {
            types: ['(cities)'],
            componentRestrictions: {country: 'mx'}
        });
      
        map2.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
        // Bias the SearchBox results towards current map's viewport.
        map2.addListener("bounds_changed", () => {
            searchBox.setBounds(map2.getBounds());
        });

        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener("places_changed", () => {
            setorigendest(0,searchBox);
        });

    }
    
    iniinputBusq();

    function setorigendest(pos,searchBox){
        const places = searchBox.getPlaces();

          if (places.length == 0) {
            return;
          }
          markers=[];
          // For each place, get the icon, name and location.
          const bounds = new google.maps.LatLngBounds();
          places.forEach(place => {
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
            // Create a marker for each place.
            markers.push(new google.maps.Marker({
                map:map2,
                title: place.name,
                position: place.geometry.location
              }));
            if(pos==0)
                coord_escala=(place.geometry.location.lat()+","+place.geometry.location.lng());
            if (place.geometry.viewport) {
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }
            map2.fitBounds(bounds);
          });
    }
    
    function mapa_escalas(pos){
        $('.nav-pills a[href="#tabescalas"]').tab('show');
        $("#det_viaje").html('');
        $("#v_"+pos).clone().appendTo($("#det_viaje"));
        $("#det_viaje").append('<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalmarcadores" onclick="rutas('+pos+')">Ruta</button>')
        pos_v=pos;
    }
    
    function add_escala(){
        var d = new FormData();
        d.append("accion","ins");
        d.append("id_viaje",viajes[pos_v].id_viaje);
        d.append("coord",coord_escala);
        d.append("direccion",$("#escala").val());
        if($("#escala").val()!=''){
            var result = enviar(d,"acciones_escalas");
            if (result.respuesta){
                alert(result.msj);
                setMapOnAll(markers,null);
                initAutocomplete();
            }
        }else
            alert("No ha escrito nada aún");
    }
    
    function regresar(){
        $('.nav-pills a[href="#tabviajes"]').tab('show');
    }
    
    function enviar(d,url) {
        var result= JSON.parse("{}");
        $.ajax({
            processData: false,
            contentType: false,
            type: "POST",
            url: url,
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
  
  <style type="text/css">
      .origen{
          background-color: orangered;
      }
      .escala{
          background-color: lightblue;
      }
      .destino{
          background-color: lightgreen;
      }
  </style>
  
<?php
    require("footer_private.php");
?>

