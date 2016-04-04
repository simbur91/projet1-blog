<?php
include_once('modeles/blog/bdd.php');

if (!isset($_GET['section']) OR $_GET['section'] == 'dashboard')
{
    include_once('controllers/admin/dashboard.php');

}