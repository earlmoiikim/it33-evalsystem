<?php
include 'functions/function.php';
 $dbh = connect();

if(isset($_POST['searchteacher'])){
$data = $_POST['searchteacher'];
$output = '';
      $sql = "SELECT * FROM teachers  WHERE emp_id LIKE '%$data%' OR name LIKE '%$data%' ";
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
        <td align="center">'.$g->name.'</td>
        <td align="center">'.$g->department.'</td>
        <td align="center">
        <a href="functions/edit.php?edit='.$g->id.'"><button class="btn btn-primary"><i class="fa fa-edit"></i> Edit </button></a>
        <a href="functions/delete.php?id='.$g->id.'"><button class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete </button></a>
        </td>
      </tr>';
      	}
      	 $output.=' </table> ';
      	 echo $output;
      }
      else{
      	echo "<h1 align='center'>No Data found</h1>";
      }
   }

if(isset($_POST['details'])){
  $html = '';
  $r = scoresbyteacher($_POST['details']);
  if($r->department == 'NURSING'){
    $nursing = '<div class="row">
      <div class="col-md-12">
      <p><strong>A2. RLE CLINICAL INSTRUCTORS (FOR NURSING STUDENTS ONLY)</strong></p>
      <table class="table table-bordered ">
        <tr>
          <th class="text-center">Item/Parameter</th>
          <th class="text-center">Rating</th>
          <th class="text-center">Qualitative Description</th>
        </tr>
        <tr>
          <td>1. shows knowledge and mastery in using the equipments, instruments as well as carrying out of all procedures necessary in the clinical area.</td>
          <td class="text-center">'.($g = rating($r->ci1, $r->students)).'</td>
          <td class="text-center">'.description($g).'</td>
        </tr>
        <tr>
          <td>2. provides fair student assignments in the area.</td>
          <td class="text-center">'.($g = rating($r->ci2, $r->students)).'</td>
          <td class="text-center">'.description($g).'</td>
        </tr>
        <tr>
          <td>3. supervises students in using the equipments and instruments in the area.</td>
          <td class="text-center">'.($g = rating($r->ci3, $r->students)).'</td>
          <td class="text-center">'.description($g).'</td>
        </tr>
        <tr>
          <td>4. make sure that students are ethical, moral, spiritual and are able to respect individual differences in the area.</td>
          <td class="text-center">'.($g = rating($r->ci4, $r->students)).'</td>
          <td class="text-center">'.description($g).'</td>
        </tr>
        <tr>
          <td>5. gives students not less that three quizzes.</td>
          <td class="text-center">'.($g = rating($r->ci5, $r->students)).'</td>
          <td class="text-center">'.description($g).'</td>
        </tr>
        <tr>
          <td>6. conducts class in english.</td>
          <td class="text-center">'.($g = rating($r->ci6, $r->students)).'</td>
          <td class="text-center">'.description($g).'</td>
        </tr>
        <tr>
          <td>7. provides post RLE conferences.</td>
          <td class="text-center">'.($g = rating($r->ci7, $r->students)).'</td>
          <td class="text-center">'.description($g).'</td>
        </tr>

        <tr>
          <th class="text-center"> Total Rating </th>
          <th class="text-center">'.($g = sectionrating($r->ci, $r->students, 7)).'</th>
          <th class="text-center">'.description($g).'</th>
        </tr>
      </table>
    </div>
    </div>
    <!--end of row  -->
';
  }
  else{
    $nursing = '';
  }

  $html .= '<label for="">Instructor : </label> <p style="display: inline">'.$r->teach.'</p>
  <div class="pull-right">
    <label for="">Department : </label> <p style="display: inline">'.$r->department.'</p>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="margin">
        <table border="1">
          <tr>
            <th class="pad">Over-All Result</th>
            <th class="pad">'.$r->grade.'</th>
            <th class="pad">'.$r->description.'</th>
          </tr>
        </table>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <p><strong>A1. TEACHING SKILLS</strong></p>
      <table class="table table-bordered ">
        <tr>
          <th class="text-center">Item/Parameter</th>
          <th class="text-center">Rating</th>
          <th class="text-center">Qualitative Description</th>
        </tr>
        <tr>
          <td>1. discusses the course outline, objectives, and expectations.</td>
          <td class="text-center">'.($g = rating($r->ts1, $r->students)).'</td>
          <td class="text-center">'.description($g).'</td>
        </tr>
        <tr>
          <td>2. presents and explains the goals of each lesson.</td>
          <td class="text-center">'.($g = rating($r->ts2, $r->students)).'</td>
          <td class="text-center">'.description($g).'</td>
        </tr>
        <tr>
          <td>3. presents the grading system in the first meeting.</td>
          <td class="text-center">'.($g = rating($r->ts3, $r->students)).'</td>
          <td class="text-center">'.description($g).'</td>
        </tr>
        <tr>
          <td>4. is knowledgeable about the subject matter.</td>
          <td class="text-center">'.($g = rating($r->ts4, $r->students)).'</td>
          <td class="text-center">'.description($g).'</td>
        </tr>
        <tr>
          <td>5. uses different teaching styles to make the subject more understandable.</td>
          <td class="text-center">'.($g = rating($r->ts5, $r->students)).'</td>
          <td class="text-center">'.description($g).'</td>
        </tr>
        <tr>
          <td>6. encourages and/or requires reading of additional publications & books.</td>
          <td class="text-center">'.($g = rating($r->ts6, $r->students)).'</td>
          <td class="text-center">'.description($g).'</td>
        </tr>
        <tr>
          <td>7. uses language and words that can be easily understood.</td>
          <td class="text-center">'.($g = rating($r->ts7, $r->students)).'</td>
          <td class="text-center">'.description($g).'</td>
        </tr>
        <tr>
          <td>8. makes sure that all interaction in class is related to the topic.</td>
          <td class="text-center">'.($g = rating($r->ts8, $r->students)).'</td>
          <td class="text-center">'.description($g).'</td>
        </tr>
        <tr>
          <td>9. gives example that can be useful in the real world.</td>
          <td class="text-center">'.($g = rating($r->ts9, $r->students)).'</td>
          <td class="text-center">'.description($g).'</td>
        </tr>
        <tr>
          <th class="text-center"> Total Rating </th>
          <th class="text-center">'.($g = sectionrating($r->ts, $r->students, 9)).'</th>
          <th class="text-center">'.description($g).'</th>
        </tr>
      </table>
    </div>
  </div>
  <!--end of row  -->';

$html .= $nursing;

$html .= '<div class="row">
  <div class="col-md-12">
    <p><strong>B. EVALUATING STUDENTS</strong></p>
    <table class="table table-bordered ">
      <tr>
        <th class="text-center">Item/Parameter</th>
        <th class="text-center">Rating</th>
        <th class="text-center">Qualitative Description</th>
      </tr>
      <tr>
        <td>1.  gives quizzes and exams that are within the lessons taken.</td>
        <td class="text-center">'.($g = rating($r->es1, $r->students)).'</td>
        <td class="text-center">'.description($g).'</td>
      </tr>
      <tr>
        <td>2. is fair in rating the students, giving reward and sanctions.</td>
        <td class="text-center">'.($g = rating($r->es2, $r->students)).'</td>
        <td class="text-center">'.description($g).'</td>
      </tr>
      <tr>
        <td>3. checks and returns the quizzes, test papers and requirements on time.</td>
        <td class="text-center">'.($g = rating($r->es3, $r->students)).'</td>
        <td class="text-center">'.description($g).'</td>
      </tr>
      <tr>
        <td>4. completes and discusses evaluation of students performance.</td>
        <td class="text-center">'.($g = rating($r->es4, $r->students)).'</td>
        <td class="text-center">'.description($g).'</td>
      </tr>
      <tr>
        <td>5. opens more chances for further enhancement through oral recitations. projects, specials reports and assignments.</td>
        <td class="text-center">'.($g = rating($r->es5, $r->students)).'</td>
        <td class="text-center">'.description($g).'</td>
      </tr>

      <tr>
        <th class="text-center"> Total Rating </th>
        <th class="text-center">'.($g = sectionrating($r->es, $r->students, 5)).'</th>
        <th class="text-center">'.description($g).'</th>
      </tr>

    </table>
  </div>
</div>
<!--end of row  -->

<div class="row">
  <div class="col-md-12">
    <p><strong>C. MANAGEMENT SKILLS</strong></p>
    <table class="table table-bordered ">
      <tr>
        <th class="text-center">Item/Parameter</th>
        <th class="text-center">Rating</th>
        <th class="text-center">Qualitative Description</th>
      </tr>
      <tr>
        <td>1. handles the classroom activities readily and competently.</td>
        <td class="text-center">'.($g = rating($r->ms1, $r->students)).'</td>
        <td class="text-center">'.description($g).'</td>
      </tr>
      <tr>
        <td>2. keeps classroom clean and in order.</td>
        <td class="text-center">'.($g = rating($r->ms2, $r->students)).'</td>
        <td class="text-center">'.description($g).'</td>
      </tr>
      <tr>
        <td>3. starts and ends the class on time.</td>
        <td class="text-center">'.($g = rating($r->ms3, $r->students)).'</td>
        <td class="text-center">'.description($g).'</td>
      </tr>
      <tr>
        <td>4. starts and ends the class with a prayer.</td>
        <td class="text-center">'.($g = rating($r->ms4, $r->students)).'</td>
        <td class="text-center">'.description($g).'</td>
      </tr>
      <tr>
        <td>5. implements policies on wearing of proper uniform, shoes, ID.</td>
        <td class="text-center">'.($g = rating($r->ms5, $r->students)).'</td>
        <td class="text-center">'.description($g).'</td>
      </tr>

      <tr>
        <td>6. enforces policies on attendance, excuse and admission slips.</td>
        <td class="text-center">'.($g = rating($r->ms6, $r->students)).'</td>
        <td class="text-center">'.description($g).'</td>
      </tr>

      <td>7. maintains good behavior/conduct of students in the classroom.</td>
      <td class="text-center">'.($g = rating($r->ms7, $r->students)).'</td>
      <td class="text-center">'.description($g).'</td>
    </tr>

    <tr>
      <td>8. reports to class regularly.</td>
      <td class="text-center">'.($g = rating($r->ms8, $r->students)).'</td>
      <td class="text-center">'.description($g).'</td>
    </tr>

      <tr>
        <th class="text-center"> Total Rating </th>
        <th class="text-center">'.($g = sectionrating($r->ms, $r->students, 8)).'</th>
        <th class="text-center">'.description($g).'</th>
      </tr>

    </table>
  </div>
</div>
<!--end of row  -->

<div class="row">
  <div class="col-md-12">
    <p><strong>D. INTERPERSONAL RELATIONSHIP & COMMUNICATION SKILLS</strong></p>
    <table class="table table-bordered ">
      <tr>
        <th class="text-center">Item/Parameter</th>
        <th class="text-center">Rating</th>
        <th class="text-center">Qualitative Description</th>
      </tr>
      <tr>
        <td>1. builds professional relationship with us.</td>
        <td class="text-center">'.($g = rating($r->ir1, $r->students)).'</td>
        <td class="text-center">'.description($g).'</td>
      </tr>
      <tr>
        <td>2. gives constructive correction without embarrassing us.</td>
        <td class="text-center">'.($g = rating($r->ir2, $r->students)).'</td>
        <td class="text-center">'.description($g).'</td>
      </tr>
      <tr>
        <td>3. is sensitive to the students needs (ventilation, lighting, academics, counseling, etc.)</td>
        <td class="text-center">'.($g = rating($r->ir3, $r->students)).'</td>
        <td class="text-center">'.description($g).'</td>
      </tr>
      <tr>
        <td>4. speaks understandably loudly and clearly.</td>
        <td class="text-center">'.($g = rating($r->ir4, $r->students)).'</td>
        <td class="text-center">'.description($g).'</td>
      </tr>

      <tr>
        <th class="text-center"> Total Rating </th>
        <th class="text-center">'.($g = sectionrating($r->ir, $r->students, 4)).'</th>
        <th class="text-center">'.description($g).'</th>
      </tr>

    </table>
  </div>
</div>
<!--end of row  -->

<div class="row">
  <div class="col-md-12">
    <p><strong>E. PERSONAL QUALITIES</strong></p>
    <table class="table table-bordered ">
      <tr>
        <th class="text-center">Item/Parameter</th>
        <th class="text-center">Rating</th>
        <th class="text-center">Qualitative Description</th>
      </tr>
      <tr>
        <td>1. acts decently and is well groomed, tidy.</td>
        <td class="text-center">'.($g = rating($r->ir1, $r->students)).'</td>
        <td class="text-center">'.description($g).'</td>
      </tr>
      <tr>
        <td>2. is open minded, artistic and resourceful.</td>
        <td class="text-center">'.($g = rating($r->ir2, $r->students)).'</td>
        <td class="text-center">'.description($g).'</td>
      </tr>
      <tr>
        <td>3. maintains good relationship with the students and creates an atmosphere of common respect to students.</td>
        <td class="text-center">'.($g = rating($r->ir3, $r->students)).'</td>
        <td class="text-center">'.description($g).'</td>
      </tr>
      <tr>
        <td>4. speaks understandably loudly and clearly.</td>
        <td class="text-center">'.($g = rating($r->ir4, $r->students)).'</td>
        <td class="text-center">'.description($g).'</td>
      </tr>

      <tr>
        <th class="text-center"> Total Rating </th>
        <th class="text-center">'.($g = sectionrating($r->ir, $r->students, 4)).'</th>
        <th class="text-center">'.description($g).'</th>
      </tr>

    </table>
  </div>
</div>';

echo $html;
}

