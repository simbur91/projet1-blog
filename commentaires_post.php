<?php
include_once('modeles/blog/Connexion.php');

if (!isset($_GET['section']) OR $_GET['section'] == 'commentaires_post')
{
    include_once('controllers/blog/commentaires_post.php');
    
}