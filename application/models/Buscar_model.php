<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Buscar_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	 function getInformacionPerfil(){
        $query =  $this->db->query("SELECT u.id_usuario, u.nombre, u.apellidopa, u.apellidoma, u.celular, u.email, u.fecha_creacion, u.direccion, u.foto_perfil, u.acerca, oc.descripcion, oc.id_opcion FROM usuarios u INNER JOIN opciones_catalogo oc ON u.tipo_usuario = oc.id_opcion WHERE u.id_usuario = ".$this->session->userdata('inicio_sesion')["id_usuario"]." AND oc.id_catalogo = 3");

        return $query->result();
    }
 
    function get_pagos(){
        return $this->db->query("SELECT p.id_pago, v.fechaviaje, v.origen, v.destino, cd.nombre, cd.apellidopa, cd.apellidoma, v.pasajeros, p.cantidad, oc.descripcion as estatuspago FROM pagos p INNER JOIN viajes v ON v.id_viaje = p.id_viaje INNER JOIN usuarios cd ON cd.id_usuario =v.id_conductor INNER JOIN opciones_catalogo oc ON oc.id_opcion = p.estatus_pago WHERE oc.id_catalogo = 2 AND v.id_embajador =".$this->session->userdata('inicio_sesion')["id_usuario"]."");
    }

     function subir_foto($value_photo){
        return $this->db->query("UPDATE usuarios SET foto_perfil = '".$value_photo."' WHERE id_usuario = ".$this->session->userdata('inicio_sesion')["id_usuario"]."");
}
 
 	
}