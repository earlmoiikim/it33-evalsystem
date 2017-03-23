<?php
include "../functions/function.php";

if(!empty($_GET['id'])){
	$teacher = $_GET['id'];
	if (deleteone($teacher)){
		header('Location: http://localhost/IT33/chereg.php');
	}
	else {
		header('Location: ../chereg.php?error');
	}

}

if(!empty($_GET['deleteall'])){
	if(refreshresults()){
		header('Location: ../views.php?success');
	}
	else{
		header('Location: ../views.php?error');
	}
}



?>
