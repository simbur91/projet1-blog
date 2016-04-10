<?php
include_once('modeles/blog/bdd.php');

if (!isset($_GET['section']) OR $_GET['section'] == 'delete')
{
    include_once('controllers/admin/delete.php');

}