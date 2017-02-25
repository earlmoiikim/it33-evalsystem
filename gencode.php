<?php
$test = "hidden";
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
.back{
  border: 1px solid black;
  position: absolute;
  right: 0px;
  left:0px;
  width: 900px;
  height: 440px;
  margin: auto;
  margin-top: -30px;
  box-shadow: 0px 8px 20px 20px rgba(255,255,255,0.5);
  background-color: #1F618D;

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
  top: 240px;
  left: 0;
  right: 0;
  bottom: 0;
  margin: auto;
  color: black;
  font-weight: bold;
  font-family: arial;
  width: 500px;
  height: 310px;
  background-color: #ededed;
  border: 3px blue;
  border-style: solid;
}
.okbutton{  
  margin-top: 10px;
  width: 150px;
  height: 70px;
  background-color: blue;
  color: white;
  font-size: 30px;
  border: 1px blue;
  font-weight: bolder;
  border-style: solid;
}
.okbutton:hover{
	background-color: #2F72F9;
}
.xx{
  width: 200px;
  border-radius: 5px;
  height: 50px;
  font-size:25px;
  font-family: Comic San MS;
  background-color: lightblue;
  margin-top: 20px;
  margin-left: -10px;
  font-weight: bold;
}
.xx:hover{
	background-color: #129DFE;

}
.backbutton{
     background-color: #057ACA;
   	margin-top: 80px;
	margin-left: 360px;
    color: white;
    padding: 8px 12px;
    border-radius: 4px;
    height: 40px;
    width: 130px;
    font-size: 20px;
    cursor: pointer;
    float: left;
}
.backbutton:hover {
    background-color: #129DFE;
}
.backbutton1{
    background-color: #057ACA;
	margin-top: -80px;
	margin-left: 145px;
    color: white;
    padding: 15px 32px;
    border-radius: 4px;
    height: 50px;
    width: 140px;
    font-size: 20px;
    cursor: pointer;
    float: left;
}
.backbutton1:hover {
    background-color: #129DFE;
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


      <h1> <p align="center"> <font color="white"> Copy the code below for Student Log In </h1>
     <br> 
        <h1 align="center" style="font-size: 50px"> <?php echo $code;?> </h1>
     
     <form action="studenthere.php" method="POST"> 
     <input type="hidden" name="code" value="<?php echo $code;?>">
     <br> <br>
     <p align="center">
         <input type="submit" value="REGISTER" class="xx">&nbsp&nbsp&nbsp&nbsp&nbsp <a href="adminrecord.php"> <input type="button" value="CANCEL" class="xx"></a> 

    </form> 
</div>

<div id="save" visibility: <?php echo $test;?>>
      
    <div id="inside"><p style="font-size: 40px">Your generated code is successfully saved!</p>
    <a href="gencode.php"><button class="okbutton" autofocus="autofocus">OKAY!</button></a>
    </div>



</body>
</html>