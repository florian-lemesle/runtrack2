<?php


function checkPrime($num)
{
   if ($num == 1)
   return 0;
   for ($i = 2; $i <= $num/2; $i++)
   {
      if ($num % $i == 0)
      return 0;
   }
   return 1;
}

for($num = 1; $num <= 1000; $num++) {
	$i = checkPrime($num);
	if ($i == 1) {
		echo "$num<br>";
	}
}  

?>