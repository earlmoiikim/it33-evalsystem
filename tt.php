<?php
session_start();
include './database/database.php';
$test='hidden';

$sql = "SELECT * FROM teachers";
        $db = connect();
        $sth = $db->prepare($sql);
        $sth->execute();
        $res = $sth->fetchAll(PDO::FETCH_OBJ);

if(isset($_GET['success'])){
  $test='';
}
?>


<html>
<head>
	<title>Add New Teacher</title>

<script src="js/jquery.js"></script> 

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
.selectstyle{
width:868px;
height:500px;
margin:20px auto;
font-family:'Arvo',serif
}
select {
    width: 300px;
    padding: 6px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    font-size: 15px;
}
input[type=submit] {
     background-color: #057ACA;
    margin-left: 780px; 
    padding: 10px;
    margin-top: -5px;
    font-size: 25px;
    color: white;
    padding: 15px 32px;
    border-radius: 4px;
    height: 50px;
    width: 130px;
    font-size: 20px;
    cursor: pointer;
    float: left;
}
.submit:hover{
  background-color: #129DFE;
}
.button{
  position: absolute;
}
td{
  font-size: 18px;
}
.divTable{
  width: 90%;
  height: 50%;
  border: 1px solid;
  margin-top:10px;
  background: #F2F3F4;
}
table{
  width: 100%;
}
.top_title{
  width: 90%;
  background-color: #057ACA;
}
.sub{
  position: absolute;
  left: 0;
  right: 0;
  margin: auto;
  margin-top: 100px;
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
  font-family: Arial Black;
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
  margin-top: -5px;
  width: 150px;
  height: 80px;
  background-color: blue;
  color: white;
  border-radius: 4px;
  font-size: 30px;
  border: 1px blue;
  font-weight: bolder;
  border-style: solid;
}
.okbutton:hover{
  background-color: #2F72F9;
}

