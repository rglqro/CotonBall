
<?php
    require("head.php");
    require("menu.php");
?>  
 
 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Conductores</h1>
          </div>
 
        </div>
      </div><!-- /.container-fluid -->
    </section>

  <!-- Main content -->


      <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
 
          </div>
          <div class="col-md-12">
            <div class="card">
              <div class="card-header p-2">
                <p style="color: gray"><i class="fa fa-info-circle"></i>&nbsp;<small>En este apartado podrás visualizar todas las recargas abonadas a tu cuenta.</small></p>
              </div>
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="datosPagos">
                    
                    <div class="post">
 
                     <div class="row">
                      <div class="col-md-12">
                 
                       <label>&nbsp;Total: $<input style="border-bottom: none; border-top: none; border-right: none; border-left: none; background: white;" disabled="disabled" readonly="readonly" type="text" name="totalPagos" id="totalPagos"></label>

              <table id="tabla_pagos_embajador" name="tabla_pagos_embajador" class="table table-responsive table-bordered table-striped table-hover">
                 <thead style="background: #353A40;">
                <tr>
     <!--              <th>ID</th>
                  <th>Conductor</th>
                  <th>Monto</th>
                  <th>Fecha recarga</th>
                  <th>Saldo agregado</th>
                  <th>Estatus</th>
                  <th>Más</th>
                  <th>Más</th> -->


                  <th>ID</th>
                  <th>NOMBRE</th>
                  <th>TELÉFONO</th>
                  <th>EMAIL</th>
                  <th>DIAS LABORALES</th>
                  <th>ESTATUS</th>
                  <th>MÁS</th>
                  <!-- <th>Más</th>  -->


                </tr>
                </thead>
              </table> 
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


 
  </div>




<?php
    require("footer_private.php");
 
?>

<script>


  var url = "<?=base_url()?>";
  var url2 = "<?=base_url()?>index.php/";
 
  var table_pagos;

$("#tabla_pagos_embajador").ready( function () {


  $('#tabla_pagos_embajador thead tr:eq(0) th').each( function (i) {
    if( i != 0  && i != 10){
      var title = $(this).text();
      // $(this).html('<input type="text" style="width:100%;" placeholder="'+title+'"/>' );
      $(this).html('<input type="text" style="width:100%; background: #353A40; color: white; border: 0; font-weight: 500"  placeholder="'+title+'"/>' );
      $( 'input', this ).on('keyup change', function () {
        if (table_pagos.column(i).search() !== this.value ) {
          table_pagos.column(i).search( this.value).draw();

          var total = 0;
          var index = table_pagos.rows( { selected: true, search: 'applied' } ).indexes();
          var data = table_pagos.rows( index ).data();
          $.each(data, function(i, v){
            total += parseFloat(v.monto);
          });

          var to1 = formatMoney(total);
          document.getElementById("totalPagos").value = to1;
        }
      });
    }
  });

  $('#tabla_pagos_embajador').on('xhr.dt', function ( e, settings, json, xhr ) {
    var total = 0;
    $.each(json.data, function(i, v){
      total += parseFloat(v.monto);
    });
    var to = formatMoney(total);
    document.getElementById("totalPagos").value = formatMoney(total);
  });


  table_pagos = $('#tabla_pagos_embajador').DataTable({
    dom: '<"clear">',
    width: 'auto',
    "language":{ "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json" },
    "processing": true,
    "pageLength": 10,
    "bAutoWidth": false,
    "bLengthChange": false,
    "scrollX": true,
    "bInfo": false,
    "searching": true,
    "ordering": false,
    "fixedColumns": true,
    "ordering": false,
 
    "columns": [
 
    {
      "width": "5%",
      "data": function( d ){
        return '<p style="font-size: .9em">'+d.id_usuario+'</p>';
      }
    },
    {
      "width": "15%",
      "data": function( d ){
        return '<p style="font-size: .9em">'+d.id_usuario+'</p>';
      }
    },

    {
      "width": "15%",
      "data": function( d ){
        return '<p style="font-size: .9em">'+formatMoney(d.id_usuario)+'</p>';
      }
    },
 
    {
      "width": "15%",
      "data": function( d ){
        return '<p style="font-size: .9em">$ '+d.id_usuario+'</p>';
      }
    },

    {
      "width": "15%",
      "data": function( d ){
        return '<p style="font-size: .9em">$ '+formatMoney(d.id_usuario)+'</p>';
      }
    },

    {
      "width": "15%",
      "data": function( d ){
        return '<p style="font-size: .9em"><b>'+d.id_usuario+'</b></p>';
      }
    },


    {
      "width": "15%",
      "data": function( d ){
        return '<p style="font-size: .9em"><b>'+d.id_usuario+'</b></p>';
      }
    }



    ],
    "ajax": {
      "url": url2 + "Conductor/lista_conductores",
      "type": "POST",
      cache: false,
    }
  });
}); 

 
    function formatMoney( n ) {
        var c = isNaN(c = Math.abs(c)) ? 2 : c,
        d = d == undefined ? "." : d,
        t = t == undefined ? "," : t,
        s = n < 0 ? "-" : "",
        i = String(parseInt(n = Math.abs(Number(n) || 0).toFixed(c))),
        j = (j = i.length) > 3 ? j % 3 : 0;
        return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
    };

     $(window).resize(function(){
        table_pagos.columns.adjust();
      
    });


</script>