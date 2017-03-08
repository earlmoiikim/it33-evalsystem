<?php
 function connect(){
 	$db = new PDO("mysql:host=localhost;dbname=scheduling_system","root","");
 	return $db;
 }

  function finduser($user, $password){
  	if($user=="admin"){
  		$db = connect();
		$query = $db->prepare("Select * From admin WHERE username = ? AND password = ?");
		$query->bindParam(1,$user);
		$query->bindParam(2,$password);

		if($query->execute()){
		if($query->rowCount() > 0){
			return true;
		}
		else{
			false;
		}
	}
  	}


 }
function getemp2($TeahersName){
	$names = "";
	$names.= '%';
	$names.= $TeahersName;
	$names.= '%';
	$db = connect();
	$query = $db->prepare("SELECT * From registration
		WHERE TeahersName LIKE ? OR Eval4 LIKE ? ");
	$query->bindParam(1,$names);
	$query->bindParam(2,$names);
	$query->execute();
	$results = $query->fetchAll(PDO::FETCH_OBJ);
	return $results;
}


function findname($TeahersName){
 	$names = "";
 	$names.= '%';
 	$names.= $TeahersName;
 	$names.= '%';
 	$db = connect();
	$query = $db->prepare("SELECT * From registration
		WHERE TeahersName LIKE ? OR Eval4 LIKE ? ");
	$query->bindParam(1,$names);
	$query->bindParam(2,$names);

		if($query->execute()){
			if($query->rowCount() > 0){
				return true;
			}
			else{
				return false;
			}
		}
	}



  function getemp(){
	$db = connect();
	$sth = $db->prepare("Select * From registration order by id");
	$sth->execute();
	$results = $sth->fetchAll(PDO::FETCH_OBJ);
	return $results;
}



function Eval4Department_exists($time, $Eval4, $Department){
 $db = connect();
 $query = $db->prepare("SELECT * from registration WHERE  Eval2 = ? AND  Eval4 = ? AND Department = ?");


 $query->bindParam(1,$time);
 $query->bindParam(2,$Eval4);
 $query->bindParam(3,$Department);


 if($query->execute()){
		if($query->rowCount()>0){
			return true;
		}
		else{
			return false;
		}
	}

}

function description($grade){
  if($grade >= 1 && $grade <= 1.85){
    $description = "Ineffective";
  }
  elseif ($grade > 1.85 && $grade <= 2.65) {
    $description = "Partially Effective";
  }
  elseif ($grade > 2.65 && $grade <= 3.5) {
    $description = "Effective";
  }
  else{
    $description = "Highly Effective";
  }
  return $description;
}

function rating($grade, $numberOfStudents){
  $rating = $grade / $numberOfStudents;
  $rating = number_format($rating, 1, '.', ',');
  return $rating;
}

function sectionrating($grade, $numberOfStudents, $items){
  $rating = ($grade / $items) / $numberOfStudents;
  $rating = number_format($rating, 1, '.', ',');
  return $rating;
}

function getscores($teach){
  $db = connect();
  $sql1 = "SELECT * FROM scores WHERE teach = '$teach'";
  $sth1 = $db->prepare($sql1);
  $sth1->execute();
  return $result = $sth1->fetch(PDO::FETCH_OBJ);
}

function getoverall(){
  $dbs = connect();
  $query = $dbs->prepare("SELECT * from overall");
  $query->execute();
  return $results = $query->fetchAll(PDO::FETCH_OBJ);
}

function searchbyname($name){
  	$names = "";
  	$names.= '%';
  	$names.= $name;
  	$names.= '%';
  	$db = connect();
  	$query = $db->prepare("SELECT * From overall
  		WHERE teacher LIKE ? ");
  	$query->bindParam(1,$names);
  	$query->execute();
  	$results = $query->fetchAll(PDO::FETCH_OBJ);
  	return $results;
}

function searchbydept($dept){
  $db = connect();
  $query = $db->prepare("SELECT * From overall
    INNER JOIN teachers ON overall.teacher = teachers.name
    WHERE department = '$dept'");
    $query->execute();
  return $results = $query->fetchAll(PDO::FETCH_OBJ);
}

function scoresbyteacher($teach){
  $db = connect();
  $query = $db->prepare("SELECT * From overall
    INNER JOIN teachers ON overall.teacher = teachers.name
    INNER JOIN scores ON teachers.name = scores.teach
    WHERE overall.teacher = '$teach'");
  $query->execute();
  return $results = $query->fetch(PDO::FETCH_OBJ);
}

function userbycode($code){
  $db = connect();
  $query = $db->prepare("SELECT * FROM users
  WHERE code = '$code'");
  $query->execute();
  return $results = $query->fetch(PDO::FETCH_OBJ);
}

?>
