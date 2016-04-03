
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
            header('Location:./../../vues/blog/inscription.php?passwd=mauvais');
        }

    }else {
            header('Location:./../../vues/blog/inscription.php?email=mauvais');
    }

}else{
    header('Location:./../../vues/blog/inscription.php?&form=mauvais');
}
if($_GET['email']&&$_GET['form']&&$_GET['passwd'] != 'mauvais'){
    header('Location:../../vues/blog/404.php');
}