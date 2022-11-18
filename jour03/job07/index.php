<?php

$str = "Certaines choses changent, et d'autres ne changeront jamais.";
$tmp = "";



for ($i=0 ; isset($str[$i+1]) ; $i++)   

{  
   $tmp = $str[$i];
   $str[$i] = $str[$i+1];
   $str[$i+1] = $tmp;

}

echo $str;

?>