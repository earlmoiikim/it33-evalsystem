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
     $output.='      	<table cellspacing="2" cellpadding="3" align="center" width="1200px" border="3">
 <tr>
    <td align="center"><font>Employee ID</td>
    <td align="center"><font>Name</td>
    <td align="center"><font>Department</td>
    <td align="center"><font>Function</td>

  </tr>
';
	foreach ($results as $g) {
 
      	$output .= '

   
      <tr>
        <td align="center">'.$g->emp_id.'</td>
        <td align="center">' .$g->name.'</td>
        <td align="center">' .$g->department.'</td>
        <td align="center">
          <a href="functions/edit.php?edit='.$g->id.'"><button class="mybutton"> Edit </button></a>
          <a href="functions/delete.php?id='.$g->id.'"><button class="mybutton1">Delete </button></a>
        
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