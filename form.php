<?php
// je m'informe si il y'a une erreur
ini_set('display_errors', 'on');
//je me connecet depuis la base//
include('./php/session.php');

// je met une condition//
if (isset($_GET['cv_name']) and isset($_GET['cv_email']) and isset($_GET['message'])) {

  // je prepare la requete à envoyer //
  $requete = $bdd->prepare("INSERT INTO  c_contact (cv_name, cv_email, message) VALUES (?, ?, ?)");
  //j'execute la requete//
  $requete->execute(array($_GET['cv_name'], $_GET['cv_email'], $_GET['message']));
  // je met une page de redirection ou si il y'a erreur je le renvoie vers une pagge erreur 500
  header('Location: ./redirection/index.php?success=true');
  exit;
} else {
  http_response_code(500);
}
