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
  <!-- Bootstrap Core CSS -->
  <link href="style/bootstrap.min.css" rel="stylesheet">
  <!-- Icons -->
  <link rel="stylesheet" href="style/css/font-awesome.min.css" type="text/css">
  <!-- custom css -->
  <link href="style/master.css" rel="stylesheet">

</head>
<body style="background:linear-gradient(to bottom right,white,lightblue,white);">

  <header style="margin-bottom: 20px;">
    <div class="container-fluid bg-primary">

      <div class="row">
        <div class="container" style="padding: 20px 0px;">

          <div class="col-md-3">
            <div class="box">
                <img class="img-responsive" src="./images/logo.png">
            </div>
          </div>

          <div class="col-md-6 text-center">
              <h1 class="font"> Faculty Evaluation System </h1>
              <h1 class="font2"> - Office of Guidance - </h1>
          </div>

          <div class="col-md-3"></div>
        </div>
      </div>

    </div>
  </header>

  <div class="container">
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4 bgwhite" style="padding: 20px 30px;">
        <form class="form-group" action="#" method="POST">
        <h3 align="center">TEACHER'S INFORMATION</h3>
        <label for=""> EMPLOYEE ID : </label>
        <input type="text" name="empid" size="30" class="form-control"
        style="text-transform:uppercase;" maxlength="7" minlength="7" height= "100" title="Sample format: SRT-102" required><br>
        <label for=""> EMPLOYEE NAME : </label>
        <input type="text" name="name" required class="form-control"
        style="text-transform:uppercase;" placeholder="first name - last name"> <br>
          <label for="">DEPARTMENT : </label>
          <select name="dept" required class="form-control">
          <option>--Select--</option>
          <option value="ICT"> ICT </option>
          <option value="ENGINEERING"> ENGINEERING </option>
          <option value="NURSING"> NURSING </option>
          <option value="CRIMINOLOGY"> CRIMINOLOGY </option>
          <option value="EDUCATION"> EDUCATION </option>
          <option value="B.A"> B.A </option>
          <option value="CHM"> CHM </option>
          </select>
          <div class="pull-right" style="margin-top: 10px;">
            <input type="submit" value="SUBMIT" name="submit" class="btn btn-primary">
            <a href="chereg.php"> <input type="button" value="CANCEL" class="btn btn-danger"></a>
          </div>
        </form>
      </div>
      <div class="col-md-4"></div>
    </div>
  </div>

  <div id="save" visibility: <?php echo $test;?>>
    <div id="inside"><p style="font-size: 40px">Your data is successfully saved!</p>
    <a href="chereg.php"><button id="okbutton" autofocus="autofocus">OKAY!</button></a>
    </div>
  </div>

</body>
</html>
<style type="text/css">

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
  top: 280px;
  left: 100px;
  right: 0;
  bottom: 0;
  margin: auto;
  font-size: 15px;
  color: black;
  font-weight: bold;
  width: 500px;
  height: 350px;
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

</style>
