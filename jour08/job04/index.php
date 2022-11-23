<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jour 08</title>
  
</head>
<body>

<form action="" method="post">

<input type = "text" name = "prenom" />
<input type = "submit" value = "Connexion" name = "connexion"/>


</form>

<?php

if (!isset($_COOKIE["prenom"])){
    
    setcookie("prenom", "", time () + 86400 * 30);
    ?>


    <?php  
    
}


if (isset($_POST["connexion"])){

        setcookie("prenom", $_POST["prenom"], time () + 86400 * 30);
          
            ?>
               <br>
               <form action="" method="post">
               <input type="submit" value="Déconnexion" name="deco"/>

               </form>
    
               <?php 
               
               echo "<br>";

               echo "Bienvenu à toi " . $_POST["prenom"] . "!";

        }

if (isset($_POST["deco"])){

    setcookie("prenom", "", time () + 86400 * 30);
    header("Location: index.php");
    exit();  
}


?>