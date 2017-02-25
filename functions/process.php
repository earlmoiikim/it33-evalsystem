
<?php
session_start();
include "../functions/function.php";
$db = connect();
if(isset($_POST['submit'])){
		$TeahersName = $_POST['TeahersName'];
		$Eval1 = $_POST['Eval1'];
		$time = $_POST['Eval2'];
		$Eval3 = $_POST['Eval3'];
		$Eval4 = $_POST['Eval4'];
		$Eval5 = $_POST['Eval5'];
		$sex = $_POST['sex'];
		$Department = $_POST['Department'];

		
		if(Eval4Department_exists($time,$Eval3,$Eval4,$Department)) {
			header("Location:../admin/schedule.php#popup5");


		}
		else
		{
		$query = $db->prepare("INSERT INTO registration SET 
							TeahersName = :TeahersName,
							Eval1 = :Eval1,
			 				Eval2 = :Eval2,
			 				Eval3 = :Eval3,
			   				Eval4 =:Eval4,
							Eval5 = :Eval5,
							sex = :sex,
							Department = :Department");

		$execute_query = [ ':TeahersName' => $TeahersName,
							':Eval1' => $Eval1,
		 					':Eval2' => $time,
		 					':Eval3' => $Eval3,
							':Eval4' => $Eval4,
							':Eval5' => $Eval5,
							':sex' => $sex,
						 	':Department' => $Department];


		
	
			if($query->execute($execute_query)){
					header('Location:../admin/schedule.php');
				}
			else{
			header("Location:../admin/table.php?dberror2");
				}

		}



		



}
	else{
		header("Location:../admin/table.php?error8=1");
	}		

		

 ?>
