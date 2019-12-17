<?php

class home extends CI_Controller {

    /* Permet d'afficher l'index */ 
    public function index() {
        // Appel des models
        $this->load->model('Category_models');
        // Création du tableau de donné
        $data = array();
        $data['category_name'] = $this->category_models->listCategory();
        //Affichage des vues
        $this->load->view('header', $data);

        $this->load->view('footer');
    }
    
    /* Permet de ce connecter */ 
    public function signIn() {
        if ($this->input->post()) {
            $this->form_validation->set_rules('pseudo', 'Pseudo', 'required', 
                                        array('required' => 'Saisissez votre nom d\'utilisateur !'));
            $this->form_validation->set_rules('password', 'Mot de passe', 'required', 
                                        array('required' => 'Saisissez votre mot de passe !'));

            if ($this->form_validation->run() == FALSE) {

                $this->load->view('signIn');
            } else {
                $this->load->model('user_models');
                $account = $this->input->post('pseudo');
                $password = $this->input->post('password');

                $infoUser = $this->user_models->signIn($account);

                if (!empty($infoUser)) {
                    $passwordHash = password_verify($password, $infoUser->password);
                    if ($passwordHash == TRUE) {
                        $this->session->set_userdata('role', $infoUser->ID_RULES);
                        redirect('product/panel');
                    } else {
                        $this->session->set_flashdata('errorPassword', 'Votre mot de passe est incorrect');
                        $this->load->view('signIn');
                    }
                } else {
                    $this->session->flash_data('errorAccount', 'Ce compte n\'exsite pas');
                    $this->load->view('signIn');
                }
            }
        }
    }

    /* Permet de s'inscrire */ 
    public function signUp() {
        // Ont éffectue les test de vérification sur les champs rentrés.
        
        $this->form_validation->set_error_delimiters('<span class="error">', '</span>');
        
        $this->form_validation->set_rules('firstName', 'Nom',
                                    array('required', 'regex_match[/^([A-Z]|[a-z])[a-z]*(-)?[a-z]+$/]'), 
                                    array('required' => 'Saisissez un nom !', 'regex_match' => 'Votre nom comporte des erreurs'));

        $this->form_validation->set_rules('secondName', 'Prénom',
                                    array('required', 'regex_match[/^([A-Z]|[a-z])[a-z]*(-)?[a-z]+$/]'), 
                                    array('required' => 'Saisissez un prénom !', 'regex_match' => 'Votre prénom comporte des erreurs'));

        $this->form_validation->set_rules('pseudo', 'Pseudo', 
                                    array('required', 'regex_match[/^[a-zA-Z0-9_]{3,16}$/]'), 
                                    array('required' => 'Saisissez un pseudo !', 'regex_match' => 'Votre pseudo comporte des erreurs'));

        $this->form_validation->set_rules('mail', 'Email', 'required', 
                                    array('regex_match[/^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_/]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/]'), 
                                    array('required' => 'Saisissez une adress mail !', 'regex_match' => 'Votre adresse mail comporte des erreurs'));

        $this->form_validation->set_rules('phone', 'Téléphone', 
                                    array('required', 'regex_match[/^[a-zA-Z0-9_]{3,16}$/]'), 
                                    array('required' => 'Saisissez un numéro de téléphone !', 'regex_match' => 'Votre numéro de téléhphone comporte des erreurs'));

        $this->form_validation->set_rules('password', 'Mot de passe', 
                                    array('required', 'regex_match[/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).{6,}$/]'), 
                                    array('required' => 'Saisissez un mot de passe !', 'regex_match' => 'Votre mot de passe comporte des erreurs'));

        $this->form_validation->set_rules('confirmPassword', 'Comfirmation du mot de passe', 
                                    array('required', 'matches[password]'), 
                                    array('required' => 'Confirmer votre mot de passe !', 'matches' => 'Votre mot de passe n\'est pas identique avec le précédent'));

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('header');
            $this->load->view('signUp');
            $this->load->view('footer');
        } else {
            $this->load->model('user_models');
            $this->user_models->signUp();
            $this->load->view('signUpSucces');
        }
    }










}

?>