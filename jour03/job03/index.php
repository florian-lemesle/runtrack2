<?php

$str = "I'm sorry Dave I'm afraid I can't do that";
$voyelles = array("a","e","i","o","u","y","A","E","I","O","U","Y");


for($i=0; isset($str[$i]); $i++){

    if(in_array($str[$i], $voyelles))
    {
        echo $str[$i];
 
    }
}


?>