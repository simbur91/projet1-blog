<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Mon blog</title>
    <link href="style.css" rel="stylesheet" />
</head>

<body>
<p><strong>La page auquelle vous tentez d'accéder n'existe pas</strong><br/>
Vous allez être redirigé vers la page d'acceuil</p>
<?php
$time_out = 5; 
$url='../../blog.php';
header("refresh: $time_out; url=$url");
?>
</body>
