<?php 

include './database/database.php';







$sql = "SELECT count(*) FROM evaluation WHERE c1 = '1'"; 
$db = connect();
$result = $db->prepare($sql); 
$result->execute(); 
$mem_reg = $result->fetchColumn(); 

$sql = "SELECT count(*) FROM evaluation WHERE c2 = '1'"; 
$db = connect();
$result = $db->prepare($sql); 
$result->execute(); 
$mem_reg1 = $result->fetchColumn(); 



echo "strong"+$mem_reg;
echo "<br>";
echo "dele"+$mem_reg1;

 ?>