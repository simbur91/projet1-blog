<?php
$pseudo=htmlspecialchars(isset($_POST['pseudo']));
$email=isset($_POST['email']);

if (!empty($pseudo)&&!empty($email)&&!empty($_POST['password']) && !empty($_POST['password2'])){
    if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}?#", $email)) {
        echo 'email valide';
        if($_POST['password']==$_POST['password2']){
            $password=sha1($_POST['password']);
            echo 'mot de passe ok';
            adduser($pseudo,$email,$password);
        }else{
            echo 'les mots de passe ne sont pas identique';}
    } else {
        echo 'email invalide';
    }

}else{
    echo '<p>Veuillez remplir tous les champs</p>';
}