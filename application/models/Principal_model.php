<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Principal_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function lista_origen(){
        return $this->db->query("SELECT origen as nombre FROM viajes ORDER BY nombre");
    }

    	function lista_destino($date_origen){
        return $this->db->query("SELECT destino as nombre FROM viajes WHERE origen LIKE '%".$date_origen."%' ORDER BY nombre");
    }
 
	
}