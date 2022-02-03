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

    // La classe PDO de PHP est une classe qui existe déjà dans PHP
    // elle permet de se connecter à des bases de données et ainsi
    // faire des requêtes SQL. On pourra ainsi réaliser le CRUD 
    // (Create Read Update et Delete) d'une table d'une base de données

    //////////////////////////////////////////////////////////////user  //password
    $bdd = new PDO('mysql:host=localhost;dbname=bibliotheque', 'root', 'root'); // Connexion pour MAMP
    // $bdd = new PDO('mysql:host=localhost;dbname=bibliotheque', 'root', '' ); Connexion pour XAMPP
    // Connexion à la base de données
    $sql = "SELECT * FROM creation";
    // Requête SQL sous forme de chaînes de caractères PHP.
    $requete = $bdd->prepare($sql);
    // Préparation de la requête
    $requete->execute();
    // Execution de la requête
    $resultat = $requete->fetchAll(PDO::FETCH_ASSOC);
    // Mise sous forme de tableau (associatif) du résultat
    // la fonction fetchAll récupère toutes les eentées de la requete et les range dans un tableau
    // PDO::FETCH_ASSOC fait que le tableau créer est un tableau associatif.

    //var_dump($resultat);

    ?>

    <table>

        <thead>
            <tr>
                <th>Titre</th>
                <th>Description</th>
                <th>Gallerie</th>
                <th>Date de création</th>
            </tr>
        </thead>
        <tbody>

            <?php

            foreach ($resultat as $creation) {
                echo "<tr><td><a href='show_creation.php?id=" .
                    $creation['id'] . "'>" .
                    $creation['titre'] . "</a></td><td>" .
                    $creation['description'] . "</td><td>" .
                    $creation['galerie'] . '</td><td>' .
                    $creation['date_creation'] . "</td><td><a href='update_form_creation.php?id=" .
                    $creation['id'] . "'>Modifier la création</a></td></tr>";
            }

            ?>

        </tbody>
        <---- Faire le update pour le lecteur -->

    </table>

</body>

</html>