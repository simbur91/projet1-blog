<?php
include_once 'modeles/admin/secu.php';
$token = generer_token('edition');
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
    <title>Mon blog</title>
    <link href="vues/blog/style.css" rel="stylesheet" />
</head>

<body>
<form method="post" action="edition_post.php?billet=<?php echo $billet['id'];?>">

        <h4>Ajouter un billet</h4>
        <label for="titre"> Titre</label><input type="text" name="titre" id="titre" value="<?php echo $billet['titre'];?>"/><br/>
        <label for="auteur">Auteur</label><input type="auteur" id="auteur" name="auteur" value="<?php echo $billet['auteur'];?>"/><br/>
        <label for="contenu">contenu</label><textarea name="contenu" id="contenu" cols="50" rows="10"><?php echo $billet['contenu'];?>></textarea><br/>
        <input type="hidden" name="token" id="token" value="<?php echo $token; ?>"/>
        <input type="submit" name="submit" value="Envoyer" class="envoyer"/>

</form>
</body>
</html>