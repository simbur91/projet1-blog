<?php

include_once('modeles/blog/bdd.php');

if (!isset($_GET['section']) OR $_GET['section'] == 'index')
{
    include_once('controllers/blog/index.php');
}