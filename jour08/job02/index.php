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

if (!isset($_COOKIE["nbvisites"])){

    setcookie("nbvisites", "0", time () + 86400 * 30);
    
}

$valueint = (int)$_COOKIE["nbvisites"] + 1;
$valuestr = (string)$valueint;

setcookie("nbvisites", $valuestr, time () + 86400 * 30);


if (isset($_POST["reset"]))

{   
    setcookie("nbvisites", "1", time () + 86400 * 30);
    header("Location: index.php");
    exit();  
}


echo  $_COOKIE["nbvisites"];

?>