.comments{
  position: absolute;
  left: 95;
  margin: auto;
  margin-top: 10px;
  font-family: arial;
  font-size: 20px;
  font-weight: 40px; 
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

<center>
<div class="top_title">
  <h1 style="margin-top: -60px;">Select Your Teacher's Name:</h1>

<!-- go to evalprocess.php for submission evaluation -->
<form id="insert_form" action="evalprocess.php" method="POST">

<select style="margin-top: -10px;" name="teach">
<?php foreach ($res as $g):?>
  <option value="<?php echo $g->name; ?>"><?php echo $g->name; ?> </option>  
<?php endforeach; ?>  
</select>

</div>
<!-- 
<input type="text"  name="teach" value="<?php //echo $g->id; ?>"> -->
<div class="divTable">
<table align="center" cellpadding="4">
  <tr>
    <td width="600px"><b> 1. The instructor shows enthusiasm for and is interested in the subject. </b></td>
    <td><input type="radio" name="qq" value="1" required>Strongly Disagree</td>
    <td><input type="radio" name="qq" value="2" required>Some What Disagree</td>
    <td><input type="radio" name="qq" value="3" required>Some What agree</td>
    <td><input type="radio" name="qq" value="4" required>Strongly agree</td>
  </tr>
  <!-- Q2 -->
  <tr>
    <td width="600px"> <b> 2. The instructor stimulates your interest in the subject. </b></td>
    <td><input type="radio" name="qx" value="1" required>Strongly Disagree</td>
    <td><input type="radio" name="qx" value="2" required>Some What Disagree</td>
    <td><input type="radio" name="qx" value="3" required>Some What agree</td>
    <td><input type="radio" name="qx" value="4" required>Strongly agree</td>
  </tr>
  <!-- Q3 -->
  <tr>
    <td width="600px"><b>3. The instructor encourages the students to ask questions. </b></td>
    <td><input type="radio" name="qy" value="1" required>Strongly Disagree</td>
    <td><input type="radio" name="qy" value="2" required>Some What Disagree</td>
    <td><input type="radio" name="qy" value="3" required>Some What agree</td>
    <td><input type="radio" name="qy" value="4" required>Strongly agree</td>
  </tr>
  <!-- Q4 -->

  <tr>
    <td width="600px"><b>4. The instructor creates an open and fair environment.</b></td>
    <td><input type="radio" name="qz" value="1" required>Strongly Disagree</td>
    <td><input type="radio" name="qz" value="2" required>Some What Disagree</td>
    <td><input type="radio" name="qz" value="3" required>Some What agree</td>
    <td><input type="radio" name="qz" value="4" required>Strongly agree</td>
  </tr>

  <tr>
    <td width="600px"><b>5. The instructor presents the subject matter clearly. </b></td>
    <td><input type="radio" name="qa" value="1" required>Strongly Disagree</td>
    <td><input type="radio" name="qa" value="2" required>Some What Disagree</td>
    <td><input type="radio" name="qa" value="3" required>Some What agree</td>
    <td><input type="radio" name="qa" value="4" required>Strongly agree</td>
  </tr>

  <tr>
    <td width="600px"><b>6. The instructor adjusts teaching techniques to meet the needs of students. </b></td>
    <td><input type="radio" name="qb" value="1" required>Strongly Disagree</td>
    <td><input type="radio" name="qb" value="2" required>Some What Disagree</td>
    <td><input type="radio" name="qb" value="3" required>Some What agree</td>
    <td><input type="radio" name="qb" value="4" required>Strongly agree</td>
  </tr>
  <tr>
    <td width="600px"><b>7. The instructor's presentations and explanations of concepts were clear.</b></td>
    <td><input type="radio" name="qc" value="1" required>Strongly Disagree</td>
    <td><input type="radio" name="qc" value="2" required>Some What Disagree</td>
    <td><input type="radio" name="qc" value="3" required>Some What agree</td>
    <td><input type="radio" name="qc" value="4" required>Strongly agree</td>
  </tr>
  <tr>
    <td width="600px"><b>8. Assignments and Exams covered important aspects of the course. </b></td>
    <td><input type="radio" name="qd" value="1" required>Strongly Disagree</td>
    <td><input type="radio" name="qd" value="2" required>Some What Disagree</td>
    <td><input type="radio" name="qd" value="3" required>Some What agree</td>
    <td><input type="radio" name="qd" value="4" required>Strongly agree</td>
  </tr>
  
    
</table>
    <div class="comments">

<table cellpadding="10">
  <tr>
      <td width="850px" align="center"><strong> <i> <font size="3"> <b> What are the strengths of your teacher?</font> </i></strong>
<br><br>      <textarea rows="3" cols="37" name="str" minlength="10" placeholder="Leave your comments here.."></textarea>
    </td>
      <td><strong> <i> <font size="3"> What are the weaknesses of your teacher?</font> </i></strong>
<br><br>
    <textarea rows="3" cols="40" name="weak" minlength="10" placeholder="Leave your comments here.."></textarea>
          </td>
        </tr>
        
      </table>
     </div>

<!-- get user code ready for submit-->
<input type="text" hidden value="<?php echo $_SESSION['code'];?>" name="code">

<div class="sub">
<input type="submit" value="Submit" name="submit" class="submit">
</div>
</form>


</div>

</center>

<div id="save" visibility: <?php echo $test;?>>
      
    <div id="inside"><p style="font-size: 30px">Your evaluation has been submitted. <br><br> <font face="comic sans ms"> Thank You for your time! </p>
    <a href="tt.php"><button class="okbutton" autofocus="autofocus">OKAY!</button></a>
    </div>

</body>
</html>

<?php 
//from evalprocess.php
if(isset($_GET['error']) && $_GET['error'] == 1){
  echo '<script type="text/javascript">
          alert("You have already evaluated this teacher");
        </script>';
}

 ?>
