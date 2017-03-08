
<?php
session_start();
include "./database/database.php";
$db = connect();

 $msg = 'hidden';
$username='';

 if(isset($_POST['submit'])){
      $username = $_POST['user'];
      $password = $_POST['pass'];
      // $password = sha1($_POST['pass']);


            $data = Login($username,$password);
            if($data){
              foreach($data as $row){
                $_SESSION['username'] = $username;


                  if($username == 'admin'){
                     header('Location: adminrecord.php');
                  }
                  else{
                     $msg = '';
                 $username = $_POST['user'];
                  }


                     }
                 }


            else{
               $msg = '';
                 $username = $_POST['user'];

                }
     }


?>

<html>
<head>
  <title>Admin LogIn</title>
  <!-- Bootstrap Core CSS -->
  <link href="style/bootstrap.min.css" rel="stylesheet">
  <!-- Icons -->
  <link rel="stylesheet" href="style/css/font-awesome.min.css" type="text/css">
  <!-- custom css -->
  <link href="style/master.css" rel="stylesheet">
</head>
<header>
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

<body style="background:linear-gradient(to bottom right,white,lightblue,white);">

<div class="container">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4 bgwhite" style="padding: 0px 30px 10px 30px">
      <form class="form-group font3" method="POST" action="adminhere.php">
        <h1 class="text-center">Admin Login</h1>
          <input placeholder="Username" name="user" type="text"
          class="form-control" required/>
          <input placeholder="Password"  name ="pass" type="password"
          class="form-control" required style="margin-top: 10px;"/>
          <div class="pull-right" style="margin-top: 10px; margin-bottom: 20px;">
          <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      </form>
           <a href="index.php" class="btn btn-danger">Back</a>
          </div>
    </div>
    <div class="col-md-4"></div>
  </div>
</div>

   <div class="error_msg" visibility: <?php echo $msg; ?>>
    <p>Invalid Username or Password</p>
  </div>

</body>
</html>
