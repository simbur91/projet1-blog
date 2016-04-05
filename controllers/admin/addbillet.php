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
        if (!empty($titre)) {
            $titre = htmlspecialchars($titre);
            if (!empty($auteur)) {
                $auteur = htmlspecialchars($auteur);
            } else {
                echo '<p class="deco">Veuillez remplir ce champ </p>';
            }
        } else {
            echo '<p class="deco">Veuillez remplir ce champ </p>';
        }
    } else {
        echo '<p class="deco">Veuillez remplir ce champ </p>';
    }
} else {
    echo '<p class="deco">Veuillez remplir les champs</p>';
}
