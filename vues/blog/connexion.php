<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mon blog</title>
        <link href="vues/blog/style.css" rel="stylesheet" /> 
    </head>

    <body>
        <a href='inscription.php'>S'inscrire</a>
        <a href='blog.php'>Liste des billets</a>
        <div id="connec">
         <form method="post" action="connexion.php">
             <h2>Connexion</h2>
            <label for="pseudo"> Pseudo</label><input type="text" name="pseudo" id="pseudo"  required="required"/><br/>
            <label for="passwd">Mot de passe</label><input type="password" id="email" name="password"  required="required"/><br/>
           
            <input type="submit" value="Envoyer" class="envoyer"/>
    </form>
        </div>
    </body>

