
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
            <h1>Saldos</h1>
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
                <p style="color: gray"><i class="fa fa-info-circle"></i>&nbsp;<small>En este apartado podrás visualizar todas tus recargas, así como el estatus en el que se encuentra cada una de ellas.</small></p>
              </div>
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="datosPagos">
                    
                    <div class="post">
 
                     <div class="row">
                      <div class="col-md-12">
                 
                       <label>&nbsp;Total: $<input style="border-bottom: none; border-top: none; border-right: none; border-left: none; background: white;" disabled="disabled" readonly="readonly" type="text" name="totalPagos" id="totalPagos"></label>

              <table id="tabla_saldos_conductor" name="tabla_saldos_conductor" class="table table-responsive table-bordered table-striped table-hover">
                 <thead style="background: #353A40;">
                <tr>
                  <th>ID</th>
                  <th>Fecha de gestión</th>
                  <th>Salida</th>
                  <th>Destino</th>
                  <th>Operador</th>
                  <th>Viajeros</th>
                  <th>C/u viajero</th>
                  <th>Total</th>
                  <th>Estatus</th>
                  <th>Más</th>
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
 
  var table_saldos;

$("#tabla_saldos_conductor").ready( function () {


  $('#tabla_saldos_conductor thead tr:eq(0) th').each( function (i) {
    if( i != 0  && i != 10){
      var title = $(this).text();
      // $(this).html('<input type="text" style="width:100%;" placeholder="'+title+'"/>' );
      $(this).html('<input type="text" style="width:100%; background: #353A40; color: white; border: 0; font-weight: 500"  placeholder="'+title+'"/>' );
      $( 'input', this ).on('keyup change', function () {
        if (table_saldos.column(i).search() !== this.value ) {
          table_saldos.column(i).search( this.value).draw();

          var total = 0;
          var index = table_saldos.rows( { selected: true, search: 'applied' } ).indexes();
          var data = table_saldos.rows( index ).data();
          $.each(data, function(i, v){
            total += parseFloat(v.cantidad);
          });

          var to1 = formatMoney(total);
          document.getElementById("totalPagos").value = to1;
        }
      });
    }
  });

  $('#tabla_saldos_conductor').on('xhr.dt', function ( e, settings, json, xhr ) {
    var total = 0;
    $.each(json.data, function(i, v){
      total += parseFloat(v.cantidad);
    });
    var to = formatMoney(total);
    document.getElementById("totalPagos").value = formatMoney(total);
  });


  table_saldos = $('#tabla_saldos_conductor').DataTable({
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
      "width": "4%",
      "data": function( d ){
        return '<p style="font-size: .9em">'+d.id_pago+'</p>';
      }
    },
    {
      "width": "12%",
      "data": function( d ){
        return '<p style="font-size: .9em">'+d.fechaviaje+'</p>';
      }
    },

    {
      "width": "15%",
      "data": function( d ){
        return '<p style="font-size: .9em">'+d.origen+'</p>';
      }
    },

    {
      "width": "15%",
      "data": function( d ){
        return '<p style="font-size: .9em">'+d.destino+'</p>';
      }
    },

    {
      "width": "15%",
      "data": function( d ){
        return '<p style="font-size: .9em">'+d.nombre+' '+d.apellidopa+' '+d.apellidoma+'</p>';
      }
    },

    {
      "width": "8%",
      "data": function( d ){
        return '<p style="font-size: .9em"><span class="right badge badge-info">'+d.pasajeros+'</span></p>';
      }
    },
 
    {
      "width": "10%",
      "data": function( d ){
        return '<p style="font-size: .9em">$ '+formatMoney(d.cantidad)+'</p>';
      }
    },

    {
      "width": "10%",
      "data": function( d ){
        return '<p style="font-size: .9em">$ '+formatMoney(d.cantidad)+'</p>';
      }
    },

    {
      "width": "10%",
      "data": function( d ){
        return '<p style="font-size: .9em"><b>'+d.estatuspago+'</b></p>';
      }
    },

    {
      "width": "6%",
      "orderable": false,
      "data": function( data ){
        opciones = '<div class="btn-group" role="group">';
        opciones += '<button class="btn btn-just-icon btn-round" title="Ver mas detalles" style="background:#FF7F50;color:white;" mas_opciones_9"><i class="fa fa-plus"></i></button>';
        return opciones + '</div>';
      }
    }
 

    ],
    "ajax": {
      "url": url2 + "Embajador/ver_pagos_embajador",
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
        table_saldos.columns.adjust();
      
    });


</script>