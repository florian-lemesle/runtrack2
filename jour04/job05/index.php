<?php

   if( $_POST["user"] == "John" and $_POST["password"] == "Rambo" ) {

      echo "C'est pas ma guerre";
      
      exit();
   }
?>
<html>
   <body>
   
      <form action = "<?php $_PHP_SELF ?>" method = "POST">
         User: <input type = "text" name = "user" />
         Password: <input type = "text" name = "password" />
         <input type = "submit" />
      </form>
      
   </body>
</html>