<?php 
    class Crud_activo extends CI_Controller
{
    public function __construct()
    {
        //Cargamos El Constructor
parent::__construct();
        @ session_start();
        $this->load->helper('url');
        $this->load->library('pagination');
        $this->load->library(array('session','form_validation'));
        $this->load->model("crud_model_activo");
        $this->load->helper(array('form'));
        $this->load->library('form_validation');
    }
  
public function index_nuevo()
{       
    $data['cat_proveedor'] = $this->crud_model_activo->get_proveedor();
    $data['cat_sucursal']= $this->crud_model_activo->get_sucursal();
    $data['cat_area'] = $this->crud_model_activo->get_area();
    $data['cat_empleado'] = $this->crud_model_activo->get_empleado();
    

 //creamos variables  para pasarle a la vista

     //cargamos nuestra vista
       $contenido = $this->load->view('footer', $data, true);
      
$data2['contenido'] = $contenido;
        $this->load->view('header/header',$data2);
        $this->load->view('form/a_activofijo');
        
}

   
    public function llena_vida_cuenta()
    {
        $options = "";
        if($this->input->post('nombre_cuenta'))
        {
            $nombre_cuenta = $this->input->post('nombre_cuenta');
            $vida_util = $this->crud_model_activo->vida_cuenta($nombre_cuenta);
            foreach($vida_util as $fila)
            {
            ?>
                <option value="<?=$fila-> cat_cuentas_contables?>"><?=$fila-> vida_util ?></option>                       
            <?php
            }
        }
    }

    public function index()
    {
        //obtenemos todos los activos
        $activo    = $this->crud_model_activo->get_activos();

        
        //creamos una variable usuarios para pasarle a la vista
        $data['cat_activo_fijo'] = $activo;
        //cargamos nuestra vista
        $this->load->view('header/header');
        $this->load->view('form/frmactivofijo',$data);
        $this->load->view('footer');
    
    }

public function depreciacion(){


    if($_POST['importe_depreciable'] !=0)
    {   

        echo "Falta importe_depreciable";
         }

        else {
        $importe_depreciable = $_POST
        ['importe_depreciable'];
        $residual = $_POST
        ['residual'];
             $vida_util = $_POST
        ['vida_util'];
        $depreciacion_anual = $importe_depreciable - $varlor_residual / $vida_util;
        echo "La depreciacion anual es de ".$depreciacion_anual; 
   
    }


}


    public function nuevo()
    {

 $this->load->view('header/header');
        $this->load->view('form/a_activo');
        $this->load->view('footer');
    
    }

    public function agregar()
    
    {     
       if($this->input->post('post') && $this->input->post('post')==1)
        {
            $this->form_validation->set_rules('id_activofijo', 'id_activofijo',           'required|trim|xss_clean');
            $this->form_validation->set_rules('id_cuentacontable', 'id_cuentacontable',   'required|numeric|trim|xss_clean');
            $this->form_validation->set_rules('id_area', 'id_area',                       'required|trim|xss_clean');
            $this->form_validation->set_rules('id_sucursal', 'id_sucursal',              'required|trim|xss_clean');
            $this->form_validation->set_rules('id_empleado', 'id_empleado',               'required|trim|xss_clean');
            $this->form_validation->set_rules('id_proveedor', 'id_proveedor',             'required|trim|xss_clean');
            $this->form_validation->set_rules('nombre_activo_fijo', 'nombre_activo_fijo', 'required|trim|xss_clean');
            $this->form_validation->set_rules('valor_orginal', 'valor_orginal',           'numeric|trim|xss_clean');
            $this->form_validation->set_rules('estado', 'estado',                         'required|trim|xss_clean');
            $this->form_validation->set_rules('fecha_compra', 'fecha_compra',             'required|trim|xss_clean');
            $this->form_validation->set_rules('fecha_ingreso', 'fecha_ingreso',           'required|trim|xss_clean');
            $this->form_validation->set_rules('fecha_inicio_uso', 'fecha_inicio_uso',     'required|trim|xss_clean');
            $this->form_validation->set_rules('descripcion', 'descripcion',               'required|trim|xss_clean');
            $this->form_validation->set_rules('importe_depreciable', 'importe_depreciable','required|trim|xss_clean'); 
 $this->form_validation->set_rules('vida_util', 'vida_util',                    'required|trim|xss_clean');
            $this->form_validation->set_rules('varlor_residual', 'varlor_residual',        'numeric|trim|xss_clean');
            $this->form_validation->set_rules('porcentaje_depreciacion', 'porcentaje_depreciacion','numeric|trim|xss_clean');
            $this->form_validation->set_rules('tipo_valor', 'tipo_valor',                            'required|trim|xss_clean');
            $this->form_validation->set_rules('cuota_anual', 'cuota_anual',                          'numeric|trim|xss_clean');
            $this->form_validation->set_rules('cuota_mensual', 'cuota_mensual',                      'numeric|trim|xss_clean');
             


            $this->form_validation->set_message('required','El Campo <b>%s</b> Es Obligatorio');
            $this->form_validation->set_message('numeric','El Campo <b>%s</b> Solo Acepta Números');
            if ($this->form_validation->run() == TRUE)
            {
                $id_activofijo = $this->input->post('id_activofijo');
                $id_cuentacontable = $this->input->post('id_cuentacontable');
                $id_area = $this->input->post('id_area');
                $id_sucursal = $this->input->post('id_sucursal');
                $id_empleado = $this->input->post('id_empleado');
                $id_proveedor= $this->input->post('id_proveedor');
                $nombre_activo_fijo = $this->input->post('nombre_activo_fijo');
                $valor_orginal = $this->input->post('valor_orginal');
                $estado = $this->input->post('estado');
                $fecha_compra = $this->input->post('fecha_compra');
                $fecha_ingreso = $this->input->post('fecha_ingreso');
                $fecha_inicio_uso = $this->input->post('fecha_inicio_uso');
                $descripcion = $this->input->post('descripcion');
                $importe_depreciable = $this->input->post('importe_depreciable');
                $vida_util = $this->input->post('vida_util');
                $varlor_residual = $this->input->post('varlor_residual');
                $porcentaje_depreciacion = $this->input->post('porcentaje_depreciacion');
                $tipo_valor = $this->input->post('tipo_valor');
                $cuota_anual = $this->input->post('cuota_anual');
                $cuota_mensual = $this->input->post('cuota_mensual');
               
                $this->crud_model_activo->agregar_activo($id_activofijo,$id_cuentacontable, 
                    $id_area, $id_sucursal, $id_empleado, $id_proveedor,$nombre_activo_fijo,$valor_orginal,$estado,
                    $fecha_compra, $fecha_ingreso, $fecha_inicio_uso, $descripcion,$importe_depreciable, $vida_util,
                    $varlor_residual, $porcentaje_depreciacion,$tipo_valor,$cuota_anual,$cuota_mensual);


                redirect('Crud_activo');               
            }
            
}
 }       
           
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
