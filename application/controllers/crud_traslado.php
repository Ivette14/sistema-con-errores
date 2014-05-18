<?php 
    class Crud_traslado extends CI_Controller
{
    public function __construct()
    {
        //Cargamos El Constructor
parent::__construct();
        @ session_start();
        $this->load->helper('url');
        $this->load->library('pagination');
        $this->load->library(array('session','form_validation'));
        $this->load->model("crud_model_traslado");
        $this->load->helper(array('form'));
        $this->load->library('form_validation');
    }
     
    public function index()
    {
        //obtenemos todos los empleado
        $traslados = $this->crud_model_traslado->tabla();       
        //creamos una variable empleados para pasarle a la vista
        $data['traslados'] = $traslados;
        //cargamos nuestra vista
        $this->load->view('header/header');
        $this->load->view('form/frmtraslado',$data);
        $this->load->view('footer');
    
    }

    public function agregar()
    {
        $datas['sucursal'] = $this->crud_model_traslado->sucur();
        //Si Existe Post y es igual a uno
        if($this->input->post('post') && $this->input->post('post')==1)
        {
            $this->form_validation->set_rules('codigo_traslado', 'Codigo de Traslado de Activo', 'required|trim|xss_clean');
            $this->form_validation->set_rules('codigo_activo', 'Codigo Activo', 'required|trim|xss_clean');
            $this->form_validation->set_rules('motivo_traslado', 'Motivo de Traslado', 'required|trim|xss_clean');
            $this->form_validation->set_rules('fecha_traslado', 'Fecha de Traslado', 'required|trim|xss_clean');
            $this->form_validation->set_rules('id_sucursal', 'Emisor de Traslado', 'required|trim|xss_clean');
            $this->form_validation->set_rules('id_sucursal_r', 'Receptor de Traslado', 'required|trim|xss_clean');

            $this->form_validation->set_message('required','El Campo <b>%s</b> Es Obligatorio');
            $this->form_validation->set_message('numeric','El Campo <b>%s</b> Solo Acepta Números');
            if ($this->form_validation->run() == TRUE)
            {
                $codigo_traslado    = $this->input->post('codigo_traslado');
                $codigo_activo      = $this->input->post('codigo_activo');
                $motivo_traslado    = $this->input->post('motivo_traslado');
                $fecha_traslado     = $this->input->post('fecha_traslado');                
                $id_sucursal        = $this->input->post('id_sucursal');
                $id_sucursal_r        = $this->input->post('id_sucursal_r');
                $this->crud_model_traslado->agregar_traslado($codigo_traslado, $codigo_activo, $motivo_traslado, $fecha_traslado, $id_sucursal, $id_sucursal_r);

                redirect('crud_traslado');               
            }
        }

         //cargamos nuestra vista
        $this->load->view('header/header');
        $this->load->view('form/a_traslado',$datas);
        $this->load->view('footer');
    

    }
     
    public function editar($id_traslado_activo=0)
    {
        //verificamos si existe el id
        $respuesta = $this->crud_model_traslado->get_tralado($id_traslado_activo);        
        //si nos retorna FALSE le mostramos la pag 404
        if($respuesta==false)
        show_404();
        else
        {
            //Si existe el post para editar
            if($this->input->post('post') && $this->input->post('post')==1)
            {
                $this->form_validation->set_rules('codigo_traslado', 'Codigo de Traslado de Activo', 'required|trim|xss_clean');
            $this->form_validation->set_rules('codigo_activo', 'Codigo Activo', 'required|trim|xss_clean');
            $this->form_validation->set_rules('Motivo_traslado', 'Motivo de Traslado', 'required|numeric|trim|xss_clean');
            $this->form_validation->set_rules('Fecha_traslado', 'Fecha de Traslado', 'required|trim|xss_clean');
            $this->form_validation->set_rules('solicitud_traslado', 'Solicitud de Traslado', 'required|trim|xss_clean');
            $this->form_validation->set_rules('emisor_traslado', 'Emisor de Traslado', 'required|trim|xss_clean');
            $this->form_validation->set_rules('receptor_traslado', 'Receptor de Traslado', 'required|trim|xss_clean');
             
            $this->form_validation->set_message('required','El Campo <b>%s</b> Es Obligatorio');
            $this->form_validation->set_message('numeric','El Campo <b>%s</b> Solo Acepta Números');
            if ($this->form_validation->run() == TRUE)
            {
                $id_activofijo      = $this->input->post('id_activofijo');
                $Motivo_traslado    = $this->input->post('Motivo_traslado');
                $Fecha_traslado     = $this->input->post('Fecha_traslado');
                $solicitud_traslado = $this->input->post('solicitud_traslado');
                $emisor_traslado    = $this->input->post('emisor_traslado');
                $receptor_traslado  = $this->input->post('receptor_traslado');
                $this->crud_model_traslado->agregar_traslado($codigo_traslado, $codigo_activo, $motivo_traslado, $fecha_traslado, $solicitud_traslado, $emisor_traslado, $receptor_traslado);

                redirect('crud_traslado');                
                }
            }
            //devolvemos los datos del usuario
            $data['dato'] = $respuesta;
            //cargamos la vista
            $this->load->view('header/header');
            $this->load->view('form/editar_traslado',$datos);
            $this->load->view('footer');
        }
    }
     
    public function eliminar($id_traslado_activo=0)
    {
        //verificamos si existe el id
        $respuesta = $this->crud_model_traslado->get_traslado($id_traslado_activo);
        //si nos retorna FALSE mostramos la pag 404.
        if($respuesta==false)
        show_404();
        else
        {
            //si existe eliminamos el usuario
            $this->crud_model_traslado->eliminar_traslado($id_traslado_activo);
            //redireccionamos al controlador CRUD
            redirect('crud_traslado'); 
        }
    }
}
?>