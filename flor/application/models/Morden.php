<?php

class Morden extends CI_Model{

    //MOSTRAR orden 
    public function mselectorden($id){
        $this->db->where('estado <=','2');
        $this->db->where('idCliente =',"$id");
        $resultado =$this->db->get('orden');
        return $resultado->result();
    }   
    //INSERTAR orden 
    public function minsertorden($data){
        return  $this->db->insert('orden',$data); 
    }   

    //OBTENER DATOS 
    public function midupdateorden($id){
       $this->db->where('idorden', $id);
       $resultado = $this->db->get('orden');
       return $resultado->row();
    }   

    //MODIFICAR orden 
    public function mupdateorden($id){
        $this->db->where('idorden', $id);
        return $this->db->delete('orden');
     } 

     public function mselectinfoorden($id){
        $this->db->where('idorden =',"$id");
        $resultado =$this->db->get('orden');
        return $resultado->row();
    }   
}
?>