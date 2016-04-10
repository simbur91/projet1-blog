<?php
session_start();

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
    <h1>Administration</h1>
        <h2>Commentaires à valider !</h2>
    <p>
        <a href="dashboard.php">Administration</a><br/>
        <a href="deconnexion.php">Déconnexion</a>
        <a href="blog.php">Liste des billets</a>
        </p>
        <p><a href="addbillet.php">Ajouter un billet</a></p>
        <?php
        $currentbilletid = $lastbilletid = null;

        foreach ($validations as $validation) {
            $currentbilletid = $validation['id_billet'];
            if ($validation['id_billet'] = $validation['id']) {

                if ($currentbilletid != $lastbilletid) {
                    ?>

                    <article>
                        <h3>
                            <?php echo $validation['titre']; ?>
                            <em>le <?php echo $validation['date_creation']; ?></em>
                        </h3>

                        <p>
                            <?php echo $validation['contenu']; ?>
                            <a href="editer.php?id=<?php echo $validation['id'];?>&table=billets">Modifier</a>
                            <a href="delete.php?id=<?php echo $validation['id'];?>&table=billets">Supprimer</a>
                            <br />

                        </p>
                    </article>
                <?php } ?>
                <div class="com">
                    <strong><?php echo $validation['auteur']; ?></strong> le <?php echo $validation['date_commentaire_fr']; ?></p>
                <p> <?php echo $validation['commentaire']; ?>
                    <a href="valider.php?id=<?php echo $validation['id_com'];?>&table=commentaires">Valider</a>
                    <a href="delete.php?id=<?php echo $validation['id_com'];?>&table=commentaires">Supprimer</a>
                </p></div>
            <?php
        }
        $lastbilletid = $currentbilletid;
    }


