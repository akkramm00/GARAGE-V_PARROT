<?php
$host = 'localhost';
$db   = 'users';
$user = 'root';
$pass = '';

try {
    // Connect to the database
    $bdd = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
