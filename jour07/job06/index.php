<?php

function leetSpeak(string $str){

$result = "";

for($i=0; isset($str[$i]); $i++){

if ($str[$i] == "a" or $str[$i] == "A")
$str[$i] = "4";

if ($str[$i] == "b" or $str[$i] == "B")
$str[$i] = "8";

if ($str[$i] == "e" or $str[$i] == "E")
$str[$i] = "3";

if ($str[$i] == "g" or $str[$i] == "G")
$str[$i] = "6";

if ($str[$i] == "l" or $str[$i] == "L")
$str[$i] = "1";

if ($str[$i] == "s" or $str[$i] == "S")
$str[$i] = "5";

if ($str[$i] == "t" or $str[$i] == "T")
$str[$i] = "7";

$result = ($result.$str[$i]);

}

return $result;



}

echo leetSpeak("blablA");

?>
