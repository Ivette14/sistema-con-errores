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
        $query = $this->db->query('SELECT SQL_CACHE 
        cat_activo_fijo.id_activofijo,        
        cat_activo_fijo.nombre_activo_fijo,
        cat_cuentas_contables.nombre_cuenta,
        cat_sucursal.nombre_sucursal,
        cat_area.nombre_area,
        cat_empleado.nombre_empleado,
        cat_proveedor.nombre_provee
        FROM
        cat_activo_fijo
        INNER JOIN cat_cuentas_contables ON cat_cuentas_contables.id_cuentacontable = cat_activo_fijo.id_cuentacontable
        INNER JOIN cat_sucursal ON cat_sucursal.id_sucursal = cat_activo_fijo.id_sucursal
        INNER JOIN cat_area ON cat_area.id_area = cat_activo_fijo.id_area
        INNER JOIN cat_empleado ON cat_empleado.id_empleado = cat_activo_fijo.id_empleado
        INNER JOIN cat_proveedor ON cat_proveedor.id_proveedor = cat_activo_fijo.id_proveedor
        WHERE
         cat_activo_fijo.activado  = 1;');
        return $query->result();
    }
    
     //vamos a cargar todos los datos para Combobox

    //agregamos un activo
    public function agregar_activo($id_activofijo, $id_cuentacontable,$id_area, $id_sucursal, $id_empleado, $id_proveedor,$nombre_activo_fijo,$valor_original,
     $estado,$fecha_compra,$fecha_ingreso,$fecha_inicio_uso,$descripcion,
     $importe_depreciable,$vida_util,$valor_residual,$tipo_valor,$cuota_anual,$cuota_mensual, $activado) 
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
             'cuota_mensual'                 =>  $cuota_mensual,
            'activado'                     => $activado
             
        ));

    }
    //actualizamos los datos de un usuario por id
   
public function cuenta()
    {
        $this->db->order_by('nombre_sucursal','asc');
        $sucursal = $this->db->get('cat_sucursal');
        if($sucursal->num_rows()>0)
        {
            return $sucursal->result();
        }
    }


}

?>