<?php

//buat class user
class User {

    // membuat public property
    public $email;
    public  $password;

    //membuat public method login
    public function login() {
        return 'Logging in with a vengeange ...';
    }

    //membuat public method logout
    public function logout(){
        return 'Logging out ...';

    }
}