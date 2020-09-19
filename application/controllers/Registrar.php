<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrar extends CI_Controller {

  public function __construct(){
    parent::__construct();
    if( $this->session->userdata("buscar") )
      redirect("Registrar", "refresh");
    else
      $this->load->model('Registrar_model');
  }


  public function index(){
  	$this->load->view('vista_registro');
  }

  public function send_data_register(){


    if($this->input->post("nombre")){


	    date_default_timezone_set('America/Mexico_City');

      $this->db->trans_start();
 
     $data = array(
       "nombre"=>$this->input->post("nombre"),  
       "apellidopa"=>$this->input->post("apellido_paterno"),
       "apellidoma"=>$this->input->post("apellido_materno"),
       "celular"=>$this->input->post("celular"),
       "email"=>$this->input->post("correo"), 
       "usuario"=>$this->input->post("usuario"),
       "contrasena"=>$this->input->post("contrasena"), 
        "perfil" => '4',
       "status"=>'1'
      );

      

     // print_r($data);

      


  echo json_encode($this->db->insert("usuarios",$data));
 }

 else{

  echo json_encode(false);
 }
}

 
  
}
