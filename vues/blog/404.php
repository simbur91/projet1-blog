<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Mon blog</title>
    <link href="style.css" rel="stylesheet" />
</head>

<body>
<p><strong>Ce billet n'existe pas</strong><br/>
Vous allez être redirigé vers la page d'acceuil</p>
<?php
$time_out = 10; //here you set how many seconds to untill refresh
$url='../../blog.php';
header("refresh: $time_out; url=$url");
?>
</body>
