<?php

$titre = $_POST['titre'];
$description = $_POST['description'];
$galerie = $_POST['galerie'];
$date = date('Y-m-d');

$bdd = new PDO('mysql:host=localhost;dbname=bibliotheque', 'root', 'root');
// Connexion à la base de données
$sql = "INSERT INTO creation (titre, description, galerie, date_creation) VALUES (:titre, :description, :galerie, :date)";
// Requête SQL sous forme de chaîne de caractères PHP
$requete = $bdd->prepare($sql);
// Préparation de la requete
$requete->bindValue(':titre', $titre, PDO::PARAM_STR);
// Attribution de la valeur à la variable
$requete->bindValue(':description', $description, PDO::PARAM_STR);
// Attribution de la valeur à la variable
$requete->bindValue(':galerie', $galerie, PDO::PARAM_STR);
// Attribution de la valeur à la variable
$requete->bindValue(':date', $date, PDO::PARAM_STR);
// Attribution de la valeur à la variable
$requete->execute();
// Execution de la requête

header('Location: list_creation.php');
// Redirection vers la page list_creation.php

// Exercice : Créer le code qui permet d'enregistrer un nouveau lecteur dans la bdd.
