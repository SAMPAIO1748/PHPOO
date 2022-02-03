<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $bdd = new PDO('mysql:host=localhost;dbname=bibliotheque', 'root', 'root');
    $sql = "SELECT * FROM lecteur WHERE id = :id";
    $requete = $bdd->prepare($sql);
    $requete->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
    $requete->execute();
    $resultat = $requete->fetch(PDO::FETCH_ASSOC);

    //var_dump($resultat);

    ?>

    <form action="update_lecteur.php" method="post">

        <input type="number" name="id" class="display-none" value="<?php echo $resultat['id'] ?>">
        <input type="text" name="nom" value="<?php echo $resultat['nom'] ?>">
        <input type="text" name="prenom" value="<?php echo $resultat['prenom'] ?>">
        <input type="text" name="adresse" value="<?php echo $resultat['adresse'] ?>">
        <input type="text" name="code_postal" value="<?php echo $resultat['code_postal'] ?>">
        <input type="date" name="date_naissance" value="<?php echo $resultat['date_naissance'] ?>">
        <input type="submit" value="Enregistrer">

    </form>

    <style>
        .display-none {
            display: none;
        }
    </style>
</body>

</html>