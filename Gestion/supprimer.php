<?php
  //connexion a la base de données
  include_once "connexion.php";
  //récupération de l'id dans le lien
  $iduser = $_GET['iduser'];
  //requête de suppression
  $req = mysqli_query($con , "DELETE FROM user WHERE iduser = $iduser");
  //redirection vers la page index.php
  header("Location:index.php")
?>