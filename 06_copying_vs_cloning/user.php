<?php
class User {

    private $email;
    private $password;
    const MINCHARS = 8;

    public function login(){
        return 'Logging inwith a vengeange ...';
    }

    public function logout(){
        return 'Logging out ...';
    }

    public function setPassword($string)
    {
        if ($this->validatePassword($string) == false) {
            throw new Exception('The password should be at least ' . self::MINCHARS . 'characters long.');
        }

        $this->password = hash('sha256', $string);
    }

    public function setEmail ($string)
    {
        if (! filter_var($string, FILTER_VALIDATE_EMAIL)) {
            throw new Exception('Please provide a valid email.');
        }

        $this->email = $string;
    }

    public function getEmail ()
    {
        return $this->email;
    }

    private function vaidatePassword ($string)
    {
        return strlen($string) < self::MINCHARS ? false : true;
    }
}