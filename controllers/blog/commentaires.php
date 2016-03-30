<?php
include_once 'modeles/blog/getcommentaires.php';
$choixbillet=$_GET['billet'];
$commentaires=getcommentaires($choixbillet);

if(!empty($commentaires)){

foreach ($commentaires as $cle => $commentaire) {
    $commentaires[$cle]['titre']=  htmlspecialchars($commentaire['titre']);
    $commentaires[$cle]['contenu']=  nl2br(htmlspecialchars($commentaire['contenu']));
    $commentaires[$cle]['date_creation']=$commentaire['date_creation'];
    $commentaires[$cle]['auteur']=  htmlspecialchars($commentaire['auteur']);
    $commentaires[$cle]['date_commentaire_fr']=$commentaire['date_commentaire_fr'];
    $commentaires[$cle]['commentaire']=  nl2br(htmlspecialchars($commentaire['commentaire']));
    $commentaires[$cle]['email']=$commentaire['email'];
    
    
}

include_once 'vues/blog/commentaires.php';
}else{
    header('Location:vues/404.php');
}

