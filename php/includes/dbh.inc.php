<?php

$dbservername = "127.0.0.1";
$username = "lauriom";
$password = "Salasana1";
$dbname = "lauriom";

$conn = new mysqli($dbservername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

/**
 * Created by PhpStorm.
 * User: Lauri
 * Date: 02/10/2018
 * Time: 10.14
 */