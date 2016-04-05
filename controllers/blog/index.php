<?php

include_once 'modeles/blog/getbillets.php';
include_once 'modeles/blog/getpagination.php';
$limit=  explode('-',getpagination('billets'));

if (isset($_GET['page'])) {
        $page = (int) $_GET['page'];
        if ($page > $limit[1] || $page < 0) {
            header('Location:vues/blog/404.php');
        }
    } else {
        $page = 1;
    }
$premiersbillets = ($page - 1) * $limit[0];
$billets=getbillets($premiersbillets, $limit[0]);

foreach ($billets as $cle => $billet) {
    $billets[$cle]['titre']=  htmlspecialchars($billet['titre']);
    $billets[$cle]['contenu']=  nl2br(htmlspecialchars($billet['contenu']));
    $billets[$cle]['date_creation']=$billet['date_creation'];
    
}

 $nompage='blog';
include_once 'vues/blog/index.php';
include_once 'vues/blog/pagination.php';