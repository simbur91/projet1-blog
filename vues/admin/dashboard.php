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
    <title>Administration</title>
    <link href="vues/blog/style.css" rel="stylesheet" />
</head>

<body>
<h1>Commentaires à valider !</h1>


<a href='connexion.php'>Connexion</a>
<a href='inscription.php'>S'inscrire</a>
<?php
foreach($validations as $validation)
{
?>
<article>
    <h3>
        <?php echo $validation['titre']; ?>
        <em>le <?php echo $validation['date_creation']; ?></em>
    </h3>

    <p>
        <?php echo $validation['contenu']; ?>
        <br />

    </p>
</article>
<?php
}