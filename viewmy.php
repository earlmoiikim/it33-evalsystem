<?php 

include './database/database.php';
  $dbs = connect();
  $query = $dbs->prepare("SELECT * from subject 
  	inner join teachers ON subject.teacher = teachers.id");
  $query->execute();
  $results = $query->fetchAll(PDO::FETCH_OBJ);

 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body><br><br>



	<p><script LANGUAGE="JavaScript"  > 
if (window.print) {
document.write('<form><input type=button name=print value="Print" onClick="window.print()"></form>');
}
</script>
</p></td>
<table align="center" border="1" bgcolor="skyblue" target="_parent">
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