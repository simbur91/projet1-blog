<?php


if (isset($_POST['commentaire']) && !empty($_POST['commentaire'])) {
    $texte = stripslashes($_POST['commentaire']);
    $texte = htmlspecialchars($texte);
    $texte = nl2br($texte);

    // On fait passer notre texte à la moulinette des regex
    $texte = preg_replace('#\[b\](.+)\[/b\]#isU', '<strong>$1</strong>', $texte);
    $texte = preg_replace('#\[i\](.+)\[/i\]#isU', '<em>$1</em>', $texte);
    $texte = preg_replace('#http://[a-z0-9._/-]+#i', '<a href="$0">$0</a>', $texte);

    if (!empty($_POST['email'])) {
        if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}?#", $_POST['email'])) {
            echo 'email valide';
        } else {
            echo 'email invalide';
        }
    }
    include 'modeles/blog/commentaire_post.php';
    header('Location:commentaires.php?billet=' . $idbillet);
} else {
    echo 'Veuillez remplir le champ commentaire';
}
?>