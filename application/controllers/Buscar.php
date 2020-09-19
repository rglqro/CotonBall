<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buscar extends CI_Controller {

  public function __construct(){
    parent::__construct();
    if( $this->session->userdata("buscar") )
      redirect("Buscar", "refresh");
    else
      $this->load->model('Buscar_model');
  }


  public function index(){
  	$this->load->view('buscar_viaje_publico');
  }

   

 
  
}
