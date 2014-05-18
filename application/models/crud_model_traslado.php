<?php 
 	class Crud_model_traslado extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    //vamos a cargar todos los empleado
    public function get_traslados()
    {
        $sql = $this->db->get('cat_trasladoaf');
        return $sql->result();
    }
    //agregamos un empleado
    public function agregar_traslado( $codigo_traslado, $id_activofijo, $motivo_traslado, $fecha_traslado, $id_sucursal, $id_sucursal_r)
    {
        $this->db->insert('cat_trasladoaf',array(
            'codigo_traslado'       => $codigo_traslado,
            'id_activofijo'         => $id_activofijo,
            'motivo_traslado'       => $motivo_traslado,
            'fecha_traslado'        => $fecha_traslado,            
            'id_sucursal'           => $id_sucursal,
            'id_sucursal_r'         => $id_sucursal_r
        ));
    }
    //actualizamos los datos de un empleado por id
    public function actualizar_traslado($codigo_traslado, $codigo_activo, $motivo_traslado, $fecha_traslado, $solicitud_traslado, $id_sucursal, $id_sucursal)
    {
        $this->db->where('id_traslado_activo', $id_traslado_activo);
        $this->db->update('cat_trasladoaf',array(
            'codigo_traslado'       => $codigo_traslado,
            'codigo_activo'         => $codigo_activo,
            'motivo_traslado'       => $motivo_traslado,
            'fecha_traslado'        => $fecha_traslado,
            'solicitud_traslado'    => $solicitud_traslado,
            'id_sucursal'           => $id_sucursal,
            'id_sucursal'           => $id_sucursal
        ));
    }
    //eliminamos un empleado por id
    public function eliminar_traslado($id_traslado_activo)
    {
        $this->db->delete('cat_trasladoaf', array('id_traslado_activo' => $id_traslado_activo));
    }
    //Obtenemos los datos de un empleado por id
    public function get_traslado($id_traslado_activo)
    {
        $sql = $this->db->get_where('cat_trasladoaf',array('id_traslado_activo'=>$id_traslado_activo));
        if($sql->num_rows()==1)
        return $sql->row_array();
        else
        return false;
    }

    public function sucur()
    {
        $this->db->order_by('nombre_sucursal','asc');
        $sucursal = $this->db->get('cat_sucursal');
        if($sucursal->num_rows()>0)
        {
            return $sucursal->result();
        }
    }

    public function tabla()
    {        
       $query = $this->db->query('SELECT cat_sucursal.nombre_sucursal, cat_trasladoaf.id_traslado_activo, cat_trasladoaf.codigo_traslado,
                                            cat_trasladoaf.motivo_traslado, cat_trasladoaf.fecha_traslado
                                    FROM cat_trasladoaf
                                     INNER JOIN cat_sucursal ON cat_sucursal.id_sucursal = cat_trasladoaf.id_sucursal');
       return $query->result();    
    }
}

?>