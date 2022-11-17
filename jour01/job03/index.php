<?php

$var1 = true;
$var2 = 2;
$var3 = "bla";
$var4 = 1.5;

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
    <th>Type</th>
    <th>Name</th>
    <th>Value</th>
  </tr>
  <tr>
  <td>Boolean</td>
  <td>var1</td>
  <td><?php echo "$var1<br>" ?></td>
  </tr>
  <tr>
  <td>String</td>
  <td>var2</td>
  <td><?php echo "$var3<br>" ?></td>
  </tr>
  <tr>
  <td>Floating</td>
  <td>var3</td>
  <td><?php echo "$var4<br>" ?></td>
  </tr>
  <tr>
  <td>Whole</td>
  <td>var4</td>
  <td><?php echo "$var2<br>" ?></td>
  </tr>
</table>
</body>
</html>



