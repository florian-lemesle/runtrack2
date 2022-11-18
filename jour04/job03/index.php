<?php

$args = 0;

foreach ($_POST as $i)

     $args++;

echo "Le nombre d’argument POST envoyé est : $args<br>";


?>
<html>
   <body>
   
      <form action = "<?php $_PHP_SELF ?>" method = "POST">
         Name: <input type = "text" name = "name" />
         Age: <input type = "text" name = "age" />
         Gender: <input type = "text" name = "gender" />
         <input type = "submit" />
      </form>
      
   </body>
</html>