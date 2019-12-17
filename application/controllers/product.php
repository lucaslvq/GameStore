<?php

class product extends CI_Controller {

    /* Permet d'afficher la liste des jeux */ 
    public function listGame() {

        $this->load->model('Product_model');
        $this->load->model('Category_model');
        $data = array();
        $data['bestSeller'] = $this->Product_model->bestSeller();
        $data['popularGame'] = $this->Product_model->popularGame();
        $data['product'] = $this->Product_model->listGame();
        $data['categoryGame'] = $this->Category_model->listCategory();
        $this->load->view('header', $data);
        $this->load->view('listGame', $data);
        $this->load->view('footer');
    }

    /* Permet d'afficher le detail d'un jeu*/ 
    public function productDetail($id){

        $this->load->model('Product_model');
        $game = $this->Product_model->selectGame($id);
        $data['gameDetail'] = $game;
        $this->load->view('header');
        $this->load->view('productDetail', $data);
        $this->load->view('footer');
    }

    /* Permet d'ajouter un jeu */ 
    public function addGame() {
        
        $this->form_validation->set_rules('ID_CATEGORY', 'ID_CATEGORY', 
                                    array('required', 'regex_match^[0-15]{0,2}$)'), 
                                    array('required' => 'Saisissez une catégorie', 'regex_match' => 'L\'id n\'existe pas'));
        $this->form_validation->set_rules('name', 'name', 
                                    array('required', 'regex_match^([A-Z]|[a-z])[a-z]*(-)?[a-z]+$'), 
                                    array('required' => 'Saisissez un nom de jeu', 'regex_match' => 'Le nom de jeu comporte une erreur'));
        $this->form_validation->set_rules('description', 'description', 
                                    array('required', 'regex_match^[a-zA-Z0-9áàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ._,;:!()\s-]+$'), 
                                    array('required' => 'Entrer une description.', 'regex_match' => 'La description comporte des erreurs'));
        $this->form_validation->set_rules('price', 'price', 
                                    array('required', 'regex_match[0-9 ]{1,}[,.]{0,1}[0-9]{0,2}[€]{0,1}'), 
                                    array('required' => 'Entrer un prix.', 'regex_match' => 'Le prix comporte une erreur'));

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('addGame');
        } else {
            $this->load->model('Product_model');
            $this->Product_model->addGame();
            $this->load->view('addGameSucces');
        }
    }

    /* Permet de modifier un jeu */ 
    public function modifyGame($id) {

        if ($this->session->staut == 'admin') {
            if ($this->input->post()) {
                $data = $this->input->post();
                $id = $this->input->post('ID_GAMES');
                unset($data['Modifier']);

                $this->load->model['Product_model'];
                $this->Product_model->modifyGame($id, $data);
                redirect('product/listGame');
            } else {
                $this->load->model('Product_model');
                $gameDetail = $this->Product_model->detail($id);
                if (empty($gameDetail)) {
                    echo "<p>L'id " . $id . "n'existe pas dans notre base de données, merci d'en essayer un autre.</p>";
                    exit;
                }
                $view['listGame'] = $this->Product_model->listGame();
                $view['category'] = $this->category_models->listCategory();
                $this->load->view('modifyGame', $view);
            }
        } else {
            redirect('home/index');
        }
    }

    /* Permet de supprimer un jeu */ 
    public function deleteGame($id) {
        if ($this->session->statut == 'admin') {
            $this->load->model('Product_model');
            $this->Product_model->deleteGame($id);
            redirect('product/listeGame');
        } else {
            redirect('home/index');
        }
    }

    public function panier() {
        
    }

    public function quantityInLess() {
        
    }

    public function quantityMore() {
        
    }



}
