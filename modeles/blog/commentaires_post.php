<?php
function addcom($contenu,$email,$pseudo){
global $bdd;
$req = $bdd->prepare('INSERT INTO validation (auteur,commentaire,email,id_billet,date_commentaire) VALUES (?,?,?,?,NOW())');
    $req->execute(array($_POST['pseudo'], $_POST['commentaire'], $_POST['email'], $_GET['billet']));
    $idbillet = $_GET['billet'];
}

