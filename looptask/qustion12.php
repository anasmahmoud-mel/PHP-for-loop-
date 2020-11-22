


<?php
echo "<table border =\"1\">";
$n = 5; 

$count = 1;
for ($i = 5; $i > 0; $i--) 

{echo "<tr>";
  for ($j = $i; $j < 5 + 1; $j++) 
   {
    echo "<td height=30px width=30px bgcolor=#FFFFFF> $count</td>";
    
     $count++;
   } 
    echo "<br>";
    echo "</tr>";
   }
?>



