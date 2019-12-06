<?php

class product extends CI_Controller {

    public function listGame() {

        $this->load->model('product_models');
        $data = array();
        $data['list_game'] = $this->product_models->listGame();
        $this->load->view('listGame', $data);
    }

    public function addGame() {
        $this->form_validation->set_rules('ID_CATEGORY', 'ID_CATEGORY', array('required', 'regex_match^[0-15]{0,2}$)'), array('required' => 'Saisissez une catégorie', 'regex_match' => 'L\'id n\'existe pas'));
        $this->form_validation->set_rules('name', 'name', array('required', 'regex_match^([A-Z]|[a-z])[a-z]*(-)?[a-z]+$'), array('required' => 'Saisissez un nom de jeu', 'regex_match' => 'Le nom de jeu comporte une erreur'));
        $this->form_validation->set_rules('description', 'description', array('required', 'regex_match^[a-zA-Z0-9áàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ._,;:!()\s-]+$'), array('required' => 'Entrer une description.', 'regex_match' => 'La description comporte des erreurs'));
        $this->form_validation->set_rules('price', 'price', array('required', 'regex_match[0-9 ]{1,}[,.]{0,1}[0-9]{0,2}[€]{0,1}'), array('required' => 'Entrer un prix.', 'regex_match' => 'Le prix comporte une erreur'));

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('addGame');
        } else {
            $this->load->model('product_models');
            $this->product_models->addGame();
            $this->load->view('addGameSucces');
        }
    }

    public function modifyGame($id) {

        if ($this->session->staut == 'admin') {
            if ($this->input->post()) {
                $data = $this->input->post();
                $id = $this->input->post('ID_GAMES');
                unset($data['Modifier']);

                $this->load->model['product_models'];
                $this->product_models->modifyGame($id, $data);
                redirect('product/listGame');
            } else {
                $this->load->model('product_models');
                $gameDetail = $this->product_models->detail($id);
                if (empty($gameDetail)) {
                    echo "<p>L'id " . $id . "n'existe pas dans notre base de données, merci d'en essayer un autre.</p>";
                    exit;
                }
                $view['listGame'] = $this->product_models->listGame();
                $view['category'] = $this->category_models->listCategory();
                $this->load->view('modifyGame', $view);
            }
        } else {
            redirect('home/index');
        }
    }

    public function deleteGame($id) {
        if ($this->session->statut == 'admin') {
            $this->load->model('product_models');
            $this->product_models->deleteGame($id);
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

?>