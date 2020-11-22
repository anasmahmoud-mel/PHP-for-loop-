<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Example of PHP POST method</title>
</head>
<style>

</style>
<body>



<form  method="post" action="arrayresult.php">
   <table> 
<td>
    <label for="inputName">Name:</label>
    <input type="text" name="name" id="inputName">
</td>

<td>
    <label for="inputName">Pass:</label>
    <input type="text" name="pass" id="inputpass">

 </td>
 <td>
    <input type="submit" value="Submit" onclick="myFunction()">
    </td>
    </table>
</form>
<?php
$user =  array( 
         array("anas",123,"admin"),
         array("alaa",456,"user"),
         array("omar",789,"user")
              );

         
?>


</body>