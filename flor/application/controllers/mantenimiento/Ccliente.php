<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ccliente extends CI_Controller {
    function __construct(){
    parent:: __construct();
    if(!$this->session->userdata('login')){
        redirect(base_url());
    }
    $this->load->model('mcliente');
    $this->load->model('mcombo');
    }


public function index(){
    $data = array (
        'clienteindex' => $this->mcliente->mselectcliente(),
    );
    $this->load->view('layouts/header');
    $this->load->view('layouts/aside');
    $this->load->view('admin/cliente/vlist', $data);
    $this->load->view('layouts/footer');
}


public function cadd(){
    $data = array (
        'tipoDocumentocombo' => $this->mcombo->mcombotabla('clientes'),
        
    );
    $this->load->view('layouts/header');
    $this->load->view('layouts/aside');
    $this->load->view('admin/cliente/vadd', $data);
    $this->load->view('layouts/footer');
}


public function cinsert(){
     
     $nombre = $this->input->post('txtnombre');
     $apellido = $this->input->post('txtapellido');
     $dni = $this->input->post('txtdni');
     $edad = $this->input->post('txtedad');
     $estatura = $this->input->post('txtestatura');
     $operacion = $this->input->post('txtoperacion');
     $medicacion = $this->input->post('txtmedicacion');
     $deporte = $this->input->post('txtdeporte');
     $tipoAlimentacion = $this->input->post('txttipoAlimentacion');
   

    //REGLA DE VALIDACION 
   
    
        $data = array(
            
            'nombre' => $nombre,
            'apellido' => $apellido,
            'dni' => $dni,
            'edad' => $edad,
            'estatura' => $estatura,
            'operacion' => $operacion,
            'medicacion' => $medicacion,
            'deporte' => $deporte,
            'tipoAlimentacion' => $tipoAlimentacion,
            'estado' => '1'
        );
        $res=$this->mcliente->minsertcliente($data);
        if($res){
            $this->session->set_flashdata('correcto', 'Se guardo Correctamente');
            redirect(base_url().'mantenimiento/ccliente');
        }else{
            $this->session->set_flashdata('error', 'No se Guardo registro');
            redirect(base_url().'mantenimiento/ccliente/cadd');
        }
    
    
}


public function cedit($id){
    $data = array(
        'clienteedit' => $this->mcliente->midupdatecliente($id),
    );
  
    $this->load->view('layouts/header');
    $this->load->view('layouts/aside');
    $this->load->view('admin/cliente/vedit', $data);
    $this->load->view('layouts/footer');
}

public function cupdate(){

    $idcliente = $this->input->post('txtidcliente');
    $nombre = $this->input->post('txtnombre');
     $apellido = $this->input->post('txtapellido');
     $dni = $this->input->post('txtdni');
     $edad = $this->input->post('txtedad');
     $estatura = $this->input->post('txtestatura');
     $operacion = $this->input->post('txtoperacion');
     $medicacion = $this->input->post('txtmedicacion');
     $deporte = $this->input->post('txtdeporte');
     $tipoAlimentacion = $this->input->post('txttipoAlimentacion');
     $estado = $this->input->post('txtestado');
    
   
        $data = array(
            'nombre' => $nombre,
            'apellido' => $apellido,
            'dni' => $dni,
            'edad' => $edad,
            'estatura' => $estatura,
            'operacion' => $operacion,
            'medicacion' => $medicacion,
            'deporte' => $deporte,
            'tipoAlimentacion' => $tipoAlimentacion,
            
        );

        $res = $this->mcliente->mupdatecliente($idcliente, $data);
        if($res){
            $this->session->set_flashdata('correcto', 'Se Guardo Correctamente');
            redirect(base_url().'mantenimiento/ccliente');
        }else {
            $this->session->set_flashdata('error', 'No se pudo actualizar la cliente');
            redirect(base_url().'mantenimiento/ccliente/cedit'.$idcliente);
        }
   
    
}

public function cdelete($id){

    $data=array(
        'estado' => '10'
    );
    $this->mcliente->mupdatecliente($id, $data);
    redirect(base_url().'mantenimiento/ccliente');
}


}
?>