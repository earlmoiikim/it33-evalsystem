<?php
include './database/database.php';
$test='hidden';

$sql = "SELECT * FROM teachers";
				$db = connect();
				$sth = $db->prepare($sql);
				$sth->execute();
				$res = $sth->fetchAll(PDO::FETCH_OBJ);


if(isset($_POST['submit'])){
	echo $teach = $_POST['teach'];
	$db = connect();
	$que = $db->prepare("SELECT * FROM teachers WHERE name = '$teach'");
	$que->execute();
	$name = $que->fetch(PDO::FETCH_OBJ);
	$teach = $name->id;

	$arr = []; //put into this array
	$arr[] = $q1 = $_POST['qq'];
	$arr[] = $q2 = $_POST['qx'];
	$arr[] = $q3 = $_POST['qy'];
	$arr[] = $q4 = $_POST['qz'];
	$arr[] = $q5 = $_POST['qa'];
	$arr[] = $q6 = $_POST['qb'];
	$arr[] = $q7 = $_POST['qc'];
	$arr[] = $q8 = $_POST['qd'];

	//before anything else check if the teacher is already evaluated
	$sql1 = "SELECT * FROM subject WHERE teacher = '$teach'";
	$db = connect();
	$sth1 = $db->prepare($sql1);
	if($sth1->execute()){
		if($sth1->rowcount() > 0){
			$found = true; //teacher found
			$result = $sth1->fetch(PDO::FETCH_OBJ);
		}
		else{
			//teacher not found
			$found = false;
		}
	}

	//if teacher already exist
	if($found){
		//get the current evaluation count
		$var1 = $result->e1;
		$var2 = $result->e2;
		$var3 = $result->e3;
		$var4 = $result->e4;

	}else{
		//if the teacher did not exist 
		//all evaluation count is 0
		$var1 = 0;
		$var2 = 0;
		$var3 = 0;
		$var4 = 0;

	}

	//count results
	for($i=0;$i<count($arr);$i++){
		if($arr[$i] == "v1"){
			$var1 += 1;
		}
		elseif ($arr[$i] == "v2") {
			$var2 += 1;
		}
		elseif ($arr[$i]== "v3") {
			$var3 += 1;
		}
		else{
			$var4 += 1;
		}
	}

	$db = connect();
	if($found){ //if the teacher already exist
		//use update query
		$query2 = $db->prepare("UPDATE subject SET e4 = '$var4', e3 = '$var3', e2 = '$var2', e1 = '$var1' WHERE teacher = '$teach'");
	}
	else{
		//if the teacher did not exist yet
		//use insert into query
		$query2 = $db->prepare("INSERT INTO subject SET teacher = '$teach', e4 = '$var4', e3 = '$var3', e2 = '$var2', e1 = '$var1'");
	}
	
	//$query2->execute();
	//$com1 = ucfirst($_POST['comment1']);
    //$query = $db->prepare("INSERT INTO evaluation SET teach_id = '$teach',c1 = '$q1', c2 = '$q2', c3 = '$q3', c4 = '$q4', c5 = '$q5', c6 = '$q6', c7 = '$q7', c8 = '$q8', STRENGTHS = '$com1'");
    //$query2->execute();
    if($query2->execute()){
        header('Location: http://localhost/IT33/temporary1.php?success');
    }
    else{
        header('Location: http://localhost/IT33/temporary1.php?ERROR');
    }
}
if(isset($_GET['success'])){
	$test='';
}



?>
<html>
<head>

<title>Faculty Evaluation </title>

 <script src="js/jquery.js"></script> 

 <style type ="text/css" >
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
    padding:5px 15px; 
    border: 3px solid;
    border-radius: 25px;
    background: lightseagreen; 
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 10px;
    margin-left: -10px; 
    padding: 10px;
    margin-top: 40px;
    font-size: 25px;
    }
