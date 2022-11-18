<?php

$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";

$c = 0;
$v = 0;

$dic = array(
    "voyelles" => array("a","e","i","o","u","y","A","E","I","O","U","Y"),
    "consonnes" => array("B", "C", "D", "F", "G", "H", "J", "K", "L", "M",
                         "N", "P", "Q", "R", "S", "T", "V", "W", "X", "Z",
                         "b", "c", "d", "f", "g", "h", "j", "k", "l", "m",
                         "n", "p", "q", "r", "s", "t", "v", "w", "x", "z" )

);


for($i=0; isset($str[$i]); $i++){

    if(in_array($str[$i], $dic["voyelles"]))
    {
        $v++;
 
    }

    elseif(in_array($str[$i], $dic["consonnes"]))
    {
        $c++;
    }
    
    else
    {
        continue;
    }
    
}

?>

<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>
<table>
  <tr>
    <th>Consonnes</th>
    <th>Voyelles</th>
  </tr>
  <tr>
  <td><?php echo "$c<br>" ?></td>
  <td><?php echo "$v<br>" ?></td>
  </tr>
</table>
</body>
</html>