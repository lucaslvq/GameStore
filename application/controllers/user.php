<?php

class user extends CI_Controller
{
    /* Permet de ce connecter */
    public function signIn()
    {

        // Ont éffectue les test de vérification sur les champs rentrés.
        $this->form_validation->set_error_delimiters('<span class="error">', '</span>');

        $this->form_validation->set_rules('mail','Email',
                                    array('required', 'regex_match[/^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/]'),
                                    array('required' => 'Saisissez une adresse mail !', 'regex_match' => 'Votre adresse mail comporte des erreurs'));

        $this->form_validation->set_rules('password','Mot de passe',
                                    array('required', 'regex_match[/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).{6,}$/]'),
                                    array('required' => 'Saisissez un mot de passe !', 'regex_match' => 'Votre mot de passe comporte des erreurs'));
        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('header');
            $this->load->view('signIn');
        } else {
            // Ont défini le compte et le mot de passe.
            $email = $this->input->post('mail');
            $password = $this->input->post('password');
            
            
            // Ont récupére les informations sur l'utilisateur en db.
            $infoUser = $this->User_model->signIn($email);
            
            $passwordHash = password_verify($password, $infoUser->password);
            
            if($email == $infoUser->password && $passwordHash){
                $this->session->set_userdate(array('user' => $infoUser));
                $this->load->view('listGame');
            } else {
                $data['error'] = 'Votre compte est invalide';
                $this->load->view('signIn', $data);
            }
        }
    }
            
              

    /* Permet de s'inscrire */
    public function signUp()
    {
        // Ont éffectue les test de vérification sur les champs rentrés.
        $this->form_validation->set_error_delimiters('<span class="error">', '</span>');

        $this->form_validation->set_rules('firstName','Nom',
                                    array('required', 'regex_match[/^[a-zA-Zzàáâäçèéêëìíîïñòóôöùúûü-]{1,30}$/]'),
                                    array('required' => 'Saisissez un nom !', 'regex_match' => 'Votre prénom comporte des erreurs'));

        $this->form_validation->set_rules('secondName','Prénom',
                                    array('required', 'regex_match[/^[a-zA-Zzàáâäçèéêëìíîïñòóôöùúûü-]{1,30}$/]'),
                                    array('required' => 'Saisissez un prénom !', 'regex_match' => 'Votre nom comporte des erreurs'));

        $this->form_validation->set_rules('pseudo','Pseudo',
                                    array('required', 'regex_match[/^[a-zA-Z0-9_]{3,16}$/]'),
                                    array('required' => 'Saisissez un pseudo !', 'regex_match' => 'Votre pseudo comporte des erreurs'));

        $this->form_validation->set_rules('mail','Email',
                                    array('required', 'regex_match[/^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/]'),
                                    array('required' => 'Saisissez une adresse mail !', 'regex_match' => 'Votre adresse mail comporte des erreurs'));

        $this->form_validation->set_rules('phone','Téléphone',
                                    array('required', 'regex_match[/^[a-zA-Z0-9_]{3,16}$/]'),
                                    array('required' => 'Saisissez un numéro de téléphone !', 'regex_match' => 'Votre numéro de téléhphone comporte des erreurs'));

        $this->form_validation->set_rules('password','Mot de passe',
                                    array('required', 'regex_match[/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).{6,}$/]'),
                                    array('required' => 'Saisissez un mot de passe !', 'regex_match' => 'Votre mot de passe comporte des erreurs'));

        $this->form_validation->set_rules('confirmPassword','Comfirmation du mot de passe',
                                    array('required', 'matches[password]'),
                                    array('required' => 'Confirmer votre mot de passe !', 'matches' => 'Votre mot de passe n\'est pas identique avec le précédent'));

        // $this->form_validation->set_rules('date','Date de naissance',
        //                             array('required', 'regex_match[/^([0-2]{1}[0-9]{1}|[3]{1}[0-1]{1})(\-)(0[1-9]{1}|1[0-2]{1})(\-)[0-9]{4}$/]'),
        //                             array('required' => 'Entrer une date de naissance !', 'regex_match' => 'La date de naissance comporte des erreurs'));
        

        // Ci je formulaire comporte des erreurs ont le relance, sinon ont éffectue l'insertion de l'uti:isateur dans la db.
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('header');
            $this->load->view('signUp');
        } else {

            // Récupération de l'email et hash du mot de passe.
            $mail = $this->input->post('mail');
            $passwordHash = password_hash($this->input->post('password'), PASSWORD_DEFAULT);

            // Création de la clé random.
            $set = "123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
            $code = substr(str_shuffle($set), 6, 20);
            
            $user = $this->input->post();
            unset($user['confirmPassword']);
            $user['mail'] = $mail;
            $user['password'] = $passwordHash;
            $user['USER_KEY'] = $code;
            $user['USER_ACTIVE'] = false;
            $login = $this->input->post('pseudo');
            $this->User_model->signUp($user);

            // Ont include le mail et ont défini les valeurs de l'email.
            include 'application/views/mail.php';
            $this->email->from('contact@gamestore.com');
            $this->email->to($mail);
            $this->email->set_mailtype("html");
            $this->email->subject('Confirmation inscription');
            $this->email->message($messageComfirmMail);
            $this->email->send();

            // L'email à était envoyer ont affiche le message d'envois du mail.
            $this->load->view('header');
            $this->load->view('signUpSucces', $user);
        }
    }


    public function activateUser($login, $code)
    {
        
        // Ont récupére la clé de l'utilisateur via l'uri.
        $code = $this->uri->segment(4);
        // Ont récupére l'id  de l'utilisateur
        $user = $this->User_model->selectUser($login);
        
        // Si le test de code est OK ont active le compte sinon.
        if ($user->USER_KEY == $code); {
            
            $user->USER_ACTIVE = true;
            
            $activateQuery = $this->User_model->activateAccount($user, $login);
            
            if ($activateQuery){
                $this->load->view('header');
                $this->load->view('signUpComfirm');
                
            } else {
                echo 'Compte invalide';
            }
            
            header ("Refresh: 5; ".site_url('product/listGame'));
        }
    }
}
