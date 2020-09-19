<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Conductor extends CI_Controller {

  public function __construct(){
    parent::__construct();
    if( $this->session->userdata("buscar") )
      redirect("Conductor", "refresh");
    else
      $this->load->model('Conductor_model');
  }

 
  // public function perfil(){
  //   $datos=array();
  //   $datos["usuario"]= $this->Embajador_model->getInformacionPerfil($this->session->userdata('inicio_sesion')["id_usuario"]); 
  //   $this->load->view('perfil_embajador',$datos);

  //   }


  public function publicar(){
        $this->load->view("publicar_view");
  }
    
    public function acciones_viaje(){
        global $respuesta,$msj,$contenido,$idregistro;
        
        if($_POST["accion"]=='ins'){
            $sql="INSERT into viajes(id_viaje, id_conductor, id_embajador, id_unidad, origen, destino, pasajeros, fechaviaje, coord_origen, coord_destino, "
                    . "hora, comentarios) values(?,?,?,?,?,?,?,?,?,?,?,?)";
        }else if($_POST["accion"]=='mod'){
            $sql="update ZonaEvento set Idevento=?,idzona=?,IdLugar=?, Nombre=?, numerado=?,idComision=?,grupo=?,color=?,status=?,nivelzona=?,Preven=?,Precio=?,aforo=?,idpuerta=?,"
                    . "BoletoZona=?,Venta =?"
                    . "where Idevento=$idregistro and idzona=$idzonault;";
        }
        $params=array($idregistro,"1","1","1",$_POST["origen"],$_POST["destino"],$_POST["plazas"],$_POST["fecha"],
            $_POST["coord_origen"],$_POST["coord_destino"],$_POST["hora"],$_POST["desc_viaje"]);
        $query = $this->db->query($sql,$params);
        if($query){
            $respuesta=true;
            if($_POST["accion"]=='ins')
                $msj='Se ha registrado su viaje correctamente';
            else if($_POST["accion"]=='mod')
                $msj='Se ha actualizado su viaje correctamente';
        }
        $data=array('respuesta'=>$respuesta,'contenido'=>$contenido,'msj'=>$msj);
        echo json_encode($data);
    }
 

 

 
}
