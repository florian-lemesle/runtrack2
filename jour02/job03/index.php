<?php


for ($i=0; $i<=100; ++$i)
{
  
  if ($i>=0 and $i<=20)
  echo "<i>$i</i><br>";

  elseif ($i>=25 and $i<=50)
  echo "<u>$i</u><br>";

  elseif ($i==42)
  echo "La Plateforme";

  else
  echo "$i<br>";
}


?>