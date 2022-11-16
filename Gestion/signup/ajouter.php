<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
       //vérifier que le bouton ajouter a bien été cliqué
       if(isset($_POST['button'])){
           //extraction des informations envoyé dans des variables par la methode POST
           extract($_POST);
           //verifier que tous les champs ont été remplis
           if(isset($username) && isset($email) && isset($password)&& isset($phone)&& isset($adress)&& isset($type)){
                //connexion à la base de donnée
                include_once "connexion.php";
                //requête d'ajout
                $req = mysqli_query($con , "INSERT INTO employe VALUES(NULL, '$username', '$email','$password','$phone','$adress','$type')");
                if($req){//si la requête a été effectuée avec succès , on fait une redirection
                    header("location: index.php");
                }else {//si non
                    $message = "Employé non ajouté";
                }

           }else {
               //si non
               $message = "Veuillez remplir tous les champs !";
           }
       }
    
    ?>
    <div class="form">
        <a href="index.php" class="back_btn"><img src="images/back.png"> Retour</a>
        <h2>Ajouter un employé</h2>
        <p class="erreur_message">
            <?php 
            // si la variable message existe , affichons son contenu
            if(isset($message)){
                echo $message;
            }
            ?>

        </p>
        <form action="" method="POST">
            <label>username</label>
            <input type="text" name="username">
            <label>email</label>
            <input type="email" name="email">
            <label>password</label>
            <input type="text" name="password">
            <label>phone</label>
            <input type="number" name="phone">
            <label>address</label>
            <input type="text" name="adress">
            <label>type</label>
            <label>Admin</label>
            <input type="radio" name="type" value="1">
            <label>client</label>
            <input type="radio" name="type" value="2">
            <label>washer</label>
            <input type="radio" name="type" value="3">
            <label>Delivery Man</label>
            <input type="radio" name="type" value="4">

            <center><input type="submit" value="Ajouter" name="button"></center>
        </form>
    </div>
</body>
</html>