<?php 
    class Crud_area extends CI_Controller
{
    public function __construct()
    {
        //Cargamos El Constructor
parent::__construct();
        @ session_start();
        $this->load->helper('url');
        $this->load->library('pagination');
        $this->load->library(array('session','form_validation'));
        $this->load->model("crud_model_area");
        $this->load->helper(array('form'));
        $this->load->library('form_validation');
    }
     
    public function index()
    {
        //obtenemos todos los empleado
        $areas = $this->crud_model_area->get_areas();
        $datos['id_sucursal'] = $this->crud_model_area->get_sucursales();
        //creamos una variable empleados para pasarle a la vista
        $data['areas'] = $areas;
        //cargamos nuestra vista
        $this->load->view('header/header');
        $this->load->view('form/frmarea', $data, $datos);
        $this->load->view('footer');
    
    }

    public function agregar()
    {
        $datos['nombre_sucursal'] = $this->crud_model_area->get_sucursales();
         //Si Existe Post y es igual a uno
        if($this->input->post('post') && $this->input->post('post')==1)
        {
            $this->form_validation->set_rules('nombre_sucursal', 'Sucursal', 'required|trim|xss_clean');
            $this->form_validation->set_rules('nombre_area', 'Nombre de Area', 'required|trim|xss_clean');
         
             
            $this->form_validation->set_message('required','El Campo <b>%s</b> Es Obligatorio');
            $this->form_validation->set_message('numeric','El Campo <b>%s</b> Solo Acepta Números');
            if ($this->form_validation->run() == TRUE)
            {    
                $nombre_sucursal  = $this->input->post('nombre_sucursal');            
                $id_sucursal    = $this->input->post('id_sucursal');                
                $nombre_area    = $this->input->post('nombre_area');

                $this->crud_model_area->agregar_area($nombre_sucursal, $id_sucursal, $nombre_area);

                redirect('crud_area');               
            }
        }

         //cargamos nuestra vista
        $this->load->view('header/header');
        $this->load->view('form/a_area',$datos);
        $this->load->view('footer');
    

    }
     
    public function editar($id_area=0)
    {
        //verificamos si existe el id
        $respuesta = $this->crud_model_area->get_area($id_area);
        $datos['arrsucursales'] = $this->crud_model_area->get_area();
        //si nos retorna FALSE le mostramos la pag 404
        if($respuesta==false)
        show_404();
        else
        {
            //Si existe el post para editar
            if($this->input->post('post') && $this->input->post('post')==1)
            {
            $this->form_validation->set_rules('nombre_area', 'Nombre de area', 'required|trim|xss_clean');
            $this->form_validation->set_rules('id_area', 'sucursal', 'required|trim|xss_clean');
         
             
            $this->form_validation->set_message('required','El Campo <b>%s</b> Es Obligatorio');
            $this->form_validation->set_message('numeric','El Campo <b>%s</b> Solo Acepta Números');
            if ($this->form_validation->run() == TRUE)
            {
                $nombre_area        = $this->input->post('nombre_area');
                $id_sucursal        = $this->input->post('id_sucursal');

                $this->crud_model_area->agregar_area( $nombre_area, $id_area);

                redirect('crud_area');               
            }
            }
            //devolvemos los datos del usuario
            $data['dato'] = $respuesta;
            //cargamos la vista
            $this->load->view('header/header');
            $this->load->view('form/editar_area',$datos);
            $this->load->view('footer');
        }
    }
     
    public function eliminar($id_area=0)
    {
        //verificamos si existe el id
        $respuesta = $this->crud_model_area->get_area($id_area);
        //si nos retorna FALSE mostramos la pag 404.
        if($respuesta==false)
        show_404();
        else
        {
            //si existe eliminamos el usuario
            $this->crud_model_area->eliminar_area($id_area);
            //redireccionamos al controlador CRUD
            redirect('crud_area'); 
        }
    }
}
?>