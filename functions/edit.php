<?php
include '../database/database.php';
$msg = '';

if(isset($_GET['edit'])){

$id=$_GET['edit'];

}



$data = teacherupdate($id);
    		if($data){
              foreach($data as $r){
              	$id = $r['id'];
                $emp_id = $r['emp_id']; 
                $name = $r['name'];
                $department = $r['department'];



		          }

}

if(isset($_POST['update'])){

$nid = $_POST['id'];
$neid = $_POST['empnum'];
$nname = $_POST['name'];
$ndept = $_POST['dept'];

$db = connect();
      $query = $db->prepare("UPDATE teachers SET name ='$nname', emp_id = '$neid', department = '$ndept' WHERE id = '$nid'");
        
       if($query->execute()){

        header('Location: http://localhost/IT33/chereg.php');

}
else
  header('Location: http://localhost/IT33/chereg.php?error');
}

?>
<html>
<head>
  <title>Add New Teacher</title>

<style type="text/css">
  .back{
  border: 1px solid black;
  position: absolute;
  right: 0px;
  left:0px;
  width: 1000px;
  height: 500px;
  margin: auto;
  box-shadow: 0px 8px 20px 20px rgba(255,255,255,0.5);
  background-color: #1F618D;
  font-size: 30px;
  font-family: Arial;
  color: WHITE;
}
input[type=text], select {
  font-size: 15px;
    width: 500px;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=submit] {
    width: 800px;
    background-color: #6666ff;
    color: white;
    font-size: 20px;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
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



</style>  
</head>
<body bgcolor="lightblue">
 <br>
 
  <p align="center"> <img src="http://localhost/it33/Images/header.jpg" height="280px" width="1500px"> </p>
  <br>
<body>
  
<div class="back">
<div class="sclass">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $msg; ?> </div>
<form action="edit.php" method="POST">
<input type="hidden" value="<?php echo $id ?>" name= 'id'>

<pre>
<p align="center">TEACHER'S INFORMATION</p>
  EMPLOYEE NUMBER : <input type="text" name="empnum" value="<?php echo $emp_id ?>" size="30" height= "100" minlength="6" maxlength="6" required><br> 
  EMPLOYEE NAME   : <input type="text" name="name" value="<?php echo $name ?>" required><br>
  DEPARTMENT      : <select name="dept" value="<?php echo $department ?>" required> 
  <option value="<?php echo $department ?>"><?php echo $department ?></option>
  <option value="ICT"> ICT </option>
  <option value="ENGINEERING"> ENGINEERING </option>
  <option value="NURSING"> NURSING </option>
  <option value="CRIMINOLOGY"> CRIMINOLOGY </option>
  <option value="EDUCATION"> EDUCATION </option>
  <option value="BA"> B.A </option>
  <option value="CHM"> CHM </option>
</select>
  <input type="submit" name="update" value="UPDATE">
  </pre>
  </form>
</div>  

<?php
  if(isset($_GET['success'])== true){$test = "";}
      else{$test = "hidden";}?> 


<div id="save" visibility: <?php echo $test;?>>
      
    <div id="inside"><p>Your data has been updated!</p>
    <a href="../chereg.php"><button id="okbutton" autofocus="autofocus">OKAY!</button></a>
    </div>

?>



</body>
</html>