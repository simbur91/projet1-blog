<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mon blog</title>
	<link href="vues/blog/style.css" rel="stylesheet" /> 
    </head>
        
    <body>
        <h1>Mon super blog !</h1>
        <p>Derniers billets du blog :</p>
  <a href='vues/blog/connexion.php'>Connexion</a>
        <a href='vues/blog/inscription.php'>S'inscrire</a>
<?php
foreach($billets as $billet)
{
?>
<article>
    <h3>
        <?php echo $billet['titre']; ?>
        <em>le <?php echo $billet['date_creation']; ?></em>
    </h3>
    
    <p>
    <?php echo $billet['contenu']; ?>
    <br />
    <em><a href="commentaires.php?billet=<?php echo $billet['id']; ?>">Commentaires</a></em>
    </p>
</article>
<?php
}
?>
</body>
</html>