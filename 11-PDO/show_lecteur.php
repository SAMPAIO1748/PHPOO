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
    $sql = "SELECT * FROM lecteur WHERE id = :id";
    $requete = $bdd->prepare($sql);
    $requete->bindValue(':id', $id, PDO::PARAM_INT);
    $requete->execute();

    $resultat = $requete->fetch(PDO::FETCH_ASSOC);

    //var_dump($resultat);

    ?>

    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Adresse</th>
                <th>Code Postal</th>
                <th>Date de naissance</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $resultat['nom'] ?></td>
                <td><?php echo $resultat['prenom'] ?></td>
                <td><?php echo $resultat['adresse'] ?></td>
                <td><?php echo $resultat['code_postal'] ?></td>
                <td><?php echo $resultat['date_naissance'] ?></td>
            </tr>
        </tbody>
    </table>
</body>

</html>