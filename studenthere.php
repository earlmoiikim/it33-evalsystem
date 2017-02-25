<?php
include 'functions/function.php';

$code = $_POST['code'];

$db = connect();
$query = $db->prepare("INSERT INTO users SET code = '$code'");

if ($query->execute()){
	header("Location: gencode.php?success");
}
?>
