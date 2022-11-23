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

<input type="submit" value="Reset" name="reset"/>

</form>

<?php

session_start();


if (!isset($_SESSION["nbvisites"])){

    $_SESSION["nbvisites"] = 0;
    
}

$_SESSION["nbvisites"] += 1;

if (isset($_POST["reset"]))
{
    $_SESSION["nbvisites"] = 1;
    
}


echo  $_SESSION["nbvisites"];



?>