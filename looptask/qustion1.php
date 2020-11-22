<?php
for ($i=0; $i <11 ; $i++) { 
     echo $i."-";
}
?>
<br>
<?php
$str1= '123456789'; 
echo substr(chunk_split($str1, 1, '-'), 0, -1);
?>
<br>
<?php
for ($i=0; $i <11 ; $i++) { 
     if($i<10){
     echo $i."-";
}
else{
     echo $i;
}
}
?>

