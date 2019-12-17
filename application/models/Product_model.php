<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Product_model extends CI_Model
{

    /* Retourne la list des jeux */
    public function listGame()
    {
        return $this->db->get('game', 8, 9)->result();
    }

    /* Retourne la liste des 3 meilleurs jeux */
    public function bestSeller()
    {
        return $this->db->get('game', 3)->result();
    }

    public function popularGame()
    {
        return $this->db->get('game', 6, 3)->result();
    }



    public function addGame()
    {
        $data = $this->input->post();
        $data = $this->security->xss_clean($data);
        $this->db->insert('games', $data);
    }
    /* Ajoute un jeu */

    public function modifyGame()
    {

        $data = $this->input->post();
        $id = $this->input->post('ID_GAMES');
        $data = $this->security->xss_clean($data);
        unset($data['modifier']);

        $this->db->where('ID_GAMES', $id);
        $this->db->update('games', $data);
    }
    /* Modifi un jeu */

    public function deleteGame($id)
    {
        $this->db->where('ID_GAMES', $id);
        $this->db->delete('games');
    }
    /* Supprime un jeu */

    public function countGame()
    {
    }

    /* Compte le nombre de jeu */








    public function selectGame($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('game', $id)->result();
    }

  

}
?>