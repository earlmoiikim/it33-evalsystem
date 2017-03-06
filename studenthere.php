<?php
include 'functions/function.php';

if(isset($_POST['sub'])){
	$code = $_POST['code'];
	$dept = $_POST['dept'];

	$db = connect();
	$query = $db->prepare("INSERT INTO users SET code = '$code', dept = '$dept'");

	if ($query->execute()){
		header("Location: gencode.php?success");
	}else{
		header("Location: gencode.php?error");
	}
}

?>
