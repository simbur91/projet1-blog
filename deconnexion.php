<?php
include_once('modeles/blog/bdd.php');

if (!isset($_GET['section']) OR $_GET['section'] == 'deconnexion')
{
    include_once('controllers/admin/deconnexion.php');

}