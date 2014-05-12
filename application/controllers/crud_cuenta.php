<?php 
    class Crud_cuenta extends CI_Controller
{
    public function __construct()
    {
        //Cargamos El Constructor
parent::__construct();
        @ session_start();
        $this->load->helper('url');
        $this->load->library('pagination');
        $this->load->library(array('session','form_validation'));
        $this->load->model("crud_model_cuenta");
        $this->load->helper(array('form'));
        $this->load->library('form_validation');
    }
     
    public function index()
    {
        //obtenemos todos los usuarios
        $cuenta = $this->crud_model_cuenta->get_cuentas();
        //creamos una variable usuarios para pasarle a la vista
        $data['cuenta'] = $cuenta;
        //cargamos nuestra vista
        $this->load->view('header/header');
        $this->load->view('form/frmcuentas',$data);
        $this->load->view('footer');
    
    }

    public function agregar()
    {
         //Si Existe Post y es igual a uno
                $id_cuentacontable = $this->input->post('id_cuentacontable');  
                $nombre_cuenta = $this->input->post('nombre_cuenta');
                $vida_util = $this->input->post('vida_util');
                $this->crud_model_cuenta->agregar_cuenta($nombre_sucursal,$telefono_sucursal,$direccion_sucursal,$departamento);               
         //cargamos nuestra vista
        $this->load->view('header/header');
        $this->load->view('form/a_sucursal');
        $this->load->view('footer');
    

    }
     
    public function editar($id_sucursal=0)
    {
        //verificamos si existe el id
      //Si existe el post para editar
      
             
                $id_cuentacontable =      $this->input->post('id_cuentacontable');
                $nombre_cuenta =     $this->input->post('nombre_cuenta');
                $vida_util =    $this->input->post('vida_util');
                $this->crud_model_cuenta->actualizar_cuenta($id_cuentacontable,$nombre_cuenta,$vida_util);
                    //redireccionamos al controlador CRUD
                    redirect('crud_cuenta/index');               
            //devolvemos los datos del usuario
            $data['dato'] = $respuesta;
            //cargamos la vista
            $this->load->view('header/header');
            $this->load->view('form/editar_cuenta.php',$data);
            $this->load->view('footer');
    }
     
    public function eliminar($id_sucursal=0)
    {
        //verificamos si existe el id
        $respuesta = $this->crud_model->get_sucursal($id_sucursal);
        //si nos retorna FALSE mostramos la pag 404.
        if($respuesta==false)
        show_404();
        else
        {
            //si existe eliminamos el usuario
            $this->crud_model->eliminar_sucursal($id_sucursal);
            //redireccionamos al controlador CRUD
            redirect('crud'); 
        }
    }
}
?>