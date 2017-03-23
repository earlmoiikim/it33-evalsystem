<?php
include 'database/database.php';
$output = '';
      $sql = "SELECT * FROM teachers";
      $dbh = connect();
      $sth = $dbh->prepare($sql);
      $sth->execute();

      $results = $sth->fetchAll(PDO::FETCH_OBJ);
      if (count($results) > 0)
{
  $output.=' <table class="table table-responsive table-bordered bgwhite">
<tr>
 <th align="center"><font>Employee ID</th>
 <th align="center"><font>Name</th>
 <th align="center"><font>Department</th>
 <th align="center"><font>Function</th>
</tr>
';
	foreach ($results as $g) {

      	$output .= '
      <tr>
        <td align="center">'.$g->emp_id.'</td>
        <td align="center">' .$g->name.'</td>
        <td align="center">' .$g->department.'</td>
        <td align="center">
          <a href="functions/edit.php?edit='.$g->id.'"><button class="btn btn-primary"><i class="fa fa-edit"></i> Edit </button></a>
          <a href="functions/delete.php?id='.$g->name.'"><button class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete </button></a>
        </td>
      </tr>
      	';
      	}
      	 $output.=' </table> ';
      	 echo $output;
      }
      else{
      	echo "<h2' align='center'>No Data found</h2>";
      }

?>
