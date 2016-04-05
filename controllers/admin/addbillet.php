<?php

if ($_POST['submit']) {
    $titre = $_POST['titre'];
    $auteur = $_POST['auteur'];
    $contenu = $contenu['contenu'];
    if (!empty($contenu)) {
        $texte = stripslashes($ccontenu);
        $texte = htmlspecialchars($texte);
        $texte = nl2br($texte);

        // On fait passer notre texte à la moulinette des regex
        $texte = preg_replace('#\[b\](.+)\[/b\]#isU', '<strong>$1</strong>', $texte);
        $texte = preg_replace('#\[i\](.+)\[/i\]#isU', '<em>$1</em>', $texte);
        $texte = preg_replace('#http://[a-z0-9._/-]+#i', '<a href="$0">$0</a>', $texte);
    } else {
        echo '<p>Veuillez remplir le champ commentaire</p>';
    }
} else {
    echo '<p>Veuillez remplir les champs</p>';
}

/*
 * DELIMITER |
CREATE TRIGGER after_update_statut after update ON validation
FOR EACH ROW
BEGIN
    if(NEW.statut=1)
    INSERT INTO commentaires(id_billet,auteur,email,commentaire,date_commentaire) VALUES (NEW.id_billet,NEW.auteur,NEW.email,NEW.commentaire,NEW.date_commentaire)
    END IF;
END|
 */