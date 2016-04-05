<?php
function commentairesvalidation($offset,$limit)
{
    global $bdd;
    $offset=(int)$offset;
    $limit=(int)$limit;
    $req = $bdd->prepare('SELECT b.id,b.titre, b.contenu,DATE_FORMAT(date_creation,\'%d/%m/%Y\')AS date_creation ,c.id as id_com,c.auteur,c.id_billet, c.commentaire,c.email, DATE_FORMAT(date_commentaire, \'%d/%m/%Y à %Hh%imin%ss\') AS date_commentaire_fr'
        . '                  FROM billets b'
        . '                 LEFT JOIN commentaires c ON b.id=c.id_billet WHERE c.statut =0 order by c.id_billet DESC LIMIT :offset,:limit');
    $req->bindParam(':offset',$offset,  PDO::PARAM_INT);
    $req->bindParam(':limit',$limit,  PDO::PARAM_INT);
    $req->execute();
    $validation = $req->fetchAll();
    return $validation;
}

