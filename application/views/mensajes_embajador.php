
<?php
    require("head.php");
    require("menu.php");
?>  
<style type="text/css">
  ul{
    list-style:none;
  }

    li{
    list-style:none;
  }

  .conversaciones_completa
  {
   /* max-height: 100px;
    width: 400px;*/
    background-color: antiquewhite;            
    /*margin: 10px;*/
    overflow-y: scroll;
  }

</style>
 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
   
 
        </div>
      </div><!-- /.container-fluid -->
    </section>

  <!-- Main content -->


    
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
          <a href="compose.html" class="btn btn-primary btn-block mb-3">MIS MENSAJES</a>

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Chats</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
              </div>
            </div>


            <div class="hola_kel"></div>
            <div class="card-body p-0 div_conversaciones">
              
            </div>
            <!-- /.card-body -->
          </div>
 
          <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          
          <div class="col-md-12">
            <!-- DIRECT CHAT SUCCESS -->
            <div class="card card-sucress cardutline direct-chat direct-chat-success">
              <div class="card-header">
                <h3 class="card-title valor_titulo"></h3>

                <div class="card-tools">
                   <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                   <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="far fa-trash-alt"></i></button>
                   <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-ban"></i></button>
                   <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-phone"></i></button>
 
                </div>
              </div>


              <div class="card-body">
                <div class="direct-chat-messages conversaciones_completa"></div>
              </div>

              <div class="card-footer">
                <form method="post" id="form_chat">

                  <div class="receptor"></div> 
                  

                  <div class="input-group">
                    <input type="text" name="message" placeholder="Escribe un mensaje ..." class="form-control" 
                    pattern="[A-Za-z]{3,100}"/>
                    <span class="input-group-append">
                      <button type="submit" class="btn btn-success">ENVIAR</button>
                    </span>
                  </div>
                </form>
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
var urlimg = "<?=base_url()?>dist/img/";

$(document).ready(function(){
  $.getJSON(url + "index.php/Embajador/conversaciones_embajador").done( function( data ){
    $(".div_conversaciones").append('<div class="row">');

    $.each( data, function( i, v){

      $(".div_conversaciones").append('<div class="col-md-12"><button class="btn btn-info traer_conversacion" value="'+v.id_usuario+'" title="VER CONVERSACIÓN" style="background:none; border-color:none; border:none;"><i class="fas fa-comment" style="color:#FFB397;"></i>&nbsp;&nbsp;<b style="color:gray;">'+v.nombre_chat+'</b><label style="font-size:10px; color:gray;"> - '+v.perfil+'</label></button> </div><br>');
    });

    $(".div_conversaciones").append('</div>');
  });
});


$(document).on('click', '.traer_conversacion', function(e) {

  $(".conversaciones_completa").html('');
    $(".receptor").html('');

    $other = $(this).val();
    $(".receptor").append('<input type="hidden" name="recibe" value="'+$other+'">');
 
    $.getJSON(url + "index.php/Embajador/conversaciones_usuario/"+$other ).done( function( data ){
    $(".valor_titulo").append("CONVERSACIÓN");


    $(".conversaciones_completa").append('<div class="row">');
    $.each( data, function( i, v){

 
      if(v.send_value == 0){
         $(".conversaciones_completa").append("<div class='direct-chat-msg'><img class='direct-chat-img' src='"+urlimg+v.url+"'><div class='direct-chat-text'><b style='font-size:1em;'>"+v.observacion+"</b><div class='direct-chat-infos clearfix'><span class='direct-chat-timestamp float-left' style='font-size:0.8em;'><b>"+v.name_envia+"</b><br>"+v.fecha_creacion+"</span></div></div></div>");
      }
      else{

        $(".conversaciones_completa").append("<div class='direct-chat-msg right'><img class='direct-chat-img' src='"+urlimg+v.url+"'><div class='direct-chat-text' style='background:#FF7F50; border-color:#FF7F50;' ><b style='font-size:1em;'>"+v.observacion+"</b><div class='direct-chat-infos clearfix'><span class='direct-chat-timestamp float-left' style='font-size:0.8em;'><b>"+v.name_envia+"</b><br>"+v.fecha_creacion+"</span></div></div></div>");
      }

    });

    $(".conversaciones_completa").append('</div>');
    $('.conversaciones_completa').scrollTop( $('.conversaciones_completa').prop('scrollHeight') );  

  });

});




    $("#form_chat").submit( function(e) {
        e.preventDefault();
    }).validate({
        submitHandler: function( form ) {

            var data = new FormData( $(form)[0] );
            // data.append("id_comision", id_comision);

            $.ajax({
                url: url2 + "Embajador/send_info",
                data: data,
                cache: false,
                contentType: false,
                processData: false,
                dataType: 'json',
                method: 'POST',
                    type: 'POST', // For jQuery < 1.9
                    success: function(data){
                        if(data.res){
                          alert("SE PAUSO CORRECTAMENTE LA SOLICITUD");

                          // console.log(data.res); // overflow 
                          // console.log(data.key); // value 

  

$(document).ready(function(){

  $(".conversaciones_completa").html('');
    $(".receptor").html('');

   
    $(".receptor").append('<input type="hidden" name="recibe" value="'+data.key+'">');
 
    $.getJSON(url + "index.php/Embajador/conversaciones_usuario/"+data.key).done( function( data ){
    $(".valor_titulo").append("CONVERSACIÓN");


    $(".conversaciones_completa").append('<div class="row">');
    $.each( data, function( i, v){

 
      if(v.send_value == 0){
         $(".conversaciones_completa").append("<div class='direct-chat-msg'><img class='direct-chat-img' src='"+urlimg+v.url+"'><div class='direct-chat-text'><b style='font-size:1em;'>"+v.observacion+"</b><div class='direct-chat-infos clearfix'><span class='direct-chat-timestamp float-left' style='font-size:0.8em;'><b>"+v.name_envia+"</b><br>"+v.fecha_creacion+"</span></div></div></div>");
      }
      else{

        $(".conversaciones_completa").append("<div class='direct-chat-msg right'><img class='direct-chat-img' src='"+urlimg+v.url+"'><div class='direct-chat-text' style='background:#FF7F50; border-color:#FF7F50;' ><b style='font-size:1em;'>"+v.observacion+"</b><div class='direct-chat-infos clearfix'><span class='direct-chat-timestamp float-left' style='font-size:0.8em;'><b>"+v.name_envia+"</b><br>"+v.fecha_creacion+"</span></div></div></div>");
      }

    });

    $(".conversaciones_completa").append('</div>');
    $('.conversaciones_completa').scrollTop( $('.conversaciones_completa').prop('scrollHeight') );  

  });

});
                        }else{
                          alert("NO SE HA PODIDO COMPLETAR LA SOLICITUD");
                        }
                    },error: function( ){
                        alert("ERROR EN EL SISTEMA");
                    }
                });
          }
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


</script>

 