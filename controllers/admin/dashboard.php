<?php
include_once 'modeles/admin/dashboard.php';
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
$validations=commentairesvalidation();


foreach($validations as $cle =>$validation){
    $validations[$cle]['titre']=  htmlspecialchars($validation['titre']);
    $validations[$cle]['contenu']=  nl2br(htmlspecialchars($validation['contenu']));
    $validations[$cle]['date_creation']=$validation['date_creation'];
    $validations[$cle]['auteur']=  htmlspecialchars($validation['auteur']);
    $validations[$cle]['date_commentaire_fr']=$validation['date_commentaire_fr'];
    $validations[$cle]['commentaire']=  nl2br(htmlspecialchars($validation['commentaire']));
    $validations[$cle]['email']=$validation['email'];
    $validations[$cle]['billet_id']=$validation['billet_id'];
    $validations[$cle]['id']=$validation['id'];

    

}

include_once 'vues/admin/dashboard.php';