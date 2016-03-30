<?php
function getcommentaires($choixbillet){
    global $bdd;
    $choixbillet=$_GET['billet'];
    
    $req = $bdd->prepare('SELECT b.id,b.titre, b.contenu,DATE_FORMAT(date_creation,\'%d/%m/%Y\')AS date_creation,c.auteur, c.commentaire,c.email, DATE_FORMAT(date_commentaire, \'%d/%m/%Y à %Hh%imin%ss\') AS date_commentaire_fr'
            . '                  FROM billets b'
            . '                 LEFT JOIN commentaires c ON b.id=c.id_billet WHERE b.id = ?');
    $req->execute(array($choixbillet));
    
    $commentaires=$req->fetchAll();
    
    return $commentaires;
}

