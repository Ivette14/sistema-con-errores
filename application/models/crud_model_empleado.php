<?php 
 	class Crud_model_empleado extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    //vamos a cargar todos los empleado
    public function get_empleados()
    {
        $sql = $this->db->get('cat_empleado');
        return $sql->result();
    }
    //agregamos un empleado
    public function agregar_empleado($id_sucursal, $nombre_empleado, $direccion_empleado, $telefono_empleado, $email_empleado)
    {
        $this->db->insert('cat_empleado',array(
            'id_sucursal'        => $id_sucursal,
            'nombre_empleado'    => $nombre_empleado,
            'direccion_empleado' => $direccion_empleado,
            'telefono_empleado'  => $telefono_empleado,
            'email_empleado'     => $email_empleado
        ));
    }
    //actualizamos los datos de un empleado por id
    public function actualizar_empleado($id_sucursal, $nombre_empleado, $direccion_empleado, $telefono_empleado, $email_empleado)
    {
        $this->db->where('id_empleado', $id_empleado);
        $this->db->update('cat_empleado',array(
            'id_sucursal'        => $id_sucursal,
            'nombre_empleado'    => $nombre_empleado,
            'direccion_empleado' => $direccion_empleado,
            'telefono_empleado'  => $telefono_empleado,
            'email_empleado'     => $email_empleado
        ));
    }
    //eliminamos un empleado por id
    public function eliminar_empleado($id_empleado)
    {
        $this->db->delete('cat_empleado', array('id_empleado' => $id_empleado));
    }
    //Obtenemos los datos de un empleado por id
    public function get_empleado($id_empleado)
    {
        $sql = $this->db->get_where('cat_empleado',array('id_empleado'=>$id_empleado));
        if($sql->num_rows()==1)
        return $sql->row_array();
        else
        return false;
    }

    function get_sucursales(){

    // armamos la consulta
    $query = $this->db-> query('SELECT id_sucursal,nombre_sucursal FROM cat_sucursal');

    // si hay resultados
    if ($query->num_rows() > 0) {
        // almacenamos en una matriz bidimensional
        foreach($query->result() as $row)
           $arrDatos[htmlspecialchars($row->id_sucursal, ENT_QUOTES)] = 
            htmlspecialchars($row->nombre_sucursal, ENT_QUOTES);

        $query->free_result();
        return $arrDatos;
     }
}
}

?>