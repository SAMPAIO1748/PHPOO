<?php

$bdd = new PDO('mysql:host=localhost;dbname=bibliotheque', 'root', 'root');
$sql = "UPDATE genre SET libelle = :libelle WHERE id = :id";
$requete = $bdd->prepare($sql);
$requete->bindValue(':libelle', $_POST['libelle'], PDO::PARAM_STR);
$requete->bindValue(':id', $_POST['id'], PDO::PARAM_STR);
$requete->execute();


header('Location: list_genre.php');
