
<?php
$pseudo=htmlspecialchars(isset($_POST['pseudo']));
$email=isset($_POST['email']);

if (!empty($pseudo)&&!empty($email)&&!empty($_POST['password']) && !empty($_POST['passwd2'])){
    if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['email'])) {

        if($_POST['password']==$_POST['passwd2']){
            $password=sha1($_POST['password']);

            include_once 'modeles/blog/inscription.php';
            adduser($pseudo,$email,$password);
        }else {
            header('Location:inscription.php?passwd=mauvais');
        }

    }else {
            header('Location:inscription.php?email=mauvais');
    }

}else{

}
include_once 'vues/blog/inscription.php';