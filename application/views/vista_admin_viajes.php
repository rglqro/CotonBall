
<?php
    require("head.php");
    require("menu.php");
?>  
 
 

  <div class="modal fade" id="modal_nueva" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
           <!--  <div class="modal-header bg-primary">
              <h5 class="modal-title">Editar información personal.</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            </div> -->

            <form method="post" id="formulario_edicion_embajador">
                <div class="modal-body">
                  <select class="form-control myselect" id="selectCliente" name="selectCliente" required style="width:100%;" /></select>
                </div>
            </form>
 
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Recargas</h1>
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
                <p style="color: gray"><i class="fa fa-info-circle"></i>&nbsp;<small>En este apartado podrás realizar recargas a los conductores.</small></p>
              </div>
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="datosPagos">
                    
                    <div class="post">
 
                     <div class="row">
                      <div class="col-md-12">
                 
                       <label>&nbsp;Total recargas: $<input style="border-bottom: none; border-top: none; border-right: none; border-left: none; background: white;" disabled="disabled" readonly="readonly" type="text" name="totalPagos" id="totalPagos"></label>
                       <button class="btn btn-warning agregar_nueva">NUEVA RECARGA</button>

              <table id="tabla_pagos_embajador" name="tabla_pagos_embajador" class="table table-responsive table-bordered table-striped table-hover">
                 <thead style="background: #353A40;">
                <tr>
                  <th>ID</th>
                  <th>Usuario</th>
                  <th>Monto</th>
                  <th>Fecha recarga</th>
                  <th>Saldo agregado</th>
                  <th>Estatus</th>
                  <!-- <th>Más</th> -->
                  <!-- <th>Más</th> -->
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
        return '<p style="font-size: .9em">'+d.id_recarga+'</p>';
      }
    },
    {
      "width": "15%",
      "data": function( d ){
        return '<p style="font-size: .9em">'+d.conductor+'</p>';
      }
    },

    {
      "width": "15%",
      "data": function( d ){
        return '<p style="font-size: .9em">'+formatMoney(d.monto)+'</p>';
      }
    },
 
    {
      "width": "15%",
      "data": function( d ){
        return '<p style="font-size: .9em">'+d.fecha_creacion+'</p>';
      }
    },

    {
      "width": "15%",
      "data": function( d ){
        return '<p style="font-size: .9em">$ '+formatMoney(d.monto)+'</p>';
      }
    },

    {
      "width": "15%",
      "data": function( d ){
        return '<p style="font-size: .9em"><b>ABONADO</b></p>';
      }
    },

 

    ],
    "ajax": {
      "url": url2 + "Conductor/ver_mis_recargas",
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


     $( ".agregar_nueva" ).click(function() {
      // id_usuario = $(this).val();

      $("#modal_nueva .modal-body").html("");
      $("#modal_nueva .modal-body").append('<div class="row"><div class="col-md-12">');
      $("#modal_nueva .modal-body").append('<br><div class="row"><div class="col-md-12"><center>'
            +'<input type="submit" class="btn btn-success" style="margin-right:15px;" value="GUARDAR CAMBIOS"></center>'
            +'</div></div>');

       
    $("#modal_nueva").modal();


});





$(".myselect").select2();
$("#selectCliente").ready(function(){
$("#selectCliente").append('<option value="">Seleccione un cliente</option>');
$.getJSON( url2 + "Admin/lista_cond").done( function( data ){
 $.each( data, function(i, v){
     $("#selectCliente").append('<option value="'+v.id_cliente+'" data-value="'+v.id_cobro+'">'+v.nombre+'</option>');
 });
});
});





</script>