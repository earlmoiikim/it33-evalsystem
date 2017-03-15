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
  if($grade >= 1 && $grade <= 1.49){
    $description = "Unsatisfactory";
  }
  elseif ($grade > 1.5 && $grade <= 2.49) {
    $description = "Very Good";
  }
  elseif ($grade > 2.5 && $grade <= 3.49) {
    $description = "Satisfactory";
  }
  else{
    $description = "Excellent";
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

function getcomments($teacher){
  $db = connect();
  $query = $db->prepare("SELECT * FROM comments
  WHERE prof = '$teacher'");
  $query->execute();
  return $results = $query->fetchAll(PDO::FETCH_OBJ);
}

function getcommentbyid($id){
  $db = connect();
  $query = $db->prepare("SELECT * FROM comments
  WHERE id = '$id'");
  $query->execute();
  return $results = $query->fetch(PDO::FETCH_OBJ);
}

function deletecomment($id){
  $db = connect();
  $query = $db->prepare("DELETE FROM comments WHERE id = '$id'");
  if($query->execute()){
    return true;
  }
  else{
    return false;
  }
}

function findteacha($id){
  $db = connect();
  $query = $db->prepare("SELECT * FROM teachers
  WHERE emp_id = '$id'");
  $query->execute();
  return $results = $query->fetch(PDO::FETCH_OBJ);
}

function nursingsection($teacher){
  $r = scoresbyteacher($teacher);
  $section = '<div class="row">
              <div class="col-md-12">
              <p><strong>A2. RLE CLINICAL INSTRUCTORS (FOR NURSING STUDENTS ONLY)</strong></p>
              <table class="table table-bordered ">
                <tr>
                  <th class="text-center">Item/Parameter</th>
                  <th class="text-center">Rating</th>
                  <th class="text-center">Qualitative Description</th>
                </tr>
                <tr>
                  <td>1. shows knowledge and mastery in using the equipments, instruments as well as carrying out of all procedures necessary in the clinical area.</td>
                  <td class="text-center">'.($g = rating($r->ci1, $r->students)).'</td>
                  <td class="text-center">'.description($g).'</td>
                </tr>
                <tr>
                  <td>2. provides fair student assignments in the area.</td>
                  <td class="text-center">'.($g = rating($r->ci2, $r->students)).'</td>
                  <td class="text-center">'.description($g).'</td>
                </tr>
                <tr>
                  <td>3. supervises students in using the equipments and instruments in the area.</td>
                  <td class="text-center">'.($g = rating($r->ci3, $r->students)).'</td>
                  <td class="text-center">'.description($g).'</td>
                </tr>
                <tr>
                  <td>4. make sure that students are ethical, moral, spiritual and are able to respect individual differences in the area.</td>
                  <td class="text-center">'.($g = rating($r->ci4, $r->students)).'</td>
                  <td class="text-center">'.description($g).'</td>
                </tr>
                <tr>
                  <td>5. gives students not less that three quizzes.</td>
                  <td class="text-center">'.($g = rating($r->ci5, $r->students)).'</td>
                  <td class="text-center">'.description($g).'</td>
                </tr>
                <tr>
                  <td>6. conducts class in english.</td>
                  <td class="text-center">'.($g = rating($r->ci6, $r->students)).'</td>
                  <td class="text-center">'.description($g).'</td>
                </tr>
                <tr>
                  <td>7. provides post RLE conferences.</td>
                  <td class="text-center">'.($g = rating($r->ci7, $r->students)).'</td>
                  <td class="text-center">'.description($g).'</td>
                </tr>

                <tr>
                  <th class="text-center"> Total Rating </th>
                  <th class="text-center">'.($g = sectionrating($r->ci, $r->students, 7)).'</th>
                  <th class="text-center">'.description($g).'</th>
                </tr>
              </table>
            </div>
          </div>
          <!--end of row  -->';
      return $section;
}
?>
