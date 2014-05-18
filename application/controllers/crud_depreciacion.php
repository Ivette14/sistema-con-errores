<<<<<<< HEAD
<?php 
=======
﻿<?php 
>>>>>>> 45754fc25216f73780dbf682dc6d4490cdd43a97
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
<<<<<<< HEAD
        $this->load->model("crud_model_depreciacion");
=======
        $this->load->model("crud_model");
>>>>>>> 45754fc25216f73780dbf682dc6d4490cdd43a97
        $this->load->helper(array('form'));
        $this->load->library('form_validation');
    }
     
    public function index()
    {
<<<<<<< HEAD
          //obtenemos todos los activos
        $activo = $this->crud_model_depreciacion->get_activos();
        //creamos una variable activos para pasarle a la vista
        $data['saldo'] = $activo;
        
        $this->load->view('header/header');
        $this->load->view('form/frmdepreciacion', $data);
=======
       
        $this->load->view('header/header');
        $this->load->view('form/frmdepreciacion');
>>>>>>> 45754fc25216f73780dbf682dc6d4490cdd43a97
        $this->load->view('footer');
    
    }

<<<<<<< HEAD
    
     
    public function depreciacion($id_activofijo=0)
    {
        //verificamos si existe el id
        $respuesta = $this->crud_model_depreciacion->get_activo($id_activofijo);
=======
    public function agregar()
    {
         //Si Existe Post y es igual a uno
        if($this->input->post('post') && $this->input->post('post')==1)
        {
            $this->form_validation->set_rules('nombre_sucursal', 'Nombre Sucursal', 'required|trim|xss_clean');
            $this->form_validation->set_rules('telefono_sucursal', 'Telefono', 'required|numeric|trim|xss_clean');
            $this->form_validation->set_rules('direccion_sucursal', 'Direccion', 'required|trim|xss_clean');
            $this->form_validation->set_rules('departamento', 'Departamento', 'required|trim|xss_clean');
             
            $this->form_validation->set_message('required','El Campo <b>%s</b> Es Obligatorio');
            $this->form_validation->set_message('numeric','El Campo <b>%s</b> Solo Acepta Números');
            if ($this->form_validation->run() == TRUE)
            {
                $nombre_sucursal = $this->input->post('nombre_sucursal');
                $telefono_sucursal = $this->input->post('telefono_sucursal');
                $direccion_sucursal = $this->input->post('direccion_sucursal');
                $departamento = $this->input->post('departamento');
                $this->crud_model->agregar_sucursal($nombre_sucursal,$telefono_sucursal,$direccion_sucursal,$departamento);


                redirect('crud');               
            }
        }

         //cargamos nuestra vista
        $this->load->view('header/header');
        $this->load->view('form/a_sucursal');
        $this->load->view('footer');
    

    }
     
    public function editar($id_sucursal=0)
    {
        //verificamos si existe el id
        $respuesta = $this->crud_model->get_sucursal($id_sucursal);
>>>>>>> 45754fc25216f73780dbf682dc6d4490cdd43a97
        //si nos retorna FALSE le mostramos la pag 404
        if($respuesta==false)
        show_404();
        else
        {
<<<<<<< HEAD
=======
            //Si existe el post para editar
            if($this->input->post('post') && $this->input->post('post')==1)
            {
            $this->form_validation->set_rules('nombre_sucursal', 'Nombre_sucursal', 'required|trim|xss_clean');
            $this->form_validation->set_rules('telefono_sucursal', 'Telefono_sucursal', 'required|numeric|trim|xss_clean');
            $this->form_validation->set_rules('direccion_sucursal', 'Direccion_sucursal', 'required|trim|xss_clean');
            $this->form_validation->set_rules('departamento', 'Departamento', 'required|trim|xss_clean');
             
            $this->form_validation->set_message('required','El Campo <b>%s</b> Es Obligatorio');
            $this->form_validation->set_message('numeric','El Campo <b>%s</b> Solo Acepta Números');
                if ($this->form_validation->run() == TRUE)
                {
                $nombre_sucursal = $this->input->post('nombre_sucursal');
                $telefono_sucursal = $this->input->post('telefono_sucursal');
                $direccion_sucursal = $this->input->post('direccion_sucursal');
                $departamento = $this->input->post('departamento');
                $this->crud_model->actualizar_sucursal($id_sucursal,$nombre_sucursal,$telefono_sucursal,$direccion_sucursal,$departamento);
                    //redireccionamos al controlador CRUD
                    redirect('crud');               
                }
            }
>>>>>>> 45754fc25216f73780dbf682dc6d4490cdd43a97
            //devolvemos los datos del usuario
            $data['dato'] = $respuesta;
            //cargamos la vista
            $this->load->view('header/header');
<<<<<<< HEAD
            $this->load->view('form/depreciacion',$data);
=======
            $this->load->view('form/editar_sucursal',$data);
>>>>>>> 45754fc25216f73780dbf682dc6d4490cdd43a97
            $this->load->view('footer');
        }
    }
     
<<<<<<< HEAD
  
=======
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
>>>>>>> 45754fc25216f73780dbf682dc6d4490cdd43a97
}
?>