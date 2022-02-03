<?php

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$adresse = $_POST['adresse'];
$code_postal = $_POST['code_postal'];
$date  = $_POST['date_naissance'];

$bdd  = new PDO('mysql:host=localhost;dbname=bibliotheque', 'root', 'root');
$sql = "INSERT INTO lecteur (nom, prenom, adresse, code_postal, date_naissance) VALUES(:nom, :prenom, :adresse, :code_postal, :date)";
$requete = $bdd->prepare($sql);
$requete->bindValue(':nom', $nom, PDO::PARAM_STR);
$requete->bindValue(':prenom', $prenom, PDO::PARAM_STR);
$requete->bindValue(':adresse', $adresse, PDO::PARAM_STR);
$requete->bindValue(':code_postal', $code_postal, PDO::PARAM_INT);
$requete->bindValue(':date', $date, PDO::PARAM_STR);
$requete->execute();

header('Location: list_lecteur.php');
