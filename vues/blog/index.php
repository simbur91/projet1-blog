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
        if(isset($_GET['message']) && $_GET['message']=='deconnecter'){
            echo '<p class="deco">Vous vous êtes déconnecté</p>';
            $time_out = 5;
            $url='blog.php';
            header("refresh: $time_out; url=$url");
        }
        
        foreach ($billets as $billet) {
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
                    <br/><?php if(isset($_SESSION['pseudo'])) ?>
                         <a href="delete.php?table=billets&id=<?php echo $billet['id']; ?>">Supprimer</a>
                    <a href="editer.php?billet=<?php echo $billet['id']; ?>">Modifier</a></p>

                </p>

            </article>
            <?php
        }
        ?>
    </body>
</html>