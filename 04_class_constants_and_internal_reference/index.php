<?php

//memanggil file user.php
//dengan require
require 'user.php';

// membuat objek dari class User
$joost = new User();

//mengatur property
$joost->setPassword('sdahsgffg');

//menampilkan type data yang ada di variabel
var_dump($joost);