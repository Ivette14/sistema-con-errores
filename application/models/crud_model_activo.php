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
    public function get_cuentas()
{
        // armamos la consulta
    $query = $this->db-> query('SELECT id_cuentacontable,nombre_cuenta FROM cat_cuentas_contables');

    // si hay resultados
    if ($query->num_rows() > 0) {
        // almacenamos en una matriz bidimensional
        foreach($query->result() as $row)
           $arrDatos[htmlspecialchars($row->id_cuentacontable,  ENT_QUOTES)] = 
            htmlspecialchars($row->nombre_cuenta, ENT_QUOTES);

        $query->free_result();
        return $arrDatos;
     }
    
    
    } 
    public function get_proveedor()
{
        // armamos la consulta
    $query = $this->db-> query('SELECT id_proveedor,nombre_provee FROM cat_proveedor');

    // si hay resultados
    if ($query->num_rows() > 0) {
        // almacenamos en una matriz bidimensional
        foreach($query->result() as $row)
           $arrDatos[htmlspecialchars($row->id_proveedor,  ENT_QUOTES)] = 
            htmlspecialchars($row->nombre_provee, ENT_QUOTES);

        $query->free_result();
        return $arrDatos;
     }
    
    }
    
    public function get_sucursal()


     {
        // armamos la consulta
    $query = $this->db-> query('SELECT id_sucursal,nombre_sucursal FROM cat_sucursal');

    // si hay resultados
    if ($query->num_rows() > 0) {
        // almacenamos en una matriz bidimensional
        foreach($query->result() as $row)
           $arrDatos[htmlspecialchars($row->id_sucursal,  ENT_QUOTES)] = 
            htmlspecialchars($row->nombre_sucursal, ENT_QUOTES);

        $query->free_result();
        return $arrDatos;
     }
        // armamos la consulta
    
    
    } 

    public function get_area()


      {
        // armamos la consulta
    $query = $this->db-> query('SELECT id_area,nombre_area FROM cat_area');

    // si hay resultados
    if ($query->num_rows() > 0) {
        // almacenamos en una matriz bidimensional
        foreach($query->result() as $row)
           $arrDatos[htmlspecialchars($row->id_area,  ENT_QUOTES)] = 
            htmlspecialchars($row->nombre_area, ENT_QUOTES);

        $query->free_result();
        return $arrDatos;
     }
    
    
    } 

    public function get_empleado()

      {
        // armamos la consulta
    $query = $this->db-> query('SELECT id_empleado,nombre_empleado FROM cat_empleado');

    // si hay resultados
    if ($query->num_rows() > 0) {
        // almacenamos en una matriz bidimensional
        foreach($query->result() as $row)
           $arrDatos[htmlspecialchars($row->id_empleado,  ENT_QUOTES)] = 
            htmlspecialchars($row->nombre_empleado, ENT_QUOTES);

        $query->free_result();
        return $arrDatos;
     }
    
    
    } 



    //agregamos un activo
    public function agregar_activo($data) {
        $this->db->insert('cat_activo_fijo', $data);
        return $this->db->insert_id();

    }
    //actualizamos los datos de un usuario por id
    public function actualizar_proveedor($id_proveedor, $data){
        $this->db->where('id_proveedor', $id_proveedor);
        $this->db->update('cat_proveedor', $data);
    }
    //eliminamos un usuario por id
    public function eliminar_proveedor($id_proveedor)
    {
        $this->db->delete('cat_proveedor', array('id_proveedor' => $id_proveedor));
    }





    //Obtenemos los datos de un usuario por id
 //   public function get_proveedor($id_proveedor)
   // {
     //   $sql = $this->db->get_where('cat_proveedor',array('id_proveedor'=>$id_proveedor));
       // if($sql->num_rows()==1)
        //return $sql->row_array();
        //else
        //return false;
    //}
}

?>