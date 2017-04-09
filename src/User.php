<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author marcinurbaniak
 */
class User {
    
    private $id;
    private $username;
    private $hashPass;
    private $email;
    
    
    public function __construct() {
        $this->id = -1;
        $this->username = "";
        $this->email = "";
        $this->hashPass = "";
    }
    
    public function getId() {
        return $this->id;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getHashPass() {
        return $this->hashPass;
    }

    public function getEmail() {
        return $this->email;
    }



    public function setUsername($username) {
        $this->username = $username;
    }

    public function setHashPass($hashPass) {
        $this->hashPass = $hashPass;
    }
    
    public function setPassword($password)
    {
       $this->hashPass = password_hash($password, PASSWORD_BCRYPT);
    }

    public function setEmail($email) {
        $this->email = $email;
    }


    
    
}
