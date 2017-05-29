<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Connexion</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
</head>

<body>

<!<div class="container">

    <div id="login">

        <h2><span class="fontawesome-lock"></span>Connexion</h2>

        <form action="annonces.php" method="POST">

            <fieldset>

                <p><label>Identifiant</label></p>
                <p><input type="text" name="login" placeholder="identifiant"></p>

                <p><label for="password">Mot de passe</label></p>
                <p><input type="password" name="password" placeholder="mot de passe"></p>

                <p><input name="signIn" type="submit" value="Se connecter"></p>
                <p> Pas encore membre ? <a href="inscription.php"> Inscrivez-vous </a> </p>

            </fieldset>


        </form>

    </div>

</div>

</body>