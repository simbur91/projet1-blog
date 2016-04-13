<?php
include_once 'modeles/admin/manager.php';
valider($_GET['id']);
header('Location:dashboard.php?message=envoyer');