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
<input type="submit" value = "Envoyer" name = "envoyer"/>
<input type="submit" value="Reset" name="reset"/>

</form>

<?php

session_start();




if (!isset($_SESSION["prenom"])){
     
    $_SESSION["prenom"] = "";
    
}

if (isset($_POST["envoyer"])){

    $_SESSION["prenom"] = $_SESSION["prenom"] . "<br>" . $_POST["prenom"];
    echo  $_SESSION["prenom"];
}

if (isset($_POST["reset"])){

    $_SESSION["prenom"] = "";
    header("Location: index.php");
    exit();  
}


?>