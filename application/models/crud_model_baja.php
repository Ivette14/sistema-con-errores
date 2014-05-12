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
        $sql = $this->db->get('cat_activo_fijo');
        return $sql->result();
    }
    //agregamos un usuario

    //eliminamos un usuario por id
    public function baja_activo($data){
      $this->db->insert('cat_baja', $data);
        return $this->db->insert_id();

    }
    //Obtenemos los datos de un usuario por id
    public function get_baja($id_activofijo)
    {
        $sql = $this->db->get_where('cat_activo_fijo',array('id_activofijo'=>$id_cativofijo));
        if($sql->num_rows()==1)
        return $sql->row_array();
        else
        return false;
    }
}

?>