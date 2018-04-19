<?php 
Class Gestion_predial_model extends CI_Model{
	function __construct() {
        parent::__construct();
    }

    function cargar_predios($id = null)
    {
        if($id) $this->db->where("Pk_Id >", $id);
            
        $this->db
            ->select(
                array(
                    "p.*",
                    "CASE WHEN p.Requerido ='1' THEN 'Si' ELSE 'No' END Requerido",
                )
            )
            ->limit(25)
    		->order_by("Pk_Id")
        ;
     
        return  $this->db->get("predios p")->result();
    }
}
/* Fin del archivo Inicio_model.php */
/* Ubicación: ./application/models/Inicio_model.php */