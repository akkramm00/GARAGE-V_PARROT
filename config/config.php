<?php
    try
    {
        $bdd = new PDO('mysql:hotst = localhost ; dbname = users;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
die('Erreur'. $e->getMessage());
    }
