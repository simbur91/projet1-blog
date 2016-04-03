<?php
function adduser($pseudo,$email,$password){
    global $bdd;
    $req=$bdd->prepare('INSERT INTO users(pseudo,email,password)VALUES(:pseudo,:email,:password)');
    $req->bindParam(':pseudo',$pseudo,  PDO::PARAM_STR);
    $req->bindParam(':email',$email,  PDO::PARAM_STR);
    $req->bindParam(':password',$password,PDO::PARAM_STR);
    $req->execute();
}