<?php 

class home extends CI_Controller
{

    /* Permet d'afficher l'index */
    public function index()
    {
        // Appel des models
        $this->load->model('Category_models');
        // Création du tableau de donné
        $data = array();
        $data['category_name'] = $this->category_models->listCategory();
        //Affichage des vues
        $this->load->view('header', $data);

        $this->load->view('footer');
    }



}
?>