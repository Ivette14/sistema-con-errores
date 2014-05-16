<?php 
    class Crud_model_baja extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    //vamos a cargar todos los usuarios
    public function get_bajas()
    {
        $sql = $this->db->get('cat_activo_fijo', 'activado' !=  "0");
        return $sql->result();
    }
    //agregamos un usuario

    //eliminamos un usuario por id
    public function baja_activo($data){
      $this->db->insert('cat_baja', $data);
        return $this->db->insert_id();

    }
    //Obtenemos los datos de un usuario por id
   
}

?>