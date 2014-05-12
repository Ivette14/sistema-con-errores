<?php 
    class Crud_baja extends CI_Controller
{
    public function __construct()
    {
        //Cargamos El Constructor
parent::__construct();
        @ session_start();
        $this->load->helper('url');
        $this->load->library('pagination');
        $this->load->library(array('session','form_validation'));
        $this->load->model("crud_model_baja");
        $this->load->helper(array('form'));
        $this->load->library('form_validation');
    }
     
    public function index()
    {
        //obtenemos todos los usuarios
        $activo = $this->crud_model_baja->get_bajas();
        //creamos una variable usuarios para pasarle a la vista
        $data['activo'] = $activo;
        //cargamos nuestra vista
        $this->load->view('header/header');
        $this->load->view('form/frmbaja',$data);
        $this->load->view('footer');
    
    }
     
    public function baja_activo($id_activofijo=0)
    {

$data = array( 
            'id_activofijo' => $this->input->post('id_activofijo', TRUE),
            'fecha_baja' => $this->input->post('fecha_baja', TRUE),
             'motivo_baja' => $this->input->post('motivo_baja', TRUE),
            'num_autorizacion' => $this->input->post('num_autorizacion', TRUE),

        );
        
        $this->crud_model_baja->baja_activo($data);
        redirect('Crud_baja');
    }



    
}
?>