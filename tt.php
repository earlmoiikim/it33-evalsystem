<?php
session_start();
include './database/database.php';
include 'ns.php';
$test='hidden';

$sql = "SELECT * FROM teachers";
        $db = connect();
        $sth = $db->prepare($sql);
        $sth->execute();
        $res = $sth->fetchAll(PDO::FETCH_OBJ);

if(isset($_GET['success'])){
  $test='';
}

$section = '';
if(isset($student) && $student == "nursing"){
  $section = nursing();
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
    margin-left: 730px;
    margin-top: -5px;
    color: white;
    padding: 10px 15px;
    border-radius: 4px;
    height: 50px;
    width: 300px;
    font-size: 30px;
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
  overflow: scroll;

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
  margin-top: -1200px;
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
.font1{
  color: #E30826;
   text-decoration: underline;
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
  <h1 style="margin-top: -70px;">Select Your Teacher's Name:</h1>


<!-- go to evalprocess.php for submission evaluation -->
<form id="insert_form" action="evalprocess.php" method="POST">

<select style="margin-top: -20px;" name="teach">
<?php foreach ($res as $g):?>
  <option value="<?php echo $g->name; ?>"><?php echo $g->name; ?> </option>
<?php endforeach; ?>
</select>

</div>
<!--
<input type="text"  name="teach" value="<?php //echo $g->id; ?>"> -->
<div class="divTable">
<table align="center" cellpadding="3" cellspacing="3" width="500px">
   <tr>
    <td> <font class="font1"> <b> <u> A1. TEACHING SKILLS </u> </b> </font>
    </tr>
    <tr>
     <td> <font size="4px"> <b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i> The instructor: </font> </b> </i> </td>
     </tr>
  <tr>
    <td><b> 1. discusses the course outline, objectives, and expectations. </b></td>
    <td> <select name="ts[0]" required="required">
   <option selected="true" disabled="disabled">-CHOOSE-</option>
  <option value="4" >Excellent</option>
  <option value="3">Very Good</option>
  <option value="2">Satisfactory</option>
  <option value="1">Unsatisfactory</option>
          </select>
    </td>

    <td>  <b> 2. presents and explains the goals of each lesson. </b>
    <td> <select name="ts[1]" required>
   <option selected="true" disabled="disabled">-CHOOSE-</option>
   <option value="4" >Excellent</option>
    <option value="3">Very Good</option>
    <option value="2">Satisfactory</option>
    <option value="1">Unsatisfactory</option>
          </select>
    </td>
  </tr>

     <tr>
    <td> <b> 3. presents the grading system in the first meeting. </b></td>
    <td> <select name="ts[2]" required>
   <option selected="true" disabled="disabled">-CHOOSE-</option>
    <option value="4" >Excellent</option>
    <option value="3">Very Good</option>
    <option value="2">Satisfactory</option>
    <option value="1">Unsatisfactory</option>
          </select>
    </td>
    <td> <b> 4. is knowledgeable about the subject matter. </b></td>
 <td> <select name="ts[3]" required>
   <option selected="true" disabled="disabled">-CHOOSE-</option>
    <option value="4" >Excellent</option>
    <option value="3">Very Good</option>
    <option value="2">Satisfactory</option>
    <option value="1">Unsatisfactory</option>
          </select>
    </td>
  </tr>

  <tr>
    <td> <b> 5. uses different teaching styles to make the subject more understandable. </b></td>
<td> <select name="ts[4]" required>
   <option selected="true" disabled="disabled">-CHOOSE-</option>
    <option value="4" >Excellent</option>
    <option value="3">Very Good</option>
    <option value="2">Satisfactory</option>
    <option value="1">Unsatisfactory</option>
          </select>
    </td>
    <td> <b> 6. encourages and/or requires reading of additional publications & books. </b></td>
    <td> <select name="ts[5]" required>
   <option selected="true" disabled="disabled">-CHOOSE-</option>
    <option value="4" >Excellent</option>
    <option value="3">Very Good</option>
    <option value="2">Satisfactory</option>
    <option value="1">Unsatisfactory</option>
          </select>
    </td>
  </tr>

  <tr>
    <td> <b> 7. uses language and words that can be easily understood. </b></td>
    <td> <select name="ts[6]" required>
   <option selected="true" disabled="disabled">-CHOOSE-</option>
    <option value="4" >Excellent</option>
    <option value="3">Very Good</option>
    <option value="2">Satisfactory</option>
    <option value="1">Unsatisfactory</option>
          </select>
    </td>
    <td> <b> 8. makes sure that all interaction in class is related to the topic. </b></td>
    <td> <select name="ts[7]" required>
   <option selected="true" disabled="disabled">-CHOOSE-</option>
    <option value="4" >Excellent</option>
    <option value="3">Very Good</option>
    <option value="2">Satisfactory</option>
    <option value="1">Unsatisfactory</option>
          </select>
    </td>
  </tr>

  <tr>
    <td> <b> 9. gives example that can be useful in the real world. </b></td>
     <td> <select name="ts[8]" required>
   <option selected="true" disabled="disabled">-CHOOSE-</option>
    <option value="4" >Excellent</option>
    <option value="3">Very Good</option>
    <option value="2">Satisfactory</option>
    <option value="1">Unsatisfactory</option>
          </select>
    </td>
  </tr>

  <?php echo $section; ?>

  <tr>
    <td> <font class="font1"> <b> <u> B. EVALUATING STUDENTS </u> </b> </font>
    </tr>
    <tr>
     <td> <font size="4px"> <b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i> The instructor: </font> </b> </i> </td>
     </tr>
  <tr>
    <td><b> 1. gives quizzes and exams that are within the lessons taken. </b></td>
     <td> <select name="es[0]" required>
    <option selected="true" disabled="disabled">-CHOOSE-</option>
    <option value="4" >Excellent</option>
    <option value="3">Very Good</option>
    <option value="2">Satisfactory</option>
    <option value="1">Unsatisfactory</option>
          </select>
    </td>
    <td><b> 2. is fair in rating the students, giving reward and sanctions. </b></td>
     <td> <select name="es[1]" required>
    <option selected="true" disabled="disabled">-CHOOSE-</option>
    <option value="4" >Excellent</option>
    <option value="3">Very Good</option>
    <option value="2">Satisfactory</option>
    <option value="1">Unsatisfactory</option>
          </select>
    </td>
  </tr>

  <tr>
    <td><b> 3. checks and returns the quizzes, test papers and requirements on time. </b></td>
     <td> <select name="es[2]" required>
    <option selected="true" disabled="disabled">-CHOOSE-</option>
    <option value="4" >Excellent</option>
    <option value="3">Very Good</option>
    <option value="2">Satisfactory</option>
    <option value="1">Unsatisfactory</option>
          </select>
    </td>
    <td width="700px"><b> 4. completes and discusses evaluation of student's performance. </b></td>
     <td> <select name="es[3]" required>
    <option selected="true" disabled="disabled">-CHOOSE-</option>
    <option value="4" >Excellent</option>
    <option value="3">Very Good</option>
    <option value="2">Satisfactory</option>
    <option value="1">Unsatisfactory</option>
          </select>
    </td>
  </tr>

  <tr>
    <td width="700px"><b> 5. opens more chances for further enhancement through oral recitations. projects, specials reports and assignments. </b></td>
     <td> <select name="es[4]" required>
    <option selected="true" disabled="disabled">-CHOOSE-</option>
    <option value="4" >Excellent</option>
    <option value="3">Very Good</option>
    <option value="2">Satisfactory</option>
    <option value="1">Unsatisfactory</option>
          </select>
    </td>
  </tr>

      <tr>
    <td> <font class="font1"> <b> <u> C. MANAGEMENT SKILLS </u> </b> </font>
    </tr>
    <tr>
     <td> <font size="4px"> <b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i> The instructor: </font> </b> </i> </td>
     </tr>
  <tr>
    <td width="700px"><b> 1. handles the classroom activities readily and competently. </b></td>
     <td> <select name="ms[0]" required>
    <option selected="true" disabled="disabled">-CHOOSE-</option>
    <option value="4" >Excellent</option>
    <option value="3">Very Good</option>
    <option value="2">Satisfactory</option>
    <option value="1">Unsatisfactory</option>
          </select>
    </td>
    <td width="700px"><b> 2. keeps classroom clean and in order. </b></td>
     <td> <select name="ms[1]" required>
    <option selected="true" disabled="disabled">-CHOOSE-</option>
    <option value="4" >Excellent</option>
    <option value="3">Very Good</option>
    <option value="2">Satisfactory</option>
    <option value="1">Unsatisfactory</option>
          </select>
    </td>
  </tr>

  <tr>
    <td width="700px"><b> 3. starts and ends the class on time. </b></td>
     <td> <select name="ms[2]" required>
    <option selected="true" disabled="disabled">-CHOOSE-</option>
    <option value="4" >Excellent</option>
    <option value="3">Very Good</option>
    <option value="2">Satisfactory</option>
    <option value="1">Unsatisfactory</option>
          </select>
    </td>
    <td width="700px"><b> 4. starts and ends the class with a prayer. </b></td>
     <td> <select name="ms[3]" required>
    <option selected="true" disabled="disabled">-CHOOSE-</option>
    <option value="4" >Excellent</option>
    <option value="3">Very Good</option>
    <option value="2">Satisfactory</option>
    <option value="1">Unsatisfactory</option>
          </select>
    </td>
  </tr>

  <tr>
    <td width="700px"><b> 5. implements policies on wearing of proper uniform, shoes, ID. </b></td>
     <td> <select name="ms[4]" required>
    <option selected="true" disabled="disabled">-CHOOSE-</option>
    <option value="4" >Excellent</option>
    <option value="3">Very Good</option>
    <option value="2">Satisfactory</option>
    <option value="1">Unsatisfactory</option>
          </select>
    </td>
    <td width="700px"><b> 6. enforces policies on attendance, excuse and admission slips. </b></td>
     <td> <select name="ms[5]" required>
    <option selected="true" disabled="disabled">-CHOOSE-</option>
    <option value="4" >Excellent</option>
    <option value="3">Very Good</option>
    <option value="2">Satisfactory</option>
    <option value="1">Unsatisfactory</option>
          </select>
    </td>
  </tr>

  <tr>
    <td width="700px"><b> 7. maintains good behavior/conduct of students in the classroom. </b></td>
     <td> <select name="ms[6]" required>
    <option selected="true" disabled="disabled">-CHOOSE-</option>
    <option value="4" >Excellent</option>
    <option value="3">Very Good</option>
    <option value="2">Satisfactory</option>
    <option value="1">Unsatisfactory</option>
          </select>
    </td>
    <td width="700px"><b> 8. reports to class regularly. </b></td>
     <td> <select name="ms[7]" required>
    <option selected="true" disabled="disabled">-CHOOSE-</option>
    <option value="4" >Excellent</option>
    <option value="3">Very Good</option>
    <option value="2">Satisfactory</option>
    <option value="1">Unsatisfactory</option>
          </select>
    </td>
  </tr>

      <tr>
    <td> <font class="font1"> <b> <u> D. INTERPERSONAL RELATIONSHIP & COMMUNICATION SKILLS </u> </b> </font>
    </tr>
    <tr>
     <td> <font size="4px"> <b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i> The instructor: </font> </b> </i> </td>
     </tr>
  <tr>
    <td width="700px"><b> 1. builds professional relationship with us. </b></td>
     <td> <select name="ir[0]" required>
    <option selected="true" disabled="disabled">-CHOOSE-</option>
    <option value="4" >Excellent</option>
    <option value="3">Very Good</option>
    <option value="2">Satisfactory</option>
    <option value="1">Unsatisfactory</option>
          </select>
    </td>
    <td width="700px"><b> 2. gives constructive correction without embarrassing us. </b></td>
     <td> <select name="ir[1]" required>
    <option selected="true" disabled="disabled">-CHOOSE-</option>
    <option value="4" >Excellent</option>
    <option value="3">Very Good</option>
    <option value="2">Satisfactory</option>
    <option value="1">Unsatisfactory</option>
          </select>
    </td>
  </tr>

  <tr>
    <td width="700px"><b> 3. is sensitive to the students' needs (ventilation, lighting, academics, counseling, etc.). </b></td>
     <td> <select name="ir[2]" required>
    <option selected="true" disabled="disabled">-CHOOSE-</option>
    <option value="4" >Excellent</option>
    <option value="3">Very Good</option>
    <option value="2">Satisfactory</option>
    <option value="1">Unsatisfactory</option>
          </select>
    </td>
    <td width="700px"><b> 4. speaks understandably loudly and clearly. </b></td>
     <td> <select name="ir[3]" required>
    <option selected="true" disabled="disabled">-CHOOSE-</option>
    <option value="4" >Excellent</option>
    <option value="3">Very Good</option>
    <option value="2">Satisfactory</option>
    <option value="1">Unsatisfactory</option>
          </select>
    </td>
  </tr>

      <tr>
    <td> <font class="font1"> <b> <u> E. PERSONAL QUALITIES </u> </b> </font>
    </tr>
    <tr>
     <td> <font size="4px"> <b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i> The instructor: </font> </b> </i> </td>
     </tr>
  <tr>
    <td width="700px"><b> 1. acts decently and is well groomed, tidy. </b></td>
     <td> <select name="pq[0]" required>
    <option selected="true" disabled="disabled">-CHOOSE-</option>
    <option value="4" >Excellent</option>
    <option value="3">Very Good</option>
    <option value="2">Satisfactory</option>
    <option value="1">Unsatisfactory</option>
          </select>
    </td>
    <td width="700px"><b> 2. is open minded, artistic and resourceful. </b></td>
     <td> <select name="pq[1]" required>
    <option selected="true" disabled="disabled">-CHOOSE-</option>
    <option value="4" >Excellent</option>
    <option value="3">Very Good</option>
    <option value="2">Satisfactory</option>
    <option value="1">Unsatisfactory</option>
          </select>
    </td>
  </tr>

  <tr>
    <td width="700px"><b> 3. maintains good relationship with the students and creates an atmosphere of common respect to students. </b></td>
     <td> <select name="pq[2]" required>
    <option selected="true" disabled="disabled">-CHOOSE-</option>
    <option value="4" >Excellent</option>
    <option value="3">Very Good</option>
    <option value="2">Satisfactory</option>
    <option value="1">Unsatisfactory</option>
          </select>
    </td>
  </tr>

        <div class="comments">

<table cellpadding="10">
  <tr>
      <td width="850px" align="center"><strong> <i> <font size="4" color="red">  <b> What are the strengths of your teacher?</font> </i></strong>
<br><br>      <textarea rows="3" cols="37" name="str" minlength="10" placeholder="Leave your comments here.."></textarea>
    </td>
      <td><strong> <i> <font size="4" color="red"> What are the weaknesses of your teacher?</font> </i></strong>
<br><br>
    <textarea rows="3" cols="40" name="weak" minlength="10" placeholder="Leave your comments here.."></textarea>
          </td>
        </tr>

</div>
</table>


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
