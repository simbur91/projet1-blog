<?php
include_once('modeles/blog/Connexion.php');

if (!isset($_GET['section']) OR $_GET['section'] == 'inscription')
{
    include_once('controllers/blog/inscription.php');

}