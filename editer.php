<?php
include_once('modeles/blog/bdd.php');

if (!isset($_GET['section']) OR $_GET['section'] == 'editer')
{
    include_once('controllers/admin/editer.php');

}