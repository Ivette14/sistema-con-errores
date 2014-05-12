<?php 
    class Crud_proveedor extends CI_Controller
{
    public function __construct()
    {
        //Cargamos El Constructor
parent::__construct();
        @ session_start();
        $this->load->helper('url');
        $this->load->library('pagination');
        $this->load->library(array('session','form_validation'));
        $this->load->model("crud_model_proveedor");
        $this->load->helper(array('form'));
        $this->load->library('form_validation');
    }
     
    public function index()
    {
        //obtenemos todos los usuarios
        $proveedor = $this->crud_model_proveedor->get_proveedores();
        //creamos una variable usuarios para pasarle a la vista
        $data['proveedor'] = $proveedor;
        //cargamos nuestra vista
        $this->load->view('header/header');
        $this->load->view('form/frmproveedor',$data);
        $this->load->view('footer');
    
    }
    public function nuevo()
    {

 $this->load->view('header/header');
        $this->load->view('form/a_proveedor');
        $this->load->view('footer');
    
    }

    public function agregar()
    {
         
        $data = array( 
            'nombre_provee' => $this->input->post('nombre_provee', TRUE),
            'direccion_provee' => $this->input->post('direccion_provee', TRUE),
            'telefono_provee' => $this->input->post('telefono_provee', TRUE),
            'email_provee' => $this->input->post('email_provee', TRUE),
            'nit' => $this->input->post('nit', TRUE),

        );
        
        $this->crud_model_proveedor->agregar_proveedor($data);
             $data['type']      =true; 
                $data['message']   ='Se registro un Nuevo Poveedor.'; 
        redirect('crud_proveedor'); 
            }


         //cargamos nuestra vista
    
     
    public function editar($id_proveedor=0)
    {
        //verificamos si existe el id
        $respuesta = $this->crud_model_proveedor->get_proveedor($id_proveedor);
        //si nos retorna FALSE le mostramos la pag 404
        if($respuesta==false)
        show_404();
        else
        {
                        
                
            
            //devolvemos los datos del usuario
            $data['dato'] = $respuesta;
            //cargamos la vista
            $this->load->view('header/header');
            $this->load->view('form/editar_proveedor',$data);
            $this->load->view('footer');
        }
    }
    public function editar_proveedor()
    {

        $id_proveedor= $this->uri->segment(3);
        $data = array( 
            'id_proveedor' => $this->input->post('id_proveedor', TRUE),
            'nombre_provee' => $this->input->post('nombre_provee', TRUE),
            'direccion_provee' => $this->input->post('direccion_provee', TRUE),
            'telefono_provee' => $this->input->post('telefono_provee', TRUE),
            'email_provee' => $this->input->post('email_provee', TRUE),
             'nit' => $this->input->post('nit', TRUE),

        );

        $this->crud_model_proveedor->actualizar_proveedor($id_proveedor, $data);
        redirect('crud_proveedor');
    }
     
    public function eliminar($id_proveedor=0)
    {
        //verificamos si existe el id
        $respuesta = $this->crud_model_proveedor->get_proveedor($id_proveedor);
        //si nos retorna FALSE mostramos la pag 404.
        if($respuesta==false)
        show_404();
        else
        {     //si existe eliminamos el usuario
            $this->crud_model_proveedor->eliminar_provedor($id_proveedor);
            //redireccionamos al controlador CRUD
            redirect('crud_proveedor'); 
        }
    }
}
