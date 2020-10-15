<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Conductor_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

 
    function get_pagos(){
        return $this->db->query("SELECT p.id_pago, v.fechaviaje, v.origen, v.destino, cd.nombre, cd.apellidopa, cd.apellidoma, v.pasajeros, p.cantidad, oc.descripcion as estatuspago FROM pagos p INNER JOIN viajes v ON v.id_viaje = p.id_viaje INNER JOIN usuarios cd ON cd.id_usuario =v.id_conductor INNER JOIN opciones_catalogo oc ON oc.id_opcion = p.estatus_pago WHERE oc.id_catalogo = 2 AND v.id_embajador =".$this->session->userdata('inicio_sesion')["id_usuario"]."");
    }


      function ver_mis_recargas(){
       return $this->db->query("SELECT r.id_recarga, CONCAT(u.nombre,' ', u.apellidopa,' ', u.apellidoma) AS conductor, r.estatus, r.monto, r.fecha_creacion
        	FROM recargas r
        	INNER JOIN usuarios u ON u.id_usuario = r.id_usuario");

        // return $query->result();
    }

 
 	
}