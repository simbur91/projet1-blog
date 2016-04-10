<?php
function delete($id,$table){
    $id=$_GET['id'];
    $table=$_GET['table'];
    global $bdd;
    $req=$bdd->query('DELETE FROM '.$table.' WHERE id='.$id);
}
function valider($idcom){
    $idcom=$_GET['id'];
    global $bdd;
    $req=$bdd->query('UPDATE FROM commentaires SET statut=1 WHERE id='.$idcom);
}
