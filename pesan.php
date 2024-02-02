<?php

include "service/database.php";

if (isset($_POST["pesan"])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $pesan = $_POST["pesan"];

    $sql = "INSERT INTO users (username, email, pesan) VALUES ('$username', '$email', '$pesan')";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsife.css">
</head>
<body>
    <div class="container">
        <form action="pesan.php" method="POST" class="contact-form">
            <p class="p3">Contact Us</p>
            <div class="form-group">
                <input type="text" placeholder="Username" name="username" />
                <input type="email" placeholder="Email" name="email" />
                <textarea placeholder="Pesan" name="pesan" ></textarea>
                <center><button class="button" type="submit" name="pesan">Submit</button></center>
                <center> <button class="button" type="button" onclick="history.back()">Kembali</button></center>
            </div>
        </form>
    </div>
</body>
</html>
