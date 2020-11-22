<?php
    declare(strict_types=1);?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   

    function fun($x,$y){
      
         $Sum =$x+$y;
         return $Sum;
    
    }
  echo  fun('2',5);
    ?>
    <?php
$cars = array("mrc", "BMW", "hunda");
$cars []=15;
$cars [100]=50;
echo '<pre>';
print_r ($cars);
print_r ($cars[15]);
echo count ($cars);

foreach($cars as $soso){
    echo $soso."<br>";
}
foreach($cars as $key => $value){
    echo $key." ".$value."<br>";
}


 $multi = array(  array (1,2,3),
                  array (4,5,6),
                  array (7,8,9)
 );
 
 for ($x = 0; $x < 3; $x++) {

    for ($y = 0; $y < 3; $y++) {
      echo $multi[$x][$y];
    }

  
  }
  
  foreach($multi as $key => $value){
      if (is_array($value)){
          foreach($value as $k=>$v){
              echo $k."  ".$v."<br>";
          }
      }else
    echo $key." ".$value."<br>";
}


$multi = array(  array ("logain",27,"amman"),
                 array ("laith",26,"amman"),
                 array ("hamza",26,"irbid")
);
foreach($multi as $key => $value){
    echo $value[1]."<br>"=arr[];
    }
    

    


for ($x = 0; $x < 3; $x++) {   
for ($y = 0; $y < 3; $y++) {
}
echo $multi[0];
}
?>
</body>
</html>