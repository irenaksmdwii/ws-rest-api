<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "wsiren";

    $conn = mysqli_connect($server, $username, $password, $database);
    if (!$conn) {
        die("koneksi gagal!!!");
    } 

?>