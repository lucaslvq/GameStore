<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Category_models extends CI_Model{
    
    public function listCategory(){
        
        $this->load->database();
        return $this->db->get('category')->result();
    }
    /*Permet d'afficher la liste de categorie*/
    
    public function addCategory(){
        $date = $this->input->post();
        $data = $this->security->xss_clean($date);
        $this->db->insert('category', $data);
    }
    /*Permet d'ajouter une categorie*/
    
    public function modifyCategory(){
        $data = $this->input->post();
        $id = $this->input->post('ID_CATEGORY');
        $data = $this->security->xss_clean($data);
        unset($data['Modifier']);
        
        $this->db->where('ID_CATEGORY', $id);
        $this->db->updata('category', $data);
    }
    /*Permet de modifier une categorie*/
    
    public function deleteCategory(){
        $this->db->where('ID_CATEGORY', $id);
        $this->db->delete('category');
    }
    /*Permet de supprimer une categorie*/
    
    public function selectOne($id){
        
        $this->load->database();
        $this->db->where('ID_CATEGORY', $id);
        return $this->db->get('category')->result();
    }
    /*Permet d'afficher une categorie*/
    
   
  
    
    
    
    
    
    
    
}
?>