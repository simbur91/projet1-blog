<?php
function addbillet($titre,$contenu,$auteur){
    $titre=(string)$titre;
    $contenu=(string)$contenu;
    $auteur=(string)$auteur;
global $bdd;
$req = $bdd->prepare('INSERT INTO billets(titre,contenu,date_creation,auteur) VALUES (:titre,:contenu,NOW(),:auteur)');
    $req->bindParam(':titre',$titre,  PDO::PARAM_STR);
    $req->bindParam(':contenu',$contenu,  PDO::PARAM_STR);
    $req->bindParam(':auteur',$auteur,  PDO::PARAM_STR);
    $req->execute();
}

