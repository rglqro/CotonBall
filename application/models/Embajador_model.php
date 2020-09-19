<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Embajador_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	 function getInformacionPerfil(){
        $query =  $this->db->query("SELECT u.id_usuario, u.nombre, u.apellidopa, u.apellidoma, u.celular, u.email, u.fecha_creacion, u.direccion, u.acerca, oc.descripcion, oc.id_opcion, u.foto_perfil FROM usuarios u INNER JOIN opciones_catalogo oc ON u.tipo_usuario = oc.id_opcion WHERE u.id_usuario = ".$this->session->userdata('inicio_sesion')["id_usuario"]." AND oc.id_catalogo = 3");

        return $query->result();
    }
 
    function get_pagos(){
        return $this->db->query("SELECT p.id_pago, v.fechaviaje, v.origen, v.destino, cd.nombre, cd.apellidopa, cd.apellidoma, v.pasajeros, p.cantidad, oc.descripcion as estatuspago FROM pagos p INNER JOIN viajes v ON v.id_viaje = p.id_viaje INNER JOIN usuarios cd ON cd.id_usuario =v.id_conductor INNER JOIN opciones_catalogo oc ON oc.id_opcion = p.estatus_pago WHERE oc.id_catalogo = 2 AND v.id_embajador =".$this->session->userdata('inicio_sesion')["id_usuario"]."");
    }


    function get_conversations(){
        return $this->db->query("(SELECT us.id_usuario, CONCAT(UCASE(us.nombre),' ', UCASE(us.apellidopa)) AS nombre_chat, UCASE(oc.descripcion) as perfil
            FROM chat_embajador_socio ces 
            INNER JOIN usuarios u on u.id_usuario = ces.id_embajador 
            INNER JOIN usuarios us on us.id_usuario = ces.id_usuario 
            INNER JOIN opciones_catalogo oc ON oc.id_opcion = us.perfil
            INNER JOIN catalogos cat ON cat.id_catalogo = oc.id_catalogo
            WHERE ces.id_embajador = 1 AND cat.id_catalogo = ".$this->session->userdata('inicio_sesion')["id_usuario"].")
            UNION
            (SELECT us.id_usuario, CONCAT(UCASE(us.nombre),' ', UCASE(us.apellidopa)) AS nombre_chat, UCASE(oc.descripcion) as perfil
            FROM chat_embajador_viajero cev 
            INNER JOIN usuarios u on u.id_usuario = cev.id_embajador 
            INNER JOIN usuarios us on us.id_usuario = cev.id_usuario 
            INNER JOIN opciones_catalogo oc ON oc.id_opcion = us.perfil
            INNER JOIN catalogos cat ON cat.id_catalogo = oc.id_catalogo
            WHERE cev.id_embajador = 1 AND cat.id_catalogo = ".$this->session->userdata('inicio_sesion')["id_usuario"].")");
    }

    function get_conversations_chat($valor_other){
        return $this->db->query("SELECT IF(chm.usuario_envia = ".$this->session->userdata('inicio_sesion')["id_usuario"].", 1, 0) AS send_value, chm.observacion, chm.fecha_creacion, CONCAT(envia.nombre,' ',envia.apellidopa,' ',envia.apellidoma) name_envia, envia.url FROM chat_mensajes chm  INNER JOIN usuarios envia ON envia.id_usuario = chm.usuario_envia WHERE chm.usuario_envia in (".$this->session->userdata('inicio_sesion')["id_usuario"].",".$valor_other.") AND chm.usuario_recibe in (".$this->session->userdata('inicio_sesion')["id_usuario"].",".$valor_other.") ORDER BY chm.fecha_creacion ASC");
    }


   function nuevo_mensaje($mensaje, $destino) {
     return $this->db->query("INSERT INTO chat_mensajes(usuario_envia, usuario_recibe, observacion, fecha_creacion) VALUES (".$this->session->userdata('inicio_sesion')["id_usuario"].", ".$destino.", '".$mensaje."', NOW())");


   
  }

  ///////////7


       function subir_foto($value_photo){
        return $this->db->query("UPDATE usuarios SET foto_perfil = '".$value_photo."' WHERE id_usuario = ".$this->session->userdata('inicio_sesion')["id_usuario"]."");
}




    
 
 	
}