<?
session_start();

if(!isset($_SESSION['pseudo'])) {
    echo 'Vous n\'êtes pas autorisé´ à acceder à cette zone';
    include('connexion.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Mon blog</title>
    <link href="../vues/blog/style.css" rel="stylesheet" />
</head>

<body>
<h1>Mon super blog !</h1>
<p>Derniers billets du blog :</p>

<a href='connexion.php'>Connexion</a>
<a href='inscription.php'>S'inscrire</a>
<article>
    <h3>