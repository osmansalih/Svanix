<?php
$connect = new mysqli($hostname, $username, $password, $database);

if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}
?>
