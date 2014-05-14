<?php 
 	class Crud_model_area extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    //vamos a cargar todos los empleado
    public function get_areas()
    {
        $sql = $this->db->get('cat_area');
        return $sql->result();
    }
    //agregamos un empleado
    public function agregar_area($id_sucursal, $nombre_area)
    {
        $this->db->insert('cat_area',array(
            'id_sucursal'        => $id_sucursal,
            'nombre_area'        => $nombre_area
        ));
    }
    //actualizamos los datos de un empleado por id
    public function actualizar_area($id_sucursal, $nombre_area)
    {
        $this->db->where('id_area', $id_area);
        $this->db->update('cat_area',array(
            'id_sucursal'        => $id_sucursal,
            'nombre_area'        => $nombre_area
        ));
    }
    //eliminamos un empleado por id
    public function eliminar_area($id_area)
    {
        $this->db->delete('cat_area', array('id_area' => $id_area));
    }
    //Obtenemos los datos de un empleado por id
    public function get_area($id_area)
    {
        $sql = $this->db->get_where('cat_area',array('id_area'=>$id_area));
        if($sql->num_rows()==1)
        return $sql->row_array();
        else
        return false;
    }

    public function get_sucursales()
    {
        $sql = "SELECT id_sucursal, nombre_sucursal FROM cat_sucursal";
        $query = $this->db->query($sql);
        $data = array(); 
        if ($query->num_rows() > 0) {
        $data[""] = "Seleccione una Sucursal";
        foreach ($query->result_array() as $row) {
        $data[$row['id_sucursal']] = strtoupper($row['nombre_sucursal']); 
    }
        return $data;
    }
        return $data;
        $query->free_result();
}
}



?>