<?php

//membuat class User
class User {

// membuat public property
    public $email;
    public $password;

//membuat konstanta
    const MINCHARS = 8;

//membuat public method
    public function login(){
        return 'Logging in with a vengeange ...';
    }

    public function logout(){
        return 'Logging out ...';
    }

    public function setPassword ($string)
    {
        if (strlen($string) < self::MINCHARS) {
            throw new Exception('The password should be at least ' . self::MINCHARS . 'characters long.');

        }
        $this->password = hash('sha256', $string);
    }
}