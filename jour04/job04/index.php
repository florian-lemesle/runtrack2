<?php 

?>

<style>
    table, th, td {
        border: 1px solid black;
    }
</style>

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

<table>
    <tr>
        <th>Argument</th>
        <th>Valeur</th>
    </tr>
    <?php foreach ($_POST as $key => $value): ?>
    <tr>
        <td><?php echo $key ?></td>
        <td><?php echo $value ?></td>
    </tr>
    <?php endforeach ?>
</table>