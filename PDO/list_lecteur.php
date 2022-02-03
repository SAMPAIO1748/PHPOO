<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <-- Exercie faire la page list_lecteur.php qui va affichier la liste des lecteurs de la table lecteur de la bdd bibliotheque -->
        <-- Faire la page show_lecteur.php qui va afficher un lecteur de la table lecteur de la bdd bibliotheque, selectionné grâce à son id -->
            <-- Si vous avez fini reprenez les exercices du fichier que j'ai donné sur Discord : TP01_-_Algorithmique_PHP.pdf -->

                <?php

                $bdd  = new PDO('mysql:host=localhost;dbname=bibliotheque', 'root', 'root');
                $sql = "SELECT * FROM lecteur";
                $requete = $bdd->prepare($sql);
                $requete->execute();

                $resultat  = $requete->fetchAll(PDO::FETCH_ASSOC);

                //var_dump($resultat);

                ?>


                <table>
                    <thead>
                        <tr>
                            <td>Nom</td>
                            <td>Prénom</td>
                            <td>Adresse</td>
                            <td>Code postal</td>
                            <td>Date de naissance</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        foreach ($resultat as $lecteur) {
                            echo "<tr><td><a href='show_lecteur.php?id=" .
                                $lecteur['id'] . "' >" .
                                $lecteur['nom'] . "</a></td><td>" .
                                $lecteur['prenom'] . "</td><td>" .
                                $lecteur['adresse'] . "</td><td>" .
                                $lecteur['code_postal'] . "</td><td>" .
                                $lecteur['date_naissance'] . "</td></tr>";
                        }

                        ?>
                    </tbody>
                </table>
</body>

</html>