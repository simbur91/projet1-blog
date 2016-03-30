<p><strong>Ce billet n'existe pas</strong><br/>
Vous allez être redirigé vers la page d'accueil</p>
<?php
$time_out = 10; //here you set how many seconds to untill refresh
$url='blog.php';
header("refresh: $time_out; url=$url");
?>