<?php

class Mcliente extends CI_Model{

    //MOSTRAR Cliente 
    public function mselectcliente(){
        $this->db->where('estado <=','2');
        $this->db->order_by("idClientes", "asc");
        $resultado =$this->db->get('clientes');

        return $resultado->result();
    }   
    //INSERTAR Cliente 
    public function minsertcliente($data){
        return  $this->db->insert('clientes',$data); 
    }   

    //OBTENER DATOS 
    public function midupdatecliente($id){
       $this->db->where('idClientes', $id);
       $resultado = $this->db->get('clientes');
       return $resultado->row();
    }   

    //MODIFICAR Cliente 
    public function mupdatecliente($id, $data){
        $this->db->where('idClientes', $id);
        return $this->db->update('clientes', $data);
     } 
     //Traer Cliente 
    public function mselectinfocliente($id){
        $this->db->where('idClientes =',"$id");
        $resultado =$this->db->get('clientes');
        return $resultado->row();
    }   
}
?>