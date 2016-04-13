<?php
include_once 'modeles/admin/secu.php';
if (isset($_POST['submit'])) {
    $idbillet = $_GET['billet'];
    $contenu = $_POST['contenu'];
    $auteur = $_POST['auteur'];
    $titre = $_POST['titre'];
    if (verifier_token(600, 'http://127.0.0.1/projet1-blog/editer.php', 'edition')) {
        if (!empty($titre)) {
            $titre = htmlspecialchars($titre);
        }

        if (!empty($auteur)) {
            $auteur = htmlspecialchars($auteur);
        }
        if (!empty($contenu)) {
            $texte = stripslashes($contenu);
            $texte = htmlspecialchars($texte);
            $texte = nl2br($texte);


            $texte = preg_replace('#\[b\](.+)\[/b\]#isU', '<strong>$1</strong>', $texte);
            $texte = preg_replace('#\[i\](.+)\[/i\]#isU', '<em>$1</em>', $texte);
            $texte = preg_replace('#http://[a-z0-9._/-]+#i', '<a href="$0">$0</a>', $texte);

            include_once 'modeles/admin/editer.php';
            $idbillet = $_GET['billet'];
            editer($titre, $auteur, $contenu, $idbillet);
            header('Location:blog.php?message=envoyer');

        } else {
            echo '<p class="deco">Veuillez remplir le corps </p>';
        }
    }
}
?>