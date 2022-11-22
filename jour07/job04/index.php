<?php

function calcul($a, string $operation, $b){


    if ($operation == "+")
    return $a+$b;

    elseif ($operation == "-")
    return $a-$b;

    elseif ($operation == "*")
    return $a*$b;

    elseif ($operation == "/")
    return $a/$b;

    elseif ($operation == "%")
    return $a%$b;




}




?>