<?php
    // $servername = "192.168.56.32";
    // $username = "user1";
    // $password = "password";
    // $database = "bimbel";

    // $conn = mysqli_connect($servername, $username, $password, $database);

    // if (!$conn) {
    //     die("Connection failed: " . mysqli_connect_error());
    // }
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "bimbel";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

?>