<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User_model extends CI_Model {

    /* Permet d'effectuer la connexion */
    public function signIn($email) {
        $this->db->where('mail', $email);
        return $this->db->select('users');
    }

    // Permet l'inscription d'un utilisateur
    public function signUp($user){        
      return $this->db->insert('users', $user);
    }
   
    // Permet d'effectuer l'activation du compte
    public function activateAccount($user, $login){
        $this->db->where('pseudo', $login);
        if ($this->db->update('users',$user)) {
            return true;
        } else {
            return false;
        }        
    }
    
    // Permet de sélectionner un utilisateur
    public function selectUser($login){
        $this->db->where('pseudo', $login);
        return $this->db->get('users')->result()[0];
    }



}
