<?php
function connect(){
	$db = new PDO("mysql:host=localhost;dbname=scheduling_system","root","");
	return $db; //return the connection if successful
}

function processLogin($uname,$pass){
    $db = connect();
    $query = $db->prepare("SELECT * FROM users WHERE code = ?");

    $query->bindParam(1,$username);

    $username = $uname;

    if($query->execute()){
        if($query->rowCount() == 1){
        return $result = $query->fetchAll();
        }
        else{
            return 0;
        }
    }
    else{
        $query->errorInfo();
    }
}

function Login($uname,$pass){
    $db = connect();
    $query = $db->prepare("SELECT * FROM admin WHERE username = ? AND password = ?");
    $query->bindParam(1,$username);
    $query->bindParam(2,$password);
    $username = $uname;
    $password = $pass;

    if($query->execute()){
        if($query->rowCount() == 1){
            return $result = $query->fetchAll();
            }
        else{
            return 0;
            }
    }
    else{
        $query->errorInfo();
        }
}

//

function idexist($id){
    $db = connect();
     $query = $db->prepare("SELECT * FROM teachers WHERE emp_id = '$id'");

     if($query->execute()){
         if($query->rowCount() >= 1){

             return true;

         }
         else{

             return false;
         }
     }

     else{
         $query->errorInfo();
     }
}


function idexists($id){
    $db = connect();
     $query = $db->prepare("SELECT * FROM students WHERE student_id = '$id'");

     if($query->execute()){
         if($query->rowCount() >= 1){

             return true;

         }
         else{

             return false;
         }
     }

     else{
         $query->errorInfo();
     }
}


function teacherupdate($M_ID){
    $db = connect();
     $query = $db->prepare("SELECT * FROM teachers WHERE id = '$M_ID'");

     if($query->execute()){
         if($query->rowCount() == 1){
             return $result = $query->fetchAll();

         }
         else{

             return 0;
         }
     }

     else{
         $query->errorInfo();
     }
}



?>
