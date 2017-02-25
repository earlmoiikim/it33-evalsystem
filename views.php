<?php 

include './database/database.php';
  $dbs = connect();
  $query = $dbs->prepare("SELECT * from subject 
  	inner join teachers ON subject.teacher = teachers.id");
  $query->execute();
  $results = $query->fetchAll(PDO::FETCH_OBJ);

 ?>

<html>
<head>
<title> VIEW </title>

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
table{
	font-family: arial;
	text-align: center;
    background-color: #F2F3F4;

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

<table border="1" style= "border-collapse: collapse" cellspacing="10" cellpadding="10" align="center">
	<tr>
		<th>Department</th>
		<th>Teacher Name</th>
		<th>Excellent</th>
		<th>Average</th>
		<th>Good</th>
		<th>Poor</th>
	</tr>
	<?php foreach($results as $g): ?>
	<tr>
		<td><?php echo $g->department ?></td>
		<td><?php echo $g->name ?></td>
		<td><?php echo $g->e4 ?></td>
		<td><?php echo $g->e3 ?></td>
		<td><?php echo $g->e2 ?></td>
		<td><?php echo $g->e1 ?></td>
	</tr>
	<?php endforeach; ?>
</table>


</body>
</html>