<?php
include_once 'modeles/admin/manager.php';
    delete($_GET['id'], $_GET['table']);

    header('Location:dashboard.php?message=supprimer');

