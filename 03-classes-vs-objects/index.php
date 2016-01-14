<?php

//Fungsi require tidak hanya menyertakan file namun lebih kepada meminta file (require)
//Jadi jika ada ERROR pada file yang disertakan, PHP akan menampilkan E_COMPILE_ERROR dan script
    // selanjutnya pada file utama tidak akan dijalankan
require 'user.php';

//membuat objek dari class user
$joost = new User();

//mengatur property
$joost->email = 'joost@tutplus.com';
$joost->password = 'ghv7%Lsv7';

//membuat objek baru
$nick = new User();

//mengatur property
$nick->email = 'nic@tutplus.com';
$nick->password = 'ghdhB6Lsv7';

// untuk menampilkan type data yang ada di variabel
var_dump($nick->email);