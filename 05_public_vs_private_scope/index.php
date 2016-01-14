<?php

//memanggil file user.php
 require 'user.php';

// membuat objek dari class User
$joost = new User();

//mengatur property
$joost->setPassword('12576rhgfsad');

//menampilkan type data yang ada di variabel
var_dump($joost->getPassword());