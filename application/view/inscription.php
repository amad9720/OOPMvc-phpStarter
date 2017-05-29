<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Inscription</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
</head>

<h2>Inscription</h2>

<form class="form" method="post" action="connexion.php">

    <p>
        <label for="nom_utilisateur">Nom d'utilisateur :</label>
        </br>
        <input type="text" name="nom_utilisateur"  />
    </p>
    <p>
        <label for="mdp">Mot de passe :</label>
        </br>
        <input type="password" name="mdp"/>
    </p>

    <input type="submit" name="inscription" value="Envoyer" />
</form>
<div>