<?php
session_start();

echo "welcom".": ".$_POST["name"]."<br>";
echo $_POST["pass"]."<br>";

echo "Username : {$_POST['name']}<br>";
echo "Password : {$_POST['pass']}<br>";



    $key = array_search('$_POST["name"]', '$user');
    echo $key;
    "<br>";
    if (in_array('$_POST["name"]', '$user')) {
        echo "Got anas";
    }
    if (in_array('$_POST["name"]', '$user')) {
        echo "Got mac";
    }
    else {
        echo $_POST['name']." "."not here ";
    }

   
?>







