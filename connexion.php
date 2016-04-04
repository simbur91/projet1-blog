<?php
include_once('modeles/blog/bdd.php');

if (!isset($_GET['section']) OR $_GET['section'] == 'connexion')
{
    include_once('controllers/blog/connexion.php');

}