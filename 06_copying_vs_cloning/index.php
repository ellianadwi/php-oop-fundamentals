<?php

//memanggil file user.php
require 'user.php';

// membuat objek dari class User
$joost = new User();

//mengatur property
$joost->setEmail('joost@tutsplus.com');
$joost->setPassword('12576rhgfsad');

//mengcopy data $joost
$mike = clone $joost;

//mengatur property
$mike->setEmail('mike@tutplus.com');
$joost->setEmail('joost@tutsplus.com');

//menampilkan type data variabel
var_dump($joost);
echo '<br>';
var_dump($mike);
echo '<br>';
