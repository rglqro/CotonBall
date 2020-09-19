<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Embajador extends CI_Controller {

  public function __construct(){
    parent::__construct();
    if( $this->session->userdata("buscar") )
      redirect("Embajador", "refresh");
    else
      $this->load->model('Embajador_model');
  }

 
  public function perfil(){
    $datos=array();
    $datos["usuario"]= $this->Embajador_model->getInformacionPerfil($this->session->userdata('inicio_sesion')["id_usuario"]); 
    $this->load->view('perfil_embajador',$datos);

    }


    


   public function pagos(){
    $this->load->view('pagos_embajador');
  }

     public function gestiones(){
       $datos=array();
       // $datos["viajes_gestionar"]= $this->Embajador_model->getListViajesTodos(); 
      $datos['viajes_gestionar'] = json_decode( json_encode( $this->Embajador_model->getListViajesTodos()->result_array()));            

       $this->load->view('gestiones_embajador',$datos);
  }

       public function mensajes(){
    $this->load->view('mensajes_embajador');
  }

       public function planes(){
    $this->load->view('planes_view');
  }

 
  public function conversaciones_embajador(){
    echo json_encode(  $this->Embajador_model->get_conversations()->result_array() );
  }


    public function conversaciones_usuario($valor){
    echo json_encode( $this->Embajador_model->get_conversations_chat($valor)->result_array() );
  }


     public function datos_conductor_viaje($valor){
    echo json_encode( $this->Embajador_model->get_driver_new_chat($valor)->result_array() );
  }



 
 
  public function ver_pagos_embajador(){
    $this->load->model("Embajador_model");
    $data =  $this->Embajador_model->get_pagos()->result_array();
    echo json_encode( array( "data" => $data ));
  }


 

function send_info(){
  $respuesta = array( FALSE );
  if($this->input->post("message")){
     $return_recibe =  $this->input->post("recibe");
     $respuesta = array( $this->Embajador_model->nuevo_mensaje( $this->input->post("message"), $this->input->post("recibe") ));
     $ultimoId = $this->db->insert_id();
     $consulta_id = $this->db->query("SELECT usuario_recibe FROM chat_mensajes WHERE id_chat = ".$ultimoId.""); 
     $new_id = $consulta_id->row()->usuario_recibe;

}
     $arr = array('res'=> $respuesta,'key'=> $new_id);  

  echo json_encode($arr);
}





///////////

function subir_foto(){
 $respuesta = array( FALSE );

$config = [
  'upload_path' =>'./data/dist/img',  //carpeta donde se guarda
  'allowed_types' =>'png|jpg' //tipo de imagen que quiero aceptar
];


$this->load->library('upload', $config);

if($this->upload->do_upload('foto_perfil')){

$data = array('upload_data' => $this->upload->data());

$foto_data = $data['upload_data']['file_name'];
// echo $foto_data;




$respuesta = $this->Embajador_model->subir_foto($foto_data);

}
else
{
echo false;
}

 echo json_encode( $respuesta );



}





  




    

 
}
