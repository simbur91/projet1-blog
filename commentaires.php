<?php
include_once('modeles/blog/Connexion.php');

if (!isset($_GET['section']) OR $_GET['section'] == 'commentaires')
{
    include_once('controllers/blog/commentaires.php');
    include_once('controllers/blog/commentaires_post.php');
}