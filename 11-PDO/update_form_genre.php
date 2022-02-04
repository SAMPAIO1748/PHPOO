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

    $id = $_GET['id'];

    $bdd = new PDO('mysql:host=localhost;dbname=bibliotheque', 'root', 'root');
    $sql = "SELECT * FROM genre WHERE id = :id";
    $requete = $bdd->prepare($sql);
    $requete->bindValue(':id', $id, PDO::PARAM_INT);
    $requete->execute();
    $resultat = $requete->fetch(PDO::FETCH_ASSOC);

    //var_dump($resultat);

    ?>

    <h1>Modifier le genre</h1>

    <form action="update_genre.php" method="post">
        <input type="number" name="id" id="" class="display-none" value="<?php echo $resultat['id'] ?>">
        <input type="text" name="libelle" id="" value="<?php echo $resultat['libelle'] ?>">
        <input type="submit" value="Enregistrer">
    </form>

    <style>
        .display-none {
            display: none;
        }
    </style>
</body>

</html>