<?php

$user= array('anas', 'omar' , 'oday');

foreach($user as $value){
    echo $value . "<br>";
}
echo "<ul>";
foreach ($user as $y)
{
echo "<li>$y</li>";
}
echo "</ul>";
?>

<?php

$user= array('name1'=>'anas', 
             'name2'=> 'omar' ,
             'name3'=> 'oday');

foreach($user as  $key => $value){
    echo $key. ":" .$value . "<br>";
}
?>
<?php
$Car = array(4 => 'BMW', 6 => 'Dastun', 11=> 'Honda');
foreach($Car as $key =>$value){

    echo "<table>";
    echo "<tr>$key</tr>";
    echo "<td>$value</td>";
    echo"</table>";
};
?>
<?php
$user = array(
    array(
        "name"=>"anas", 
        "pass"=>"123", 
        "brand"=>"admin"
    ),
    array(
        "name"=>"alaa", 
        "pass"=>"456", 
        "brand"=>"user"
    ),
    array(
        "name"=>"omar", 
        "pass"=>"789", 
        "brand"=>"user"
    ),
);
foreach ($user as $key=>$value){
    if (is_array($value)){
        foreach($value as $k=>$val){
            echo $k.":".$val."<br>";
        }
    }
}

?>

<?php
$user = array(
    array(
        "anas", 
        123, 
        "admin"
    ),
    array(
        "alaa", 
        456, 
    "user"
    ),
    array(
      "omar", 
     789, 
       "user"
    )
);
$name=array();
$pass=array();
$brand=array();
foreach($user as $key=>$value){
    $name[]=$value[0];
    $pass[]=$value[1];
    $brand[]=$value[2];
}

print_r ($brand)."<br>";
print_r ($name)."<br>";
print_r ($pass)."<br>";
print_r($user);
$key = array_search('anas', $name);
echo $key;
"<br>";
if (in_array("anas", $name)) {
    echo "Got anas";
}
if (in_array("mac", $name)) {
    echo "Got mac";
}
?>