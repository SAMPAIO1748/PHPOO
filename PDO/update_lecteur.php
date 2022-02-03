<?php

$bdd = new PDO('mysql:host=localhost;dbname=bibliotheque', 'root', 'root');
$sql = "UPDATE lecteur SET nom = :nom, prenom = :prenom, adresse = :adresse, code_postal = :code_postal, date_naissance = :date WHERE id = :id";
$requete = $bdd->prepare($sql);
$requete->bindValue(':nom', $_POST['nom'], PDO::PARAM_STR);
$requete->bindValue(':prenom', $_POST['prenom'], PDO::PARAM_STR);
$requete->bindValue(':adresse', $_POST['adresse'], PDO::PARAM_STR);
$requete->bindValue(':code_postal', $_POST['code_postal'], PDO::PARAM_INT);
$requete->bindValue(':date', $_POST['date_naissance'], PDO::PARAM_STR);
$requete->bindValue(':id', $_POST['id'], PDO::PARAM_INT);
$requete->execute();

header('Location: list_lecteur.php');
