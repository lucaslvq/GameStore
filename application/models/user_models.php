<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class user_models extends CI_Model {

    public function signIn() {
        $verifSignIn = $this->db->query('SELECT pseudo, password FROM users WHERE pseudo = ?', $account);
        $account = $verifSignIn->row();
        return $account;
    }

    public function signUp() {
        
        $passwordHash = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
       
        $data = $this->input->post();
        $data['password'] = $passwordHash;
     
        unset($data['confirmPassword']);
        unset($data['submit']);

        $this->db->insert('users', $data);
    }

}

?>