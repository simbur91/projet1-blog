<?php
include_once 'modeles/admin/manager.php';
if(isset($_GET['token'])) {
    valider($_GET['id']);
    header('Location:dashboard.php?message=envoyer');
}