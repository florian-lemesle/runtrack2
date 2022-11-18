<?php

$str = "Dans l'espace, personne ne vous entend crier";
$j = 0;


for($i=0; isset($str[$i]); $i++){

    {
        if ($str[$i] != " ")
        echo "$str[$i] $j<br>";
        $j++;

 
    }
}


?>