<?php

session_start();
include "../functions/function.php";
$db = connect();

$_SESSION['updateerror']='0';
$_SESSION['try']=$_GET['id'];

header('Location: ../admin/schedule.php#popup1');


?>