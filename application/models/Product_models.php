<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class product_models extends CI_Model {

    public function addGame(){       
        $data = $this->input->post();
        $data = $this->security->xss_clean($data);
        $this->db->insert('games', $data);        
    }
    /* Ajoute un jeu */

    public function modifyGame(){
        
        $data = $this->input->post();
        $id = $this->input->post('ID_GAMES');
        $data = $this->security->xss_clean($data);
        unset($data['modifier']);
        
        $this->db->where('ID_GAMES', $id);
        $this->db->update('games', $date);    
    }
    /* Modifi un jeu */

    public function deleteGame($id){
        $this->db->where('ID_GAMES', $id);
        $this->db->delete('games');
    }
    /* Supprime un jeu */

    public function countGame(){
        
    }

    /* Compte le nombre de jeu */

    public function listGame(){
        return $this->db->get('games')->result();
    }
    /* Retourne une liste de jeu */
    
    public function selectGame(){
        $data = $this->input->post();
        $id = $this->input->post('ID_GAMES');
        $data = $this->security->xss_clean($data);
        unset($data["selectioner"]);
        
        $this->db->where('ID_GAMES', $id);
        $this->db->get('games', $data);
    }
    /* Retourne le nom du jeu entré */
    
    public function detailGame(){
        
    }
}

?>