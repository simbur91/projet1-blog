<?php
include_once 'modeles/admin/manager.php';
if(isset($_GET['token'])) {
    delete($_GET['id'], $_GET['table']);

    header('Location:dashboard.php?message=supprimer');
}
