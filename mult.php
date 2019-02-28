 <?php

 function printTable($rows, $cols)
 {
   echo "<table border='1'>";
   for ($i = 1; $i<=$rows; $i++)
   {
     echo "<tr>";
     for ($j = 1; $j<=$cols; $j++)
     {
       $product = $i * $j;
       echo "<td>";
       echo $product;
       echo "</td>";
     }
     echo "</tr>";
   }
   echo "</table>";
 }

 printTable(100,100);

?>
