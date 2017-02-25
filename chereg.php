<html>
<head>
  <title>List of Teachers</title>

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
  #font{
    font-size: 30px;
  }
#xx{
  width: 150px;
  height: 50px;
  font-size:20px;
  font-family: Comic San MS;
  background-color: skyblue;
  border: 3px solid;
  border-radius: 25px;
   position: absolute;
  left: 70px;
}
#xx1{
  width: 120px;
  height: 50px;
  font-size:20px;
  font-family: Comic San MS;
  background-color: skyblue;
  border: 3px solid;
  border-radius: 25px;
  position: absolute;
  right: 130px;
}

table {
    border-collapse: collapse;
    background-color: #D6EAF8;
}
font{
  font-size: 20px;
  font-weight: bold;
}
.backbutton{
    background-color: #057ACA;
    margin-top: 30px;
    margin-left: 15px;
    color: white;
    padding: 13px 15px;
    border-radius: 4px;
    height: 55px;
    width: 120px;
    font-size: 25px;
    cursor: pointer;
    float: left;
}
.backbutton:hover {
    background-color: #129DFE;
}
.backbutton1{
    background-color: #057ACA;
    margin-top: 30px;
    margin-left: 720px;
    color: white;
    padding: 8px 22px;
    border-radius: 5px;
    height: 55px;
    width: 180px;
    font-size: 23px;
    cursor: pointer;
    float: left;
}
.backbutton1:hover {
    background-color: #129DFE;
}
.headingteacher{
  font-family: arial;
  font-size: 45px;
  font-weight: bolder;
  margin-top: -75px;
  text-align: center;
}
.myButton {
-moz-box-shadow:inset 0px 1px 0px 0px #97c4fe;
-webkit-box-shadow:inset 0px 1px 0px 0px #97c4fe;
box-shadow:inset 0px 1px 0px 0px #97c4fe;
background-color:#3d94f6;
-moz-border-radius:6px;
-webkit-border-radius:6px;
border-radius:6px;
border:1px solid #337fed;
display:inline-block;
cursor:pointer;
color:#ffffff;
font-family:Arial;
font-size:14px;
font-weight: bold;
padding: 3px;
text-decoration:none;
text-shadow:0px 1px 0px #1570cd;
height: 25px;
width: 55px;
}

.myButton:hover {

background-color:#1e62d0;

}

.myButton:active {
position:relative;
top:1px;
}
.myButton1 {
-moz-box-shadow:inset 0px 1px 0px 0px #97c4fe;
-webkit-box-shadow:inset 0px 1px 0px 0px #97c4fe;
box-shadow:inset 0px 1px 0px 0px #97c4fe;
background-color:#3d94f6;
-moz-border-radius:6px;
-webkit-border-radius:6px;
border-radius:6px;
border:1px solid #337fed;
display:inline-block;
cursor:pointer;
color:#ffffff;
font-family:Arial;
font-size:14px;
font-weight: bold;
padding: 3px;
text-decoration:none;
text-shadow:0px 1px 0px #1570cd;
height: 25px;
width: 55px;
}

.myButton1:hover {

background-color:#1e62d0;

}

.myButton1:active {
position:relative;
top:1px;
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

  <div class="headingteacher"> List of Teachers </div>
    <br> <br>
  <table cellspacing="2" cellpadding="3" align="center" width="1200px" border="3">
  <tr>
    <td align="center"><font>Employee ID</td>
    <td align="center"><font>Name</td>
    <td align="center"><font>Department</td>
    <td align="center"><font>Function</td>

  </tr>
  <?php
include './database/database.php';
      $sql = "SELECT * FROM teachers";

      $dbh = connect();
      $sth = $dbh->prepare($sql);
      $sth->execute();

      $results = $sth->fetchAll(PDO::FETCH_OBJ);
      ?>


      <?php foreach ($results as $g):?>

      
      <tr>
        <td align="center"><?php echo  $g->emp_id; ?></td>
        <td align="center"><?php echo  $g->name; ?></td>
        <td align="center"><?php echo  $g->department; ?></td>
        <td align="center">
          <a href="functions/edit.php?edit=<?php echo  $g->id; ?>"><button class="mybutton"> Edit </button></a>
          <a href="functions/delete.php?id=<?php echo $g->id; ?>"><button class="mybutton1">Delete </button></a>
        
        </td>

      </tr>
      <?php endforeach; ?>
  
</table>    
  <div class="back">
 <a href="addnewteacher.php"> <button class="backbutton1">Add Teacher </button></a>
 <a href="adminrecord.php"> <button class="backbutton"> BACK </button> </a> 
 </div>
</body>
</html>