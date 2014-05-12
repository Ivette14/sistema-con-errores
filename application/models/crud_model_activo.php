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
     $sql = $this->db->get('cat_cuentas_contables');
     return $sql->result();       
    
    } 
    public function get_proveedor()
{

      $sql = $this->db->get('cat_proveedor');
     return $sql->result();  
}
    public function get_sucursal()
{

      $sql = $this->db->get('cat_sucursal');
     return $sql->result();  
}
    public function get_area()
{

      $sql = $this->db->get('cat_area');
     return $sql->result();  
}
    public function get_empleado()
{

      $sql = $this->db->get('cat_empleado');
     return $sql->result();  
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