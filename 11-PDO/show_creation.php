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
    // connexion à la base de données.
    $sql = "SELECT * FROM creation WHERE id = :id";
    // Requête SQL sous forme de chaîne de caractères PHP, :id indique que sa valeur sera dynamique
    // et elle sera donnée juste après.
    $requete = $bdd->prepare($sql);
    // Préparation de la requête
    $requete->bindValue(':id', $id, PDO::PARAM_INT);
    // Attribution de la valeur à la variable :id tout en la sécurisant en indiquant le type de la variable
    // (integer)
    $requete->execute();
    // Execution de la requête
    $resultat = $requete->fetch(PDO::FETCH_ASSOC);
    // Rangement du résultat dans un tableau
    // fecth récupère le dernier résultat de la requête et le range dans un tableau

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
            <tr>

                <td><?php echo $resultat['titre'] ?></td>
                <td><?php echo $resultat['description'] ?></td>
                <td> <?php echo $resultat['galerie'] ?> </td>
                <td> <?php echo $resultat['date_creation'] ?> </td>

            </tr>

        </tbody>

    </table>


</body>

</html>