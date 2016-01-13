<?php

namespace A\Library;

class user
{
    /**
     * A private property or method is only accessible only from the class
     * itselft AND from it's children xlasses.
     */
    protected $bar;

    /**
     * A public property or method is accessible from anywhere.
     */
    public $baz;

    /**
     * Log in a user
     * @return string
     */
    protected function login(){
        return 'Logging in from User class ...';
    }
}