if(isset($_POST['comments'])){
  $r = getcomments($_POST['comments']);
  $data = '';
  $data .= '<div class="text-center"><h4>'.$_POST['comments'].'</h4></div>';
  $data .= '<table class="table table-responsive table-striped table-bordered">
    <tr>
      <th>Strength</th>
      <th>Weakness</th>
      <th>Delete</th>
    </tr>';
  foreach($r as $g){
    if($g->str == '' && $g->weak == ''){
      $data .= '';
    }
    else{
      $data .= '  <tr>
          <td>'.$g->str.'</td>
          <td>'.$g->weak.'</td>
          <td class="text-center"><a class="deletecomment btn btn-danger" data-id="'.$g->id.'">
          <i class="fa fa-trash"></i></a></td>
        </tr>';
    }
  }
  $data .= '</table>';
  echo $data;
}

if(isset($_POST['commentid'])){
  $g = getcommentbyid($_POST['commentid']);
  $teacher = $g->prof;
  deletecomment($_POST['commentid']);
  $r = getcomments($teacher);
  $data = '';
  $data .= '<div class="text-center"><h4>'.$teacher.'</h4></div>';
  $data .= '<table class="table table-responsive table-striped table-bordered">
    <tr>
      <th>Strength</th>
      <th>Weakness</th>
      <th>Delete</th>
    </tr>';
  foreach($r as $g){
    if($g->str == '' && $g->weak == ''){
      $data .= '';
    }
    else{
      $data .= '  <tr>
          <td>'.$g->str.'</td>
          <td>'.$g->weak.'</td>
          <td class="text-center"><a class="deletecomment btn btn-danger" data-id="'.$g->id.'">
          <i class="fa fa-trash"></i></a></td>
        </tr>';
    }
  }
  $data .= '</table>';
  echo $data;
}

?>
