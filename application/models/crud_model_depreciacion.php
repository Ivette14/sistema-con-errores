<?php 
 	class Crud_model_depreciacion extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
  public function get_activos()
    {    $query = $this->db->query('SELECT * FROM `cat_activo_fijo` WHERE `activado` = 1;');
       return $query->result();
    }
    //agregamos un usuario
    public function agregar_sucursal($nombre_sucursal,$telefono_sucursal,$direccion_sucursal,$departamento)
    {
        $this->db->insert('cat_sucursal',array(
            'nombre_sucursal'   => $nombre_sucursal,
            'telefono_sucursal' => $telefono_sucursal,
            'direccion_sucursal'=> $direccion_sucursal,
            'departamento'      => $departamento
        ));
    }
    //actualizamos los datos de un usuario por id
    public function actualizar_sucursal($id_sucursal,$nombre_sucursal,$telefono_sucursal,$direccion_sucursal,$departamento)
    {
        $this->db->where('id_sucursal', $id_sucursal);
        $this->db->update('cat_sucursal',array(
            'nombre_sucursal'   => $nombre_sucursal,
            'telefono_sucursal' => $telefono_sucursal,
            'direccion_sucursal'=> $direccion_sucursal,
            'departamento'      => $departamento
        ));
    }
   
    //Obtenemos los datos de un usuario por id
  public function get_activo($id_activofijo)
    {
        $sql = $this->db->get_where('cat_activo_fijo',array('id_activofijo'=>$id_activofijo));
        if($sql->num_rows()==1)
        return $sql->row_array();
        else
        return false;
    }
}

?>