<?php
session_start();
?>
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
        if(isset($_SESSION['pseudo'])) {
            echo '<a href="dashboard.php">Administration</a><br/><a href="deconnexion.php">Déconnexion</a>'
            ;
        }else{
        
        echo'<a href="connexion.php">Connexion</a><a href="inscription.php">S\'inscrire</a>';
        }
        ?>
        <article>
                <h3>
    <?php echo $commentaire['titre']; ?>
        <em>le <?php echo $commentaire['date_creation']; ?></em>
        </h3>

        <p>
            <?php echo $commentaire['contenu']; ?>
            <em><a href="blog.php">Liste des billets</a></em>
            <a href="editer.php?id=<?php echo $commentaire['id']; ?>">Modifier</a>
            <a href="delete.php?id=<?php echo $commentaire['id'];?>&table=billets">Supprimer</a></p>

            <br />
        </p>
            </article>
          
        <?php
                if(isset($_GET['message']) && $_GET['message']=='envoyer'){
            echo '<p class="envoie">Votre commentaire a bien été enregistré et attend d\'être soumis à validation </p>';
        }

        foreach ($commentaires as $commentaire) {
            $avatar="http://2.gravatar.com/avatar/" . md5($commentaire['email']);
           if(!empty($commentaire['commentaire'])){
            ?>
<div class="com">
             

                <p><img src="<?php echo $avatar; ?>"<strong><?php echo $commentaire['auteur']; ?></strong> le <?php echo $commentaire['date_commentaire_fr']; ?></p>
                <p> <?php echo $commentaire['commentaire']; ?>
                    <a href="delete.php?id=<?php echo $commentaire['id_com'];?>&table=commentaires">Supprimer</a></p>
            </div>
        <?php
        }
}


        ?>
                
         <form method="post" action="commentaires_post.php?billet=<?php echo $_GET['billet']; ?>">
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

         