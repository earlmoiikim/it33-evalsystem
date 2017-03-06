<?php
$test = "hidden";
$test1 = "";
include "./database/database.php";
$db = connect();
$i = true;
while($i){
  $string = "abcdefghijklmnopqrstuvwxyz1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ";
  $code = "";
for($i=0; $i<7;$i++){
  $y = rand(0,strlen($string)-1);
  $code .=$string[$y];
}

$query = $db->prepare("SELECT * FROM users");
$query->execute();
$result = $query->fetchAll(PDO::FETCH_OBJ);

$i = false;
  foreach ($result as $val) {
    if($val->code == $code){
      $i = true;
    }
  }
}

if (isset($_GET["success"])){
  $test = "";
  $test1 = "hidden";
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

  <form action="studenthere.php" method="POST">
  <div class="container">
    <div class="col-md-3"></div>
    <div class="col-md-6">
      <div class="form-group" visibility: <?php echo $test1;?>>
        <h2> <p align="center"><font color="black">
          Copy the code below for Student Log In </h2>

          <h1 align="center" style="font-size: 50px"> <?php echo $code;?> </h1>
          <div align="center">
            <label for="">Select Department : </label>
            <select name="dept" class="form-control" required>
               <option></option>
               <option>ICT</option>
               <option>NURSING</option>
               <option>CHM</option>
               <option>ENGINEERING</option>
               <option>EDUCATION</option>
               <option>CRIMINOLOGY</option>
               <option>B.A</option>
            </select>
          </div>

        <input type="hidden" name="code" value="<?php echo $code;?>">
        <div class="row" style="margin-top: 20px;">
          <div class="col-sm-6 pull-center">
            <button type="submit" class="btn btn-primary btn-block"
            name="sub"><i class="fa fa-check"></i> Register</button>
          </div>
          <div class="col-sm-6">
            <a href="adminrecord.php"><button type="button" name="button"
              class="btn btn-danger btn-block">
            <i class="fa fa-arrow-left"></i> Back</button></a>
          </div>
        </div>

      </form>
      </div>

      <div id="save" visibility: <?php echo $test;?>>
      <div id="inside"><p style="font-size: 40px">
        Your generated code is successfully saved!</p>
        <div class="text-center">
          <a href="gencode.php"><button type="button" class="btn btn-success"
            name="button"><i clas="fa fa-thumps-up"></i> Okay</button></a>
        </div>
      </div>
      </div>

    </div>
    <div class="col-md-3"></div>
  </div>
</body>
</html>
