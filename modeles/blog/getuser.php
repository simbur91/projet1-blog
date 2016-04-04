<?php
function getuser($pseudo,$password){
    $pseudo=(string)$pseudo;
    $password=(string)$password;
global $bdd;
$req=$bdd->prepare('SELECT pseudo FROM users WHERE pseudo=:pseudo and password=:password');
$req->bindParam(':password',$password,  PDO::PARAM_STR);
$req->bindParam(':pseudo',$pseudo,  PDO::PARAM_STR);
$req->execute();
$user=$req->fetch();
return $user;
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

