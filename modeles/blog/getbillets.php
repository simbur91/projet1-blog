<?php
//include_once 'getpagination';
function getbillets($offset,$limit){
    global $bdd;
    $offset=(int)$offset;
    $limit=(int)$limit;
    
    $req = $bdd->prepare('SELECT id,titre, contenu,DATE_FORMAT(date_creation,\'%d/%m/%Y\')AS date_creation   '
            . 'FROM billets ORDER BY id DESC LIMIT :offset,:limit');
    $req->bindParam(':offset',$offset,  PDO::PARAM_INT);
    $req->bindParam(':limit',$limit,  PDO::PARAM_INT);
    $req->execute();
    $billets=$req->fetchAll();
    
    return $billets;
       
}