<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jour 06</title>
  <link rel="stylesheet" type="text/css" href="style1.css">
  <link rel="stylesheet" type="text/css" href="style2.css">
  <link rel="stylesheet" type="text/css" href="style3.css">
  

<?php

if($_POST){
   
  if ($_POST["style"] == "style1"){

        echo  '<link rel="stylesheet" type="text/css" href="style1.css">';

      }

  elseif ($_POST["style"] == "style2"){

        echo '<link rel="stylesheet" type="text/css" href="style2.css">';

      }

  elseif ($_POST["style"] == "style3"){

        echo '<link rel="stylesheet" type="text/css" href="style3.css">';

        }

}

?>



</head>

<body>

<form action="" method="post">
<p>

     <select name="style">
          <option value="style1">Style1</option>
          <option value="style2">Style2</option>
          <option value="style3">Style3</option>
     </select>

     <input type="submit" value="Aller" title="valider pour changer le style" />

</p>
</form>

  
</body>
</html>


