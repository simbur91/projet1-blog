<?php
include_once 'modeles/blog/getbillet.php';
$id=$_GET['id'];

$billets=getbillet($id);

foreach ($billets as $cle => $billet) {
    $billets[$cle]['titre']=  htmlspecialchars($billet['titre']);
    $billets[$cle]['auteur']=  htmlspecialchars($billet['auteur']);
    $billets[$cle]['contenu']=  nl2br(htmlspecialchars($billet['contenu']));
    $billets[$cle]['id']=  $billet['id'];
    include_once 'vues/blog/editform.php';

}
