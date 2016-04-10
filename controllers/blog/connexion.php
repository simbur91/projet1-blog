<?php
include_once 'modeles/blog/getadmin.php';
if(isset($_POST['pseudo'])) {
    $pseudo = $_POST['pseudo'];
    $password = $_POST['password'];
    if (getadmin($pseudo, $password)) {
        session_start();
        $_SESSION['pseudo'] = $pseudo;
        unset($_SESSION['token']);
        header('Location:dashboard.php');
    } else {
            echo 'lol';
    }
}else{
    include_once 'vues/blog/connexion.php';
}