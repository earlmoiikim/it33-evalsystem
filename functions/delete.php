<?php
include "../database/database.php";

$id = $_GET['id'];

$sql = "DELETE FROM teachers WHERE id='$id' ";
$db = connect();

$sth = $db->prepare($sql);
if ($sth->execute()) {
	header('Location: http://localhost/IT33/chereg.php');
	
}
else {

	echo "ERROR";
}



?>