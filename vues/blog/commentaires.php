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

        <?php
        foreach ($commentaires as $commentaire) {
            $avatar = "http://2.gravatar.com/avatar/" . sha1($commentaire['email']);
            ?>
            <article>
                <h3>
    <?php echo $commentaire['titre']; ?>
                    <em>le <?php echo $commentaire['date_creation']; ?></em>
                </h3>

                <p>
    <?php echo $commentaire['contenu']; ?>
                    <br />
            </article>
            <div id="com">   

                <p><img src="<?php echo $avatar; ?>"<strong><?php echo $commentaire['auteur']; ?></strong> le <?php echo $commentaire['date_commentaire_fr']; ?></p>
                <p> <?php echo $commentaire['commentaire']; ?></p>
            </div>
    <?php
}
?>
         <form method="post" action="controllers/blog/commentaires_post.php?billet=<?php echo $_GET['billet']; ?>">
        <fieldset>
            <legend>Ajouter un commentaire</legend>
            <label for="pseudo"> Pseudo</label><input type="text" name="pseudo" id="pseudo"/><br/>
            <label for="email">E-mail</label><input type="email" id="email" name="email"/><br/>
            <label for="commentaire">Commentaire</label><textarea name="commentaire" id="commentaire" ></textarea><br/>
            <input type="submit" value="Envoyer" class="envoyer"/>
        </fieldset>
    </form>  
    </body>
</html>

         