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

?>