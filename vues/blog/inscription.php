<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mon blog</title>
        <link href="style.css" rel="stylesheet" /> 
    </head>

    <body>
        <a href='../../blog.php'>Liste des billets</a>
        <div id="connec">
         <form method="post" action="">
             <h2>Inscription</h2>
             <label for="pseudo"> Pseudo</label><input type="text" name="pseudo" id="pseudo" required="required"/><br/>
            <label for="email">Email</label><input type="email" name="email" id="email" required="required"/><br/>
            <label for="passwd">Mot de passe</label><input type="password" id="email" name="password" required="required"/><br/>
            <label for="passwd2">Réécrivez mot de passe</label><input type="password" id="passwd2" name="passwd2" required="required"/><br/>
            <input type="submit" value="Envoyer" class="envoyer"/>
        
    </form>  
        </div>
    </body>