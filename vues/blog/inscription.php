<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Mon blog</title>
    <link href="vues/blog/style.css" rel="stylesheet"/>
    <link href="style.css" rel="stylesheet"/>
</head>

<body>
<a href='blog.php'>Liste des billets</a>

<div id="connec">
    <form method="post" action="inscription.php">
        <h2>Inscription</h2>
        <?php if (isset($_GET['message']) && $_GET['message'] == 'inscrit') {
            echo '<p class="envoie">Merci pour votre inscription</p>';
        } ?>
        <?php if (isset($_GET['message']) && $_GET['message'] == 'mauvais') {
            echo '<p class="erreur">Veuillez remplir tout les champs</p>';
        } ?>
        <?php if (isset($_GET['erreur'])) {
            echo '<p>Veuillez remplir tous les champs</p>';
        } ?>
        <label for="pseudo"> Pseudo</label><input type="text" name="pseudo" id="pseudo" required="required"/><br/>
        <label for="email">Email</label><input type="email" name="email" id="email" required="required"/><br/>
        <?php if (isset($_GET['email'])) {
            echo '<p>adresse mail incorecte</p>';
        } ?>
        <label for="passwd">Mot de passe</label><input type="password" id="email" name="password"
                                                       required="required"/><br/>
        <label for="passwd2">Réécrivez mot de passe</label><input type="password" id="passwd2" name="passwd2"
                                                                  required="required"/><br/>
        <?php if (isset($_GET['passwd'])) {
            echo '<p>Les mots de passe doivent être identique</p>';
        } ?>
        <input type="submit" value="Envoyer" class="envoyer"/>

    </form>
</div>
</body>