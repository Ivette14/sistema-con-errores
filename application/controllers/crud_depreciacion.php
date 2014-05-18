<?php 
    class Crud_depreciacion extends CI_Controller
{
    public function __construct()
    {
        //Cargamos El Constructor
parent::__construct();
        @ session_start();
        $this->load->helper('url');
        $this->load->library('pagination');
        $this->load->library(array('session','form_validation'));
        $this->load->model("crud_model_depreciacion");
        $this->load->helper(array('form'));
        $this->load->library('form_validation');
    }
     
    public function index()
    {
          //obtenemos todos los activos
        $activo = $this->crud_model_depreciacion->get_activos();
        //creamos una variable activos para pasarle a la vista
        $data['saldo'] = $activo;
        
        $this->load->view('header/header');
        $this->load->view('form/frmdepreciacion', $data);
        $this->load->view('footer');
    
    }

    
     
    public function depreciacion($id_activofijo=0)
    {
        //verificamos si existe el id
        $respuesta = $this->crud_model_depreciacion->get_activo($id_activofijo);
        //si nos retorna FALSE le mostramos la pag 404
        if($respuesta==false)
        show_404();
        else
        {
            //devolvemos los datos del usuario
            $data['dato'] = $respuesta;
            //cargamos la vista
            $this->load->view('header/header');
            $this->load->view('form/depreciacion',$data);
            $this->load->view('footer');
        }
    }
     
  
}
?>