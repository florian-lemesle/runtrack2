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
  
    $array = split($str);
    $result = $results = "";
    $condition = false;
  
  
    for($i=0; isset($array[$i]); $i++){
  
      for($j=0; isset($array[$i][$j]); $j++){
  
        if ($array[$i][len($array[$i])-1] == "e"){
  
          $condition = true;
  
          break;
  
        }
  
        elseif ($array[$i][len($array[$i])-2] == "m" and $condition == true){
  
          $result = $results . " " . $array[$i] . "_";
  
          break;
  
        }
  
        else
  
        $result = $results . " " . $array[$i];
        $condition = false;
  
      }
  
      $results = $result;
  
    }
  
    return $result;
  
  }

echo plateforme("eforme");





?>