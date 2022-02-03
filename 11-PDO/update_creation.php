<?php

$id = $_POST['id'];
$titre = $_POST['titre'];
$description = $_POST['description'];
$galerie = $_POST['galerie'];

$bdd = new PDO('mysql:host=localhost;dbname=bibliotheque', 'root', 'root');
$sql = "UPDATE creation SET titre = :titre, description = :description, galerie = :galerie WHERE id = :id";
$requete = $bdd->prepare($sql);
$requete->bindValue(':titre', $titre, PDO::PARAM_STR);
$requete->bindValue(':description', $description, PDO::PARAM_STR);
$requete->bindValue(':galerie', $galerie, PDO::PARAM_STR);
$requete->bindValue(':id', $id, PDO::PARAM_INT);
$requete->execute();

header('Location: list_creation.php');
