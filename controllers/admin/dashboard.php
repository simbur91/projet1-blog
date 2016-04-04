<?php
include_once 'modeles/admin/dashboard.php';
$validation=commentairesvalidation();

foreach($validations as $cle =>$validation){
    $validations[$cle]['titre']=  htmlspecialchars($validation['titre']);
    $validations[$cle]['contenu']=  nl2br(htmlspecialchars($validation['contenu']));
    $validations[$cle]['date_creation']=$validation['date_creation'];
    $validations[$cle]['auteur']=  htmlspecialchars($validation['auteur']);
    $validations[$cle]['date_commentaire_fr']=$validation['date_commentaire_fr'];
    $validations[$cle]['commentaire']=  nl2br(htmlspecialchars($validation['commentaire']));
    $validations[$cle]['email']=$validation['email'];

    include_once 'vues/blog/validation.php';
}

