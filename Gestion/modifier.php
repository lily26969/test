<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php

         //connexion à la base de donnée
          include_once "connexion.php";
         //on récupère le id dans le lien
          $iduser = $_GET['iduser'];
          //requête pour afficher les infos d'un employé
          $req = mysqli_query($con , "SELECT * FROM user WHERE iduser = $iduser");
          $row = mysqli_fetch_assoc($req);


       //vérifier que le bouton ajouter a bien été cliqué
       if(isset($_POST['button'])){
           //extraction des informations envoyé dans des variables par la methode POST
           extract($_POST);
           //verifier que tous les champs ont été remplis
           if(isset($username) && isset($email) && isset($password)&& isset($phone)&&isset($adress)&&isset($type)){
               //requête de modification
               $req = mysqli_query($con, "UPDATE user SET username = '$username' , email = '$email' , password = '$password' ,phone='$phone', adress='$adress',type='$type' WHERE iduser = $iduser ");
                if($req){//si la requête a été effectuée avec succès , on fait une redirection
                    header("location: index.php");
                }else {//si non
                    $message = "Employé non modifié";
                }

           }else {
               //si non
               $message = "Veuillez remplir tous les champs !";
           }
       }
    
    ?>

    <div class="form">
        <a href="index.php" class="back_btn"><img src="images/back.png"> Retour</a>
        <center><h2>Modifier les informations de l'utilisateur : <?=$row['username']?> </h2>
        <h2>ID user : <?=$row['iduser']?> </h2>
        </center>

        <p class="erreur_message">
           <?php 
              if(isset($message)){
                  echo $message ;
              }
           ?>
        </p>
        <form action="" method="POST">
            <label>Username</label>
            <input type="text" name="username" value="<?=$row['username']?>">
            <label>Email</label>
            <input type="email" name="email" value="<?=$row['email']?>">
            <label>password</label>
            <input type="password" name="password" value="<?=$row['password']?>">
            <label>phone</label>
            <input type="number" name="phone" value="<?=$row['phone']?>">
            <label>address</label>
            <input type="text" name="adress" value="<?=$row['adress']?>">
            <label>type</label>
            <label>Admin</label>
            
            <input type="radio" name="type" value="<?=$row['type']?>">
            <label>utilisateur</label>
            <input type="radio" name="type" value="<?=$row['type']?>"  >
            

            <input type="submit" value="Modifier" name="button">
        </form>
    </div>
</body>
</html>