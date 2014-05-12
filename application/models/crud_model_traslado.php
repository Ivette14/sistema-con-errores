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
    public function agregar_traslado($codigo_traslado, $codigo_activo, $motivo_traslado, $fecha_traslado, $solicitud_traslado, $emisor_traslado, $receptor_traslado)
    {
        $this->db->insert('cat_trasladoaf',array(
            'codigo_traslado'       => $codigo_traslado,
            'codigo_activo'         => $codigo_activo,
            'motivo_traslado'       => $motivo_traslado,
            'fecha_traslado'        => $fecha_traslado,
            'solicitud_traslado'    => $solicitud_traslado,
            'emisor_traslado'       => $emisor_traslado,
            'receptor_traslado'     => $receptor_traslado
        ));
    }
    //actualizamos los datos de un empleado por id
    public function actualizar_traslado($codigo_traslado, $codigo_activo, $motivo_traslado, $fecha_traslado, $solicitud_traslado, $emisor_traslado, $receptor_traslado)
    {
        $this->db->where('id_traslado_activo', $id_traslado_activo);
        $this->db->update('cat_trasladoaf',array(
            'codigo_traslado'       => $codigo_traslado,
            'codigo_activo'         => $codigo_activo,
            'motivo_traslado'       => $motivo_traslado,
            'fecha_traslado'        => $fecha_traslado,
            'solicitud_traslado'    => $solicitud_traslado,
            'emisor_traslado'       => $emisor_traslado,
            'receptor_traslado'     => $receptor_traslado
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
}

?>