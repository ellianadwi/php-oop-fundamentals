<?php

/**
 *Typical procedural call
 */
// Set a database connection
 $dbname = 'some_db';
 $username = 'root';
 $password = '';

//Memicu exception dengan perintah Try
 try {
      $conn = new PDO('mysql:host=localhost;dbname=' . $dbname,$username,$password);

//Jika error terjadi maka exception akan dilemparkan dan perintah dibawah ini tidak akan dieksekusi
      $conn->setAttribute(PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
 }

//menangkap exception yang dilempar oleh Try dengan catch
 catch (Exception $e) {
    die($e->getMessage());
 }

 // Menjalankan sebuah query
 $sql = "SELECT * FROM `posts` ORDER BY pubdate DESC";
//Memicu exception dengan perintah Try, contoh: mengecek angka 7
try {
        $result = $conn->query($sql);
 }

//menangkap exception yang dilempar oleh Try dengan catch
 catch (Exception $e) {
    die($e->getMessage());
 }

 // Display post titles
// Judul tampilan posting
 if ($result->rowCount()) {
    foreach ($result as $post) {
        echo '<h1>' . $post['title'] . '</h1>'."\n";
        echo '<h1>' . $post['kategori'] . '</h1>'."\n";
        echo '<h1>' . $post['content'] . '</h1>'."\n";
        echo $post['pubdate'];

// untuk menampilkan tabel yang ada di database some_db

    }
 }

 /**
  *Typical OOPcall
  */
//$post = new PostModel();
//$posts = $post->etchAll();
//foreach ($posts as $post) {
//    echo '<h1>' . $post->title . '</h1>';
//}