.button{
	position: absolute;
}
td{
	font-size: 18px;
}
.divTable{
	width: 90%;
	height: 90%;
	border: 1px solid;
	margin-top:10px;
	background: aquamarine;
}
table{
	width: 100%;
}
.top_title{
	width: 90%;
	background-color: lightseagreen;
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



</head>

<body style="background:linear-gradient(to bottom right,aquamarine,white,aquamarine); height:500px">

 <br>
	<p align="center"> <img src="http://localhost/it33/Images/header.jpg" height="280px" width="1500px"> </p>
	<br><br>

<center>
<div class="top_title">
	<h1 style="margin-top: -10px;">Teacher's Name:</h1>
<form id="insert_form" action="temporary1.php" method="POST">
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
		<td width="600px">1. The instructor shows enthusiasm for and is interested in the subject.</td>
		<td><input type="radio" name="qq" value="v1" required>Strongly Disagree</td>
		<td><input type="radio" name="qq" value="v2" required>Some What Disagree</td>
		<td><input type="radio" name="qq" value="v3" required>Some What agree</td>
		<td><input type="radio" name="qq" value="v4" required>Strongly agree</td>
	</tr>
	<!-- Q2 -->
	<tr>
		<td width="600px">2. The instructor stimulates your interest in the subject.</td>
		<td><input type="radio" name="qx" value="v1" required>Strongly Disagree</td>
		<td><input type="radio" name="qx" value="v2" required>Some What Disagree</td>
		<td><input type="radio" name="qx" value="v3" required>Some What agree</td>
		<td><input type="radio" name="qx" value="v4" required>Strongly agree</td>
	</tr>
	<!-- Q3 -->
	<tr>
		<td width="600px">3. The instructor encourages the students to ask questions.</td>
		<td><input type="radio" name="qy" value="v1" required>Strongly Disagree</td>
		<td><input type="radio" name="qy" value="v2" required>Some What Disagree</td>
		<td><input type="radio" name="qy" value="v3" required>Some What agree</td>
		<td><input type="radio" name="qy" value="v4" required>Strongly agree</td>
	</tr>
	<!-- Q4 -->

	<tr>
		<td width="600px">4. The instructor creates an open and fair environment.</td>
		<td><input type="radio" name="qz" value="v1" required>Strongly Disagree</td>
		<td><input type="radio" name="qz" value="v2" required>Some What Disagree</td>
		<td><input type="radio" name="qz" value="v3" required>Some What agree</td>
		<td><input type="radio" name="qz" value="v4" required>Strongly agree</td>
	</tr>

	<tr>
		<td width="600px">5. The instructor presents the subject matter clearly.</td>
		<td><input type="radio" name="qa" value="v1" required>Strongly Disagree</td>
		<td><input type="radio" name="qa" value="v2" required>Some What Disagree</td>
		<td><input type="radio" name="qa" value="v3" required>Some What agree</td>
		<td><input type="radio" name="qa" value="v4" required>Strongly agree</td>
	</tr>

	<tr>
		<td width="600px">6. The instructor adjusts teaching techniques to meet the needs of students.</td>
		<td><input type="radio" name="qb" value="v1" required>Strongly Disagree</td>
		<td><input type="radio" name="qb" value="v2" required>Some What Disagree</td>
		<td><input type="radio" name="qb" value="v3" required>Some What agree</td>
		<td><input type="radio" name="qb" value="v4" required>Strongly agree</td>
	</tr>
	<tr>
		<td width="600px">7. The instructor's presentations and explanations of concepts were clear.</td>
		<td><input type="radio" name="qc" value="v1" required>Strongly Disagree</td>
		<td><input type="radio" name="qc" value="v2" required>Some What Disagree</td>
		<td><input type="radio" name="qc" value="v3" required>Some What agree</td>
		<td><input type="radio" name="qc" value="v4" required>Strongly agree</td>
	</tr>
	<tr>
		<td width="600px">8. Assignments and Exams covered important aspects of the course.</td>
		<td><input type="radio" name="qd" value="v1" required>Strongly Disagree</td>
		<td><input type="radio" name="qd" value="v2" required>Some What Disagree</td>
		<td><input type="radio" name="qd" value="v3" required>Some What agree</td>
		<td><input type="radio" name="qd" value="v4" required>Strongly agree</td>
	</tr>
	
	  
</table>
  	<div class="comments">

<table cellpadding="10">
  <tr>
      <td width="850px" align="center"><strong> <i> <font size="3"> What are the strengths of your teacher?</font> </i></strong>
<br><br>      <textarea rows="3" cols="37" name="comment1" minlength="10" placeholder="Leave your comments here.." required></textarea>
	  </td>
  	  <td><strong> <i> <font size="3"> What are the weaknesses of your teacher?</font> </i></strong>
<br><br>
	  <textarea rows="3" cols="40" name="comment1" minlength="10" placeholder="Leave your comments here.." required></textarea>
	  			</td>
	  		</tr>
	  		
	  	</table>
     </div>



<div class="sub">
<input type="submit" value="Submit" name="submit" id="submit">
</div>
</form>


</div>

</center>

<div id="save" visibility: <?php echo $test;?>>
			
		<div id="inside"><p style="font-size: 40px">Your data is successfully saved!</p>
		<a href="index.php"><button id="okbutton" autofocus="autofocus">OKAY!</button></a>
		</div>

</body>
</html>
