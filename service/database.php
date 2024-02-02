<?php
// Konfigurasi koneksi ke database
$servername = "localhost";
$username = "root"; // 
$password = ""; // 
$dbname = "pesan"; 

// Membuat koneksi
$db = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($db->connect_error) {
    echo "koneksi berhasil";
    die("errors!");
}
?>