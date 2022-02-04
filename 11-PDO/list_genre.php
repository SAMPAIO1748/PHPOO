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
    $sql = "SELECT * FROM genre";
    $requete = $bdd->prepare($sql);
    $requete->execute();
    $resultat = $requete->fetchAll(PDO::FETCH_ASSOC);

    ?>

    <table>

        <thead>
            <tr>
                <th>Libellé du genre</th>
            </tr>
        </thead>

        <tbody>
            <?php
            foreach ($resultat as $genre) {
                echo "<tr><td><a href='show_genre.php?id=" .
                    $genre['id'] . "'>" .
                    $genre['libelle'] . "</a></td><td><a href='update_form_genre.php?id=" .
                    $genre['id'] . "'>Modifier le genre</a></td><td><a href='delete_genre.php?id=" .
                    $genre['id'] . "'>Supprimer le genre</a></td></tr>";
            }
            ?>
        </tbody>

    </table>

</body>

</html>