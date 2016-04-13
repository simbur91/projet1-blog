<?php
include_once 'modeles/admin/addbillet.php';
include_once 'modeles/admin/secu.php';
if (isset($_POST['submit'])) {
    $titre = $_POST['titre'];
    $auteur = $_POST['auteur'];
    $contenu = $_POST['contenu'];

    if (verifier_token(600, 'http://127.0.0.1/projet1-blog/addbillet.php', 'addbillet')) {
        if (!empty($contenu)) {
            $texte = stripslashes($contenu);
            $texte = htmlspecialchars($texte);
            $texte = nl2br($texte);


            $texte = preg_replace('#\[b\](.+)\[/b\]#isU', '<strong>$1</strong>', $texte);
            $texte = preg_replace('#\[i\](.+)\[/i\]#isU', '<em>$1</em>', $texte);
            $texte = preg_replace('#http://[a-z0-9._/-]+#i', '<a href="$0">$0</a>', $texte);
            if (!empty($titre)) {
                $titre = htmlspecialchars($titre);
                if (!empty($auteur)) {
                    $auteur = htmlspecialchars($auteur);
                    addbillet($titre, $texte, $auteur);
                    header('Location:addbillet.php?message=envoyer');
                } else {
                    echo '<p class="deco">Veuillez remplir ce champ </p>';
                }
            } else {
                echo '<p class="deco">Veuillez remplir ce champ </p>';
            }
        } else {
            echo '<p class="deco">Veuillez remplir ce champ </p>';
        }


    }
} else {
    include_once 'vues/admin/addbillet.php';
}
?>









