<?php
for ($i=1;$i<10;$i++){
    if($i==1){
        echo "***"."<br>";
    }
    if($i==4){
        echo "*****"."<br>";
    }
else{
    echo "*"." "."*"."<br>";
}
}

?>
<?php
 for ($row=0; $row<=7; $row++)
{
  for ($column=0; $column<=7; $column++)
	{
        if ($column == 2 && $row == 1){  
            echo "***";  
          } 
        if ($column == 2 && $row == 4){  
            echo "*****";   
         }
         else{
            echo "*"." "."*"."<br>";
        
    } 
}

       
  echo "\n";

?>
