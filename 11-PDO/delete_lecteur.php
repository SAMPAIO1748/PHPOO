<?php

$bdd = new PDO('mysql:host=localhost;dbname=bibliotheque', 'root', 'root');
$sql = "DELETE FROM lecteur WHERE id = :id";
$requete = $bdd->prepare($sql);
$requete->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
$requete->execute();

header('Location: list_lecteur.php');
