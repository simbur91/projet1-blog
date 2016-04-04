<?php
function getadmin($pseudo,$password){
    $pseudo=(string)$pseudo;
    $password=(string)sha1($password);
global $bdd;
$req=$bdd->prepare('SELECT pseudo,password FROM users WHERE pseudo=:pseudo and password=:password and statut=1');
$req->bindParam(':password',$password,  PDO::PARAM_STR);
$req->bindParam(':pseudo',$pseudo,  PDO::PARAM_STR);
$req->execute();
$users=$req->fetch();
    return $users;
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

