<?php
function commentairesvalidation()
{
    global $bdd;
    $req = $bdd->prepare('SELECT b.id,b.titre, b.contenu,DATE_FORMAT(date_creation,\'%d/%m/%Y\')AS date_creation ,v.auteur, v.commentaire,v.email, DATE_FORMAT(date_commentaire, \'%d/%m/%Y à %Hh%imin%ss\') AS date_commentaire_fr'
        . '                  FROM billets b'
        . '                 LEFT JOIN validation v ON b.id=v.billet_id WHERE statut =0');
    $req->execute();
    $validation = $req->fetchAll();
    return $validation;
}

