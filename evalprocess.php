<?php 
include 'database/database.php';
$db = connect();

if(isset($_POST['submit'])){
  //ready the teacher
  $teach = $_POST['teach'];

  // $que = $db->prepare("SELECT * FROM teachers WHERE name = '$teach'");
  // $que->execute();
  // $name = $que->fetch(PDO::FETCH_OBJ);
  // $teachid = $name->id;

  //add up all current score from evaluation sheet
  echo $c_score = $_POST['qq'] + $_POST['qx'] + $_POST['qy'] + $_POST['qz'] + $_POST['qa'] + $_POST['qb'] + $_POST['qc'] + $_POST['qd'];
  //ready the code
  $code = $_POST['code'];
  //ready comments
  $str = $_POST['str'];
  $weak = $_POST['weak'];

  //before anything else check if the teacher is already evaluated
  $sql1 = "SELECT * FROM subject WHERE teacher = '$teach'";
  $sth1 = $db->prepare($sql1);
  if($sth1->execute()){
    if($sth1->rowcount() > 0){
      $found = true; //teacher found
      $result = $sth1->fetch(PDO::FETCH_OBJ);
    }
    else{
      //teacher not found
      $found = false;
    }
  }

  //then check if the teacher is already evaluated by the specific student
  $sql2 = "SELECT * FROM votes WHERE code = '$code' AND teacher_name = '$teach'";
  $sth2 = $db->prepare($sql2);
  if($sth2->execute()){
    if($sth2->rowcount() > 0){
      //if found redirect
    	header('Location: tt.php?error=1');
    	//error = You have already evaluated this teacher
    }
    else{
		  //if not then continue

		  //if teacher already exist in subject table
		  if($found){
		    //get the current evaluation count
		    $score = $result->score; //evaluation score
		    $count = $result->students; //student count
		  }else{
		    //if the teacher did not exist 
		    //all evaluation count is 0
		    $score = 0; //evaluation score
		    $count = 0; //student count
		  }

		  echo "score = ".$score.'<br>';
		  echo "current score = ".$c_score.'<br>';

		  //add together
		  echo $score = $score + $c_score;
		  echo $count = $count + 1; //just increment the student count

		  //get overall grade divide by 8 then divide by student count
		  echo $grade = ($score / 8) / $count;

		  $db = connect();
		  if($found){ //if the teacher already exist
		    //use update query
		    $query2 = $db->prepare("UPDATE subject SET score = '$score', 
		    	students = '$count', grade = '$grade' WHERE teacher = '$teach'");
		  }
		  else{
		    //if the teacher did not exist yet
		    //use insert into query
		    $query2 = $db->prepare("INSERT INTO subject SET teacher = '$teach', 
		    	score = '$score', students = '$count', grade = '$grade'");
		  }
		  
		 	//then insert into votes table the record of this particular student evaluating this particular teacher and the comments
		    $query1 = $db->prepare("INSERT INTO votes SET code = '$code', teacher_name = '$teach', str = '$str', weak = '$weak' ");
		   
		    if($query2->execute() && $query1->execute()){
		        header('Location: http://localhost/IT33/tt.php?success');
		        echo "success";
		    }
		    else{
		    	echo "error";
		        header('Location: http://localhost/IT33/tt.php?ERROR');
		    }
    	}
  	}

  
}

 ?>