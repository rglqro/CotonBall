<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restablecer extends CI_Controller {

  public function __construct(){
    parent::__construct();
    if( $this->session->userdata("buscar") )
      redirect("Registrar", "refresh");
    else
      $this->load->model('Restablecer_model');
  }


  public function index(){
  	$this->load->view('vista_restablecer');
  }

 

public function send_data_user(){
 $respuesta = array( FALSE );


if($this->input->post("correo_restablecer")){

$data_mail = $this->input->post("correo_restablecer");

$respuesta = $this->Restablecer_model->subir_solicitud($data_mail);

}
else
{
echo false;
}

 echo json_encode( $respuesta );

}



 
  
}
