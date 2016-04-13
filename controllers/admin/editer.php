<?php
include_once 'modeles/blog/getbillet.php';
$id=$_GET['billet'];

$billets=getbillet($id);

foreach ($billets as $cle => $billet) {
    $billets[$cle]['titre']=  htmlspecialchars($billet['titre']);
    $billets[$cle]['contenu']=  nl2br(htmlspecialchars($billet['contenu']));
    include_once 'vues/blog/editform.php';

}
