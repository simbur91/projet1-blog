<?php
include_once('modeles/blog/bdd.php');

if (!isset($_GET['section']) OR $_GET['section'] == 'addbillet')
{
    include_once('controllers/admin/edition_post.php');

}