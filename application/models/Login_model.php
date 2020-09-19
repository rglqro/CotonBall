<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model {

    function __construct(){
        parent::__construct();
    }
 

    function verificar_usuario(){
      $usuario = $this->input->post("usuario");
        $password = $this->input->post("contrasena");
     

        $query = $this->db->query("SELECT * FROM usuarios WHERE usuarios.usuario  = '$usuario' AND usuarios.contrasena = '$password' AND usuarios.status = 1");
    
         if($query->num_rows() > 0){

            $this->session->set_userdata("inicio_sesion",array(
                "id_usuario" => $query->row()->id_usuario,
                "nombre" => $query->row()->nombre,
                "apellidopa" => $query->row()->apellidopa,
                "apellidoma" => $query->row()->apellidoma,
                "usuario" => $query->row()->usuario,
                "contrasena" => $query->row()->contrasena,
                "perfil" => $query->row()->perfil, 
                "foto_perfil" => $query->row()->foto_perfil
            ));
         }else{

            $this->session->set_flashdata('error_usuario', '<div class="alert alert-danger text-danger" role="alert"><strong>¡ERROR!</strong> no se ha registrado. </div>');
         }
    }
}
