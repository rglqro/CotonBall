<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model {

    function __construct(){
        parent::__construct();
    }
 

    function verificar_usuario(){
      $usuario = $this->input->post("usuario");
        $password = $this->input->post("contrasena");
     

        $query = $this->db->query("SELECT us.id_usuario, us.nombre, us.apellidopa, us.apellidoma, us.usuario, us.contrasena, oc.descripcion, us.perfil, us.foto_perfil FROM usuarios us INNER JOIN opciones_catalogo oc ON oc.id_opcion = us.perfil WHERE oc.id_catalogo = 1 AND us.usuario  = '$usuario' AND us.contrasena = '$password' AND us.status = 1");
    
         if($query->num_rows() > 0){

            $this->session->set_userdata("inicio_sesion",array(
                "id_usuario" => $query->row()->id_usuario,
                "nombre" => $query->row()->nombre,
                "apellidopa" => $query->row()->apellidopa,
                "apellidoma" => $query->row()->apellidoma,
                "usuario" => $query->row()->usuario,
                "contrasena" => $query->row()->contrasena,
                "descripcion" => $query->row()->descripcion,
                "perfil" => $query->row()->perfil,
                "foto_perfil" => $query->row()->foto_perfil
            ));
         }else{

            $this->session->set_flashdata('error_usuario', '<div class="alert alert-danger text-danger" role="alert"><strong>¡ERROR!</strong> no se ha registrado. </div>');
         }
    }
}
// SELECT * FROM usuarios us INNER JOIN opciones_catalogo oc ON oc.id_opcion = us.perfil WHERE oc.id_catalogo = 1
