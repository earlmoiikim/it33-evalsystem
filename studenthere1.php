<?php
session_start();
include 'database/database.php';

if (isset($_POST['submit'])) {

  $user=$_POST['generatecode'];

  $data = processLogin($user);
    if($data){
        foreach($data as $row){
                   $us = $row['code'];

                   if($us == $user){
                    $_SESSION['code'] = $user;
                    header("Location: http://localhost/IT33/tt.php");

                   }
                   else{
                    header('Location: http://localhost/IT33/studenthere1.php?error');

                   }
            }
          }
          else{
            header('Location: http://localhost/IT33/studenthere1.php?error');

}


}

?>
<html>
<head>
	<title>Student LogIn</title>
  <!-- Bootstrap Core CSS -->
  <link href="style/bootstrap.min.css" rel="stylesheet">
  <!-- Icons -->
  <link rel="stylesheet" href="style/css/font-awesome.min.css" type="text/css">
  <!-- custom css -->
  <link href="style/master.css" rel="stylesheet">
</head>
<body style="background:linear-gradient(to bottom right,white,lightblue,white); ">
  <header>
    <div class="container-fluid bg-primary">

      <div class="row">
        <div class="container" style="padding: 20px 0px;">

          <div class="col-md-3">
            <div class="box">
                <img class="img-responsive" src="./images/logo.png"
                style="margin-left:70px; margin-top:5px">
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
   <br> <br>   <br> <br>
  <div class="container">
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4 bgwhite font3 padings" style="padding: 5px 40px 10px 40px;">
        <form method="POST" class="form-group" action="studenthere1.php">
          <h1 class="text-center">Student Log In</h1>
           <br>
          <input placeholder="Enter Code Here..." autocomplete="off" name="generatecode" type="text" style="height:50px"
          required class="form-control"/>
          <br>
          <div class="text-center margin">
         <button name="submit" class="btn btn-primary" style="margin-top: -2px"> <font size="5px;"> Submit</button>
        </form>
         <a href="index.php" class="btn btn-danger"> <font size="5px;">Back</a>
        </div>
      </div>
      <div class="col-md-4"></div>
    </div>
  </div>

    <div class="error">
      <?php
      if(isset($_GET['error'])==1){
   echo '<script type="text/javascript">
          alert("You Have Entered An Invalid Code");
        </script>';
      // echo '<p>You Have Entered An Invalid Code!<p/>';
      }
      ?>
    </div>

</body>
</html>
