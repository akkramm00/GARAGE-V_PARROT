<?php
session_start();
if (!$_SESSION['password']) {
    header('Location: Templates\login.php');
}
