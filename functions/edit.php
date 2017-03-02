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
  <title>SJPIICD Faculty Evaluation System</title>

<style type="text/css">
 .back{
  border: 1px solid black;
  width: 1000px;
  height: 500px;
  margin-top: -90px;
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
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=submit] {
    width: 830px;
    background-color: #6666ff;
    color: white;
    font-size: 20px;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    margin-top: 20px;
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
  margin-top: -210px;
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

<body style="background:linear-gradient(to bottom right,white,lightblue,white); height:790px">

<center>
   <div class="heading">
        <h1 style="margin-top: 30px;"> 
        </h1>
   </div>
     <img id="image" src="../images/logo.png" width="225px" height="225px">
  <div class="fes">
     <p align="center"> Faculty Evaluation System </p>
      <br> 
  </div>
  <div class="jp">
     <p align="center"> -Office of Guidance- </p>
      <br> 
  </div>
  
</center>

<div class="back">
<div class="sclass">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $msg; ?> </div>
<form action="edit.php" method="POST">
<input type="hidden" value="<?php echo $id ?>" name= 'id'>

<pre>
<p align="center">TEACHER'S INFORMATION</p>
  EMPLOYEE NUMBER : <input type="text" name="empnum" value="<?php echo $emp_id ?>" size="30" height= "100" minlength="7" maxlength="7" title="example format: SRT-123" required><br> 
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



</head>
</body>
</html>