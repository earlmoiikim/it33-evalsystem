<?php
include 'database/database.php';
$test='hidden';
$msg = '';
$temp = '';

if(isset($_POST['submit'])){
  $eid = strtoupper($_POST['empid']);
  $tname = strtoupper($_POST['name']);
  $dep = $_POST['dept'];

  if(idexist($eid)){
         $msg = '**ID already exist';
         $temp = $tname;
    }
 else{

  $db = connect();
    $query = $db->prepare("INSERT INTO teachers SET emp_id = '$eid', name = '$tname', department = '$dep'");
      
    if($query->execute()){
        header('Location: http://localhost/IT33/addnewteacher.php?success');

    }
    else{
        header('Location: http://localhost/IT33/addnewteacher.php?ERROR');
    }
}

}
if(isset($_GET['success'])){
  $test='';
}
?>

<html>
<head>
	<title>Add New Teacher</title>

<style type="text/css">
	.heading{
	width: 100%;
	height: 27%;
	background-color: #2471A3;
}
.fes{
	margin-top: -275px;
	margin-left: 180px;
	text-shadow: 3px 4px white;
	font-family: arial;
	color: #062F63;
	font-weight: 800;
	font-size: 60px;
}
.jp{
	margin-top: -170px;
	margin-left: 130px;
	text-shadow: 5px 7px #030301;
	font-family: arial;
	color: #FAFF05;
	font-weight: 700;
	font-size: 60px;
}

#image{
	margin-left: -950px;
	margin-top: -220px;
}
.back{
  border: 1px solid black;
  width: 1000px;
  height: 500px;
  margin-top: -70px;
  margin-left: 370px;
    box-shadow: 0px 8px 20px 20px rgba(255,255,255,0.5);
  background-color: #1F618D;
  font-size: 33px;
  font-family: Arial;
  text-align: center;
  color: white;
}
input[type=text], select {
    font-size: 15px;
    width: 500px;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 10px;
}

#save{
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  margin: auto;
  text-align: center;
  font-weight: bold;
  width: 100%;
  height: 100%;
  font-family: "Arial Black";
  background-color: rgba(255,255,255,0.4);
}
#inside{
  position: absolute;
  top: 330px;
  left: 0;
  right: 0;
  bottom: 0;
  margin: auto;
  font-size: 15px;
  color: black;
  font-weight: bold;
  width: 500px;
  height: 400px;
  background-color: #ededed;
  border: 3px blue;
  border-style: solid;
}
#okbutton{  
  margin-top: 40px;
  width: 150px;
  height: 80px;
  background-color: crimson;
  color: white;
  font-size: 30px;
  border: 1px blue;
  font-weight: bolder;
  border-style: solid;
}
div.sclass{
  position: absolute;
  left: 0;
  right: 0;
  text-align: center;
  margin: auto;
  margin-top: 190px;
  font-weight: bold;
  font-size: 20px;
  color: yellow;
}
.xx{
  width: 200px;
  border-radius: 5px;
  height: 50px;
  font-size:25px;
  font-family: Comic San MS;
  background-color: #6666ff;
  margin-top: 20px;
  margin-left: -30px;
  font-weight: bold;
}
.xx:hover{
  background-color: #129DFE;

}

p.capitalize {
    text-transform: capitalize;
}
</style>
<center>
   <div class="heading">
        <h1 style="margin-top: 30px;"> 
        </h1>
   </div>
     <img id="image" src="./images/logo.png" width="230px" height="230px">
  <div class="fes">
     <p align="center"> Faculty Evaluation System </p>
      <br> 
  </div>
  <div class="jp">
     <p align="center"> -Office of Guidance- </p>
      <br> 
  </div>
  
</center>
</head>
<body style="background:linear-gradient(to bottom right,white,lightblue,white); height:790px">

<div class="back">
<div class="sclass">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $msg; ?> </div>
<form action="addnewteacher.php" method="POST">
<pre>
<p align="center">TEACHER'S INFORMATION</p>
  EMPLOYEE ID     : <input type="text" name="empid" size="30" style="text-transform:uppercase;" height= "100" pattern="^[a-zA-Z]{3}[0-9-_\]{3}" required title="Example format: SMT-123" required><br>
  EMPLOYEE NAME   : <input type="text" name="name" required style="text-transform:uppercase;" placeholder="first name - last name"> <br> 
  DEPARTMENT      : <select name="dept" required> 
  <option>--Select--</option>
  <option value="ICT"> ICT </option>
  <option value="ENGINEERING"> ENGINEERING </option>
  <option value="NURSING"> NURSING </option>
  <option value="CRIMINOLOGY"> CRIMINOLOGY </option>
  <option value="EDUCATION"> EDUCATION </option>
  <option value="BA"> B.A </option>
  <option value="CHM"> CHM </option>
</select>
         <input type="submit" value="SUBMIT" class="xx"> <a href="chereg.php"> <input type="button" value="CANCEL" class="xx"></a> 

  </pre>
  </form>
</div>  

<div id="save" visibility: <?php echo $test;?>>
      
    <div id="inside"><p style="font-size: 40px">Your data is successfully saved!</p>
    <a href="chereg.php"><button id="okbutton" autofocus="autofocus">OKAY!</button></a>
    </div>

	

</body>
</html>