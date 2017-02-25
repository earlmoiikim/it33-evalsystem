
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
.button {
    background-color: #064F7C; 
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 50px;
    width: 330px;
    height: 150px;
    margin: 4px 2px;
    cursor: pointer;
    transition-duration: 0.4s;
}
.button1:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

.button2:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
.error{
  padding: 10px;
  position: absolute;
  top: 620px;
  left: 650px;
  font-family: Arial;
  font-weight: bold;
  font-size: 25px;
  color: white;
}
form {
  box-sizing: border-box;
  width: 500px;
  margin: 10px   auto 0;
  box-shadow: 10px 10px 10px 10px rgba(0, 0, 0, 0.2);
  padding-bottom: 100px;
  border-radius: 10px;
  background-color: #05639D;
 
}
form h1 {
  box-sizing: border-box;
  padding: 29px;
  color: white;
  font-size: 40px;
}
input {
  margin: 40px 25px;
29width: 400px;
  display: block;
  border: none;
  padding: 8px 0;
  border-bottom: solid 1px white;
  transition: all 0.6s cubic-bezier(0.64, 0.09, 0.08, 1);
  background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 96%, #1abc9c 4%);
  background-position: -200px 0;
  background-size: 200px 100%;
  background-repeat: no-repeat;
  color: white;
  font-size: 30px;
  font-family: arial;
}
input:focus, input:valid {
  box-shadow: none;
  outline: none;
  background-position: 0 0;
}
input:focus::-webkit-input-placeholder, input:valid::-webkit-input-placeholder {
  color: #26CFDA;
  font-size: 20px;
  transform: translateY(-50px);
  visibility: visible !important;
}
button {
  border: none;
  background: #0581CD;
  cursor: pointer;
  border-radius: 3px;
  padding: 6px;
  width: 250px;
  color: white;
  margin-left: -120px;
  box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.2);
  font-size: 30px;
}
button:hover {
  transform: translateY(-3px);
  box-shadow: 0 6px 6px 0 rgba(0, 0, 0, 0.2);
}
.error_msg{
  position: absolute;
  width: 400px;
  height: 40px;
  left: 0;
  right: 0;
  margin: auto;
  background-color: #FDEBD0 ;
  margin-top: -70px;
  border-radius: 10px;
  text-align: center;
}
.error_msg p{
  line-height: 10px;
  font-weight: bold;
  color: red;
}
#backb{
	margin-top: -147px;
	margin-left: 920px;
	width: 110px;
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
  </div>


</center>
</head>

<body style="background:linear-gradient(to bottom right,white,lightblue,white); height:790px">
  <br>
   <center>

<form method="POST" action="adminhere.php">
  <h1>Admin Login</h1>
    <input placeholder="Username" name="user" type="text" required/>
    <input placeholder="Password"  name ="pass" type="password" required/>
     <button name="submit">Submit</button>
 </center>  

</form>
       <a href="index.php"> <button id="backb">Back</button> 
   <div class="error_msg" visibility: <?php echo $msg; ?>>
    <p>Invalid Username or Password</p>
  </div>


   </center>
   </body>
   </html>