<?php
function editer($titre,$auteur,$contenu,$id){
    $titre=(string)$titre;
    $contenu=(string)$contenu;
    $auteur=(string)$auteur;
    $id=$_GET['billet'];
    global $bdd;
    $req=$bdd->prepare('UPDATE billets SET titre=:titre,contenu=:contenu,auteur=:auteur WHERE id=:id');
    $req->bindParam(':titre',$titre,  PDO::PARAM_STR);
    $req->bindParam(':contenu',$contenu,  PDO::PARAM_STR);
    $req->bindParam(':auteur',$auteur,  PDO::PARAM_STR);
    $req->bindParam(':id',$id,  PDO::PARAM_INT);
    $req->execute();
}