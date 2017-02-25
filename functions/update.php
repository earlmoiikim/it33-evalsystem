
<?php
session_start();
include "../functions/function.php";
$db = connect();

	if(isset($_POST['save'])){
		// $_SESSION['updateerror']='0';

		$id = $_POST['id'];
		$TeahersName = $_POST['TeahersName'];
 		$Eval1 = $_POST['Eval1'];
		$time = $_POST['Eval2'];
		$Eval3 = $_POST['Eval3'];
		$Eval4 = $_POST['Eval4'];
		$Eval5 = $_POST['Eval5'];
		$sex = $_POST['sex'];
		$room = $_POST['room'];

			$stmt = $db->prepare("UPDATE registration SET 
								TeahersName = :TeahersName,
								Eval1 = :Eval1, 
		                 		Eval2 = :Eval2, 
		                 		Eval3 = :Eval3, 
		                 		Eval4 = :Eval4,
		                 		Eval5 = :Eval5,
		                 		sex = :sex,
		                 		room = :room 
		                 		WHERE id = :id");
			$stmt->bindValue('TeahersName',$TeahersName);
			$stmt->bindValue('Eval1',$Eval1);
			$stmt->bindValue('Eval2',$time);
			$stmt->bindValue('Eval3',$Eval3);
			$stmt->bindValue('Eval4',$Eval4);
			$stmt->bindValue('Eval5',$Eval5);
			$stmt->bindValue('sex',$sex);
			$stmt->bindValue('room',$room);
			$stmt->bindValue('id',$id);
		
			$stmt->execute();
			header('Location:../admin/schedule.php#popup4');

	}

	
?>