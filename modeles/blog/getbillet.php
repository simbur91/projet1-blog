<?php
function getbillet($id){
    global $bdd;
    $id=(int)$id;

    $req = $bdd->prepare('SELECT id,titre, contenu,DATE_FORMAT(date_creation,\'%d/%m/%Y\')AS date_creation   '
        . 'FROM billets WHERE id=:id');
    $req->bindParam(':id',$id,  PDO::PARAM_INT);
    $req->execute();
    $billets=$req->fetchAll();

    return $billets;
}