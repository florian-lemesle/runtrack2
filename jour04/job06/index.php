<?php


if($_GET["nombre"] % 2 == 0) {

      echo "Le nombre est pair";
      
   }

else{

   echo "Le nombre est impair";

}

?>
<html>
   <body>
   
      <form action = "<?php $_PHP_SELF ?>" method = "GET">
         Nombre: <input type = "number" name = "nombre" />
         <input type = "submit" />
      </form>
      
   </body>
</html>