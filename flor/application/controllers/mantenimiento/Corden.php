<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Corden extends CI_Controller {
    function __construct(){
    parent:: __construct();
    if(!$this->session->userdata('login')){
        redirect(base_url());
    }
    $this->load->model('morden');
    $this->load->model('mcliente');
    $this->load->model('mcombo');
    }


public function listar($id){

    $data = array (
        'ordenindex' => $this->morden->mselectorden($id),
        'clienteindex' => $this->mcliente->mselectinfocliente($id)
    );
    $this->load->view('layouts/header');
    $this->load->view('layouts/aside');
    $this->load->view('admin/orden/vlist', $data);
    $this->load->view('layouts/footer');
}


public function cadd($id){

    $data = array(
        'clientes' => $this->mcombo->mcombotabla('clientes'),
        'clienteindex' => $this->mcliente->mselectinfocliente($id),
    );
   
    $this->load->view('layouts/header');
    $this->load->view('layouts/aside');
    $this->load->view('admin/orden/vadd', $data);
    $this->load->view('layouts/footer');
}


public function cinsert(){
     $idCliente = $this->input->post('txtidcliente');
     $fecha = $this->input->post('txtfecha');
     $cuello = $this->input->post('txtcuello');
     $peso = $this->input->post('txtpeso');
     $pecho = $this->input->post('txtpecho');
     $brazo = $this->input->post('txtbrazo');
     $muneca = $this->input->post('txtmuneca');
     $cintura = $this->input->post('txtcintura');
     $cadera = $this->input->post('txtcadera');
     $abdomen = $this->input->post('txtabdomen');
     $muslo = $this->input->post('txtmuslo');
     $descripcion = $this->input->post('txtdescripcion');
     log_message('error', "descripcion=  $descripcion");

  
        $data = array(
            'idCliente' => $idCliente,
            'fecha' => $fecha,
            'cuello' => $cuello,
            'peso' => $peso,
            'pecho' => $pecho,
            'brazo' => $brazo,
            'muneca' => $muneca,
            'cintura' => $cintura,
            'cadera' => $cadera,
            'abdomen' => $abdomen,
            'muslo' => $muslo,
            'descripcion' => $descripcion,
            'estado' => 1
           
        );
        $res=$this->morden->minsertorden($data);
        if($res){
            $this->session->set_flashdata('correcto', 'Se guardo Correctamente');
            redirect(base_url().'mantenimiento/corden/listar/'.$idCliente);
        }else{
            $this->session->set_flashdata('error', 'No se Guardo registro');
            redirect(base_url().'mantenimiento/corden/cadd');
        }
    
    
}


public function cedit($id){
    $data = array(
        'ordenedit' => $this->morden->midupdateorden($id),
    );

    $a =$this->mcombo->mcombotabla('Clientes');
 
    $this->load->view('layouts/header');
    $this->load->view('layouts/aside');
    $this->load->view('admin/orden/vedit', $data);
    $this->load->view('layouts/footer');
}

public function cupdate(){
    $idorden = $this->input->post('txtidorden');
    $idCliente = $this->input->post('txtidCliente');
    $fecha = $this->input->post('txtfecha');
    $cuello = $this->input->post('txtcuello');
    $peso = $this->input->post('txtpeso');
    $pecho = $this->input->post('txtpecho');
    $brazo = $this->input->post('txtbrazo');
    $muneca = $this->input->post('txtmuneca');
    $cintura = $this->input->post('txtcintura');
    $cadera = $this->input->post('txtcadera');
    $abdomen = $this->input->post('txtabdomen');
    $muslo = $this->input->post('txtmuslo');
    $descripcion = $this->input->post('txtdescripcion');
  
   
        $data = array(
            'idCliente' => $idCliente,
            'fecha' => $fecha,
            'cuello' => $cuello,
            'peso' => $peso,
            'pecho' => $pecho,
            'brazo' => $brazo,
            'muneca' => $muneca,
            'cintura' => $cintura,
            'cadera' => $cadera,
            'abdomen' => $abdomen,
            'muslo' => $muslo,
            'descripcion' => $descripcion
        );
        $res = $this->morden->mupdateorden($idorden, $data);
        if($res){
            $this->session->set_flashdata('correcto', 'Se Guardo Correctamente');
            redirect(base_url().'mantenimiento/corden/listar/'.$idCliente);
        }else {
            $this->session->set_flashdata('error', 'No se pudo actualizar la orden');
            redirect(base_url().'mantenimiento/corden/cedit'.$idorden);
        }
   
}

public function cdelete($id){

    $cliente = $this->morden->mselectinfoorden($id);

    $idCliente= $cliente->idCliente;
   
    $this->morden->mupdateorden($id);
    redirect(base_url().'mantenimiento/corden/listar/'.$idCliente);
}


}
?>