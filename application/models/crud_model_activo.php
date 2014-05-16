<?php 
 	class Crud_model_activo extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    //vamos a cargar todos los datos de activo fijo 
    public function get_activos()
    {
        $sql = $this->db->get('cat_activo_fijo');
        return $sql->result();
    }
     //vamos a cargar todos los datos para Combobox

    //agregamos un activo
    public function agregar_activo($id_activofijo, $id_cuentacontable,$id_area, $id_sucursal, $id_empleado, $id_proveedor,$nombre_activo_fijo,$valor_original,
     $estado,$fecha_compra,$fecha_ingreso,$fecha_inicio_uso,$descripcion,
     $importe_depreciable,$vida_util,$valor_residual,$tipo_valor,$cuota_anual,$cuota_mensual) 
    {
        $this->db->insert('cat_activo_fijo',array(
            'id_activofijo'                => $id_activofijo,
            'id_cuentacontable'            => $id_cuentacontable,
            'id_area'                      => $id_area,
            'id_sucursal'                 =>  $id_sucursal,
            'id_empleado'                 =>  $id_empleado,
            'id_proveedor'                 =>  $id_proveedor,
            'nombre_activo_fijo'           =>  $nombre_activo_fijo,
            'valor_original'                 =>  $valor_original,
            'estado'                     =>  $estado,
            'fecha_compra'                 =>  $fecha_compra,
            'fecha_ingreso'                 =>  $fecha_ingreso,
            'fecha_inicio_uso'                 =>  $fecha_inicio_uso,
            'descripcion'                 =>  $descripcion,
            'importe_depreciable'          =>  $importe_depreciable,
            'vida_util'                 =>  $vida_util,
            'valor_residual'               =>  $valor_residual,
            'tipo_valor'                 =>  $tipo_valor,
            'cuota_anual'                 =>  $cuota_anual,
             'cuota_mensual'                 =>  $cuota_mensual
            
             
        ));

    }
    //actualizamos los datos de un usuario por id
   



}

?>