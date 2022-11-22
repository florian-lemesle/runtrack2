<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jour 07</title>
  
</head>

<body>

<form action="" method="get">


     <select name="fonction">
     <option value="">--</option>
            <option <?php if (isset($_GET["fonction"])) echo $_GET["fonction"] == "gras" ? "selected " : NULL ?>value="gras">Gras</option>
            <option <?php if (isset($_GET["fonction"])) echo $_GET["fonction"] == "cesar" ? "selected " : NULL ?>value="cesar">Cesar</option>
            <option <?php if (isset($_GET["fonction"])) echo $_GET["fonction"] == "plateforme" ? "selected " : NULL ?>value="plateforme">Plateforme</option>
     </select>

     <input type = "text" name = "str" />

     <input type="submit" value="Go" title="valider pour changer le style" />


</form>

<?php

function split($str){ //séparer les mots d'une phrase et les mettres dans une liste

    $split = [];
    $word = "";
    
    for($i = 0; isset($str[$i]); $i++){
    
        if($str[$i] == " "){
          
                $split[] = $word;
                $word = "";
            }
    
        else
        $word = $word.$str[$i]; 
    
    }
    
    $split[] = $word;
    
    return $split;
    
    }
    
    
function gras($str){ 
        
  $array = split($str);
  $maj = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
  $results = $result = "";
        
  for($i = 0; isset($array[$i]); $i++){
        
    for($j = 0; isset($maj[$j]); $j++){
        
      if ($array[$i][0] == $maj[$j]){
        
        $result = "<b>$array[$i]</b>"." ";
    
        break;
    
      } 
              
      else{

          $result = $array[$i]." ";
      }
    
    }
      $results = $results . $result;

  }
    
    return $results;
}


function cesar($str, $decalage = 2){

 $Alphabet = 'abcdefghijklmnopqrstuvwxyz';
 $result = $results = "";
    
  for($i=0; isset($str[$i]); $i++){
    
    for($j=0; isset($Alphabet[$j]); $j++){
             
      if ($str[$i] == $Alphabet[$j]){;
    
        $result = $Alphabet[$j+$decalage];
    
        break;
      }
    
    }
    
    $results =  $results . $result;
          
         
  }  
    
  return $results;
          
    
}

function len($str) // compte le nombre de lettres dans un mot
{
      $i = 0;
      while (isset($str[$i]))
      {
        $i++;
      }
      return $i;
}

function plateforme($str){
  
  $n = len($str);
  $array = split($str);
  $result = $results = "";


  for($i=0; isset($array[$i]); $i++){

    for($j=0; isset($array[$i][$j]); $j++){

      if ($array[$i][$j-$n] == "e"){

        $result = $array[$i] . "_";

        break;
      }

    }

    $results = $results . $result;

  }

  return $result;

}


if (isset($_GET["str"]))
{
      switch ($_GET["fonction"])
      {
            case "gras":
                  echo gras($_GET["str"]);
                  break;
            case "cesar":
                  echo cesar($_GET["str"]);
                  break;
            case "plateforme":
                  echo plateforme($_GET["str"]);
                  break;
            default:
                  echo "Erreur";
      }
}

?>

  
</body>
</html>