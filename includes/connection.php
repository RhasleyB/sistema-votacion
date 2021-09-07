<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'sistema';

try {
  $link = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
  $connection = mysqli_connect("localhost", "root", "", "sistema");
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>