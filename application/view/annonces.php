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
    <?php foreach ($categories as $category): ?>
        <h2> <?php echo $category?> </h2>
        <?php $annonces = Annonce::get_annonces_by_categorie($category->id); ?>
        <?php foreach ($annonces as $annonce): ?>
            <h4> <?php echo $annonce ?> </h4>
        <?php endforeach ?>
    <?php endforeach ?>
</body>

