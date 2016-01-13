<?php

namespace Acme\App;

/**
 * this class extends Acme\App\user
 */
class Administrator extends User {

    public function __construct(){
        $this->isAdmin = true;
    }

    /**
     * Log in a user
     * @return string
     */
    public function login(){

        //Login in our member using the logic in the parent class.
        $message = parent::login();

        //add some administrator-spcific logic
        return $message . ' ... Log yhis action in an administrator\'s table';
    }

    /**
     * This method is for Administrators only
     */
    public function reportForDuty ()
    {
        // Do stuff ...
    }
}