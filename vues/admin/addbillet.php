<?php
include_once 'modeles/admin/secu.php';
$token = generer_token('addbillet');
if (!isset($_SESSION['pseudo'])) {
    echo '<p class="deco">Vous n\'êtes pas autorisé à acceder à cette zone</p>';
    include('connexion.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Administration</title>
    <link href="vues/blog/style.css" rel="stylesheet" />
</head>

<body>
<h1>Ajouter un billet</h1>
<p>
    <a href="dashboard.php">Administration</a><br/>
    <a href="deconnexion.php">Déconnexion</a>
    <a href="blog.php">Liste des billets</a>
</p>
<p><a href="addbillet.php">Ajouter un billet</a></p>
<?php if(isset($_GET['message']))
    echo '<p class="envoie">Le billet a bien été ajouté </p>';?>

<form method="post" action="addbillet.php">
    <label for="titre">Titre:</label><input type="text" name="titre" id="titre" required/>
    <label for="auteur">Auteur :</label><input type="text" name="auteur" id="auteur" value="<?php echo $_SESSION['pseudo']; ?>"/>
    <label for="contenu">Contenu :</label><textarea name="contenu" id="contenu" required></textarea>
    <input type="hidden" name="token" id="token" value="<?php echo $token; ?>"/>
    <input type="submit" name="submit" value="Ajouter" class="envoyer"/>
</form>

</body>
</html>