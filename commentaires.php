<?php
include_once('modeles/blog/bdd.php');

if (!isset($_GET['section']) OR $_GET['section'] == 'commentaires')
{
    include_once('controllers/blog/commentaires.php');
    
}