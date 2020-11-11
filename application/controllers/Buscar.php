<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$respuesta=false;
$msj="Ha ocurrido un error en el proceso, reportarlo por favor";
$contenido='';
$data=array();
$idregistro = (isset($_POST["idregistro"])?$_POST["idregistro"]:0);

class Buscar extends CI_Controller {

public function index(){
  	$this->load->view('buscar_viaje_publico');
  }

    public function trae_viajes(){
        global $respuesta,$msj,$contenido,$data,$idregistro;
        $i=0;
        $filtro="";
        if(isset($_POST["origen"]) && $_POST["origen"]!='')
            $filtro.="and (v.origen like '%$_POST[origen]%' or e.direccion like '%$_POST[origen]%')";
        if(isset($_POST["destino"]) && $_POST["destino"]!='')
            $filtro.="and (v.destino like '%$_POST[destino]%' or e.direccion like '%$_POST[origen]%')";
        if(isset($_POST["fecha"]) && $_POST["fecha"]!='')
            $filtro.="and v.fechaviaje = '$_POST[fecha]'";
        if(isset($_POST["hora"]) && $_POST["hora"]!='')
            $filtro.="and v.hora = '$_POST[hora]'";
        $sql="SELECT DISTINCT v.*,c.nombre,c.apellidopa,c.apellidoma,c.foto_perfil FROM viajes v JOIN usuarios c ON c.id_usuario=v.id_conductor left JOIN escalas e ON v.id_viaje=e.idviaje "
                . "WHERE v.fechaviaje<= CURDATE() $filtro ORDER BY v.fechaviaje,v.hora DESC;";
        $viajes = $this->db->query($sql);
        foreach ($viajes->result() as $fila){
            $contenido.= '
                <div class="col-3 col-sm-3 col-md-3 align-items">
                <div class="card bg-light">

                <div class="card-header text-muted border-bottom-0">
                VIAJES COTTON BALL
                </div>


                <div class="row">
                  
                  <div class="col-12 col-sm-12 col-md-12">
                  <span class="text-muted text-sm"><b>Origen: </b>'.$fila->origen.'</span><br>
                  <span class="text-muted text-sm"><b>Destino: </b>'.$fila->destino.'</span>
                  </div>

                  <div class="col-12 col-sm-12 col-md-12">
                  <span class="text-muted text-sm"><b>Plazas: </b>'.$fila->pasajeros.'</span><br>
                  <span class="text-muted text-sm"><b>Fecha: </b>'.$fila->fechaviaje.'</span><br>
                  <span class="text-muted text-sm"><b>Horario: </b>'.$fila->hora.'</span><br><br>
                  <span class="text-muted text-sm"><b>Vehículo: </b>TOYOTA</span>
                  </div>

                  <div class="col-12 col-sm-12 col-md-12">
                  <center> <img src="../dist/img/'.$fila->foto_perfil.'" alt="" class="img-circle img-fluid"/></center>
                  </div>

                </div>
                </div>

                <div class="card-footer" style="background: #CFCFCF;">
                <div class="text-right">
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalmarcadores" onclick="rutas('.$i.')">Ruta</button>
                </div>
                </div>
            


         


          </div>
          <script type="text/javascript">
          i++;
          viajes.push('. json_encode($fila).');
          </script>';
            $i++;
        }
        $respuesta=true;
        $data=array('respuesta'=>$respuesta,'contenido'=>$contenido,'msj'=>$msj.$sql,"data"=> json_encode($data));
        echo json_encode($data, JSON_PRETTY_PRINT);
    }
 
  
}