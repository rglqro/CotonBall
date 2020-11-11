<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$respuesta=false;
$msj="Ha ocurrido un error en el proceso, reportarlo por favor";
$contenido='';
$data=array();
$idregistro = (isset($_POST["idregistro"])?$_POST["idregistro"]:0);

class Administrador extends CI_Controller {

  public function __construct(){
    parent::__construct();
    if( $this->session->userdata("buscar") )
      redirect("Conductor", "refresh");
    else
      $this->load->model('Conductor_model');
  }

 
  // public function perfil(){
  //   $datos=array();
  //   $datos["usuario"]= $this->Conductor_model->getInformacionPerfil($this->session->userdata('inicio_sesion')["id_usuario"]); 
  //   $this->load->view('perfil_embajador',$datos);

  //   }

    public function publfrecargaicar(){
        $squ="select * from unidades;";
        $sql="select * from usuarios where perfil=2;"; 
        $query0 = $this->db->query($squ);
        $query1 = $this->db->query($sql);
        $this->load->view("publicar_view",array('conductores'=>$query1, 'unidades'=>$query0));
    }

    // public function viajes(){
    //     $sql="SELECT v.*,c.nombre,c.apellidopa,c.apellidoma,c.foto_perfil, u.modelo FROM viajes v JOIN usuarios c ON c.id_usuario=v.id_conductor JOIN unidades u ON U.id_unidad = v.id_unidad WHERE v.status = 1 ORDER BY v.fechaviaje,v.hora DESC;";
    //     $query1 = $this->db->query($sql);
    //     $this->load->view("misviajes_view",array('viajes'=>$query1));
    // }
    
    public function getparadas_viaje(){
        global $respuesta,$msj,$contenido,$data,$idregistro;
        $sql="SELECT * from escalas where idviaje=$idregistro";
        $query=$this->db->query($sql);
        $i=0;
        if ($query->num_rows()>0){
            foreach ($query->result() as $row) {
                $data[$i]=array("direccion"=>$row->direccion,"coord"=>$row->coordenadas);
                $i++;
            }
            $respuesta=true;
        }
        $data=array('respuesta'=>$respuesta,'contenido'=>$contenido,'msj'=>$msj,"data"=> json_encode($data));
        echo json_encode($data, JSON_PRETTY_PRINT);
    }


    public function acciones_viaje(){
        global $respuesta,$msj,$contenido,$idregistro;
        
        if($_POST["accion"]=='ins'){
            $sql="INSERT into viajes(id_viaje, id_conductor, id_embajador, id_unidad, origen, destino, pasajeros, fechaviaje, coord_origen, coord_destino, "
                    . "hora, comentarios, status) values(?,?,?,?,?,?,?,?,?,?,?,?)";
        }else if($_POST["accion"]=='mod'){
            $sql="";
        }
        $params=array($idregistro,$_POST["conductor"],"1",$_POST["unidades"],$_POST["origen"],$_POST["destino"],$_POST["plazas"],$_POST["fecha"],
            $_POST["coord_origen"],$_POST["coord_destino"],$_POST["hora"],$_POST["desc_viaje"], "1");
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
 
    public function acciones_escalas(){
        global $respuesta,$msj,$contenido,$idregistro;
        
        if($_POST["accion"]=='ins'){
            $sql="INSERT into escalas(id_escala, direccion, coordenadas, idviaje) values(?,?,?,?);";
        }else if($_POST["accion"]=='mod'){
            $sql="";
        }
        $params=array($idregistro,$_POST["direccion"],$_POST["coord"],$_POST["id_viaje"]);
        $query = $this->db->query($sql,$params);
        if($query){
            $respuesta=true;
            if($_POST["accion"]=='ins')
                $msj='Se ha registrado su escala correctamente';
            else if($_POST["accion"]=='mod')
                $msj='Se ha actualizado su escala correctamente';
        }
        $data=array('respuesta'=>$respuesta,'contenido'=>$contenido,'msj'=>$msj);
        echo json_encode($data);
    }




    public function viajes(){
 
    $this->load->view('vista_recargas_admin');

    }


    public function recargas(){
 
    $this->load->view('vista_recargas_admin');

    }

       public function conductores(){
 
    $this->load->view('vista_admin_conductores');

    }

       public function embajadores(){
 
    $this->load->view('vista_admin_embajadores');

    }

    public function viajeros(){
 
    $this->load->view('vista_admin_embajadores');

    }

    public function restablecer(){
 
    $this->load->view('vista_admin_embajadores');

    }
 

  
    public function ver_mis_recargas(){
        $this->load->model("Conductor_model");
       $data = $this->Conductor_model->ver_mis_recargas()->result_array();
       echo json_encode( array( "data" => $data ));
     }

       public function ver_lista_conductores(){
        $this->load->model("Conductor_model");
       $data = $this->Conductor_model->ver_lista_conductores()->result_array();
       echo json_encode( array( "data" => $data ));
     }
    

       public function ver_lista_embajadores(){
        $this->load->model("Conductor_model");
       $data = $this->Conductor_model->ver_lista_embajadores()->result_array();
       echo json_encode( array( "data" => $data ));
     }
    
    


    // lista_cond



    

 
}
