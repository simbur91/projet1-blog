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
        <h2>Commentaires à valider !</h2>

        <a href="dashboard.php">Administration</a><br/>
        <a href="deconnexion.php">Déconnexion</a>
        <a href="blog.php">Liste des billets</a>
        <?php
        $currentbilletid = $lastbilletid = null;

        foreach ($validations as $validation) {
            $currentbilletid = $validation['billet_id'];
            if ($validation['billet_id'] = $validation['id']) {

                if ($currentbilletid != $lastbilletid) {
                    ?>

                    <article>
                        <h3>
                            <?php echo $validation['titre']; ?>
                            <em>le <?php echo $validation['date_creation']; ?></em>
                        </h3>

                        <p>
                            <?php echo $validation['contenu']; ?>
                            <br />

                        </p>
                    </article>
                <?php } ?>
                <div class="com">
                    <strong><?php echo $validation['auteur']; ?></strong> le <?php echo $validation['date_commentaire_fr']; ?></p>
                <p> <?php echo $validation['commentaire']; ?>
                    <a href="valider.php?commentaire=<?php echo $validation['id_com'];?>">Valider</a>
                    <a href="supprimer.php?commentaire=<?php echo $validation['id_com'];?>">Supprimer</a>
                </p></div>
            <?php
        }
        $lastbilletid = $currentbilletid;
    }


