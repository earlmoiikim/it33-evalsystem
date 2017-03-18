<?php
include 'functions/function.php';
$db = connect();

if(isset($_POST['submit'])){
  //ready the teacher
  echo $teach = $_POST['teach'];
  //before anything else check if the teacher is already evaluated
  $sql1 = "SELECT * FROM overall WHERE teacher = '$teach'";
  $sth1 = $db->prepare($sql1);

  $sth = getteacha($teach);
  echo $sth->department;
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
  //initialize variables
  $ts = 0; $ci = 0; $es = 0; $ms = 0; $ir = 0; $pq = 0;
  $ts_arr = []; $ci_arr = []; $es_arr = []; $ms_arr = []; $ir_arr = []; $pq_arr = [];
  $index = 0;


  //add up all current score from evaluation sheet
  foreach ($_POST['ts'] as $s) {
    $ts = $ts + $s;
    $ts_arr[$index] = $s;
    $index = $index + 1;
  }
  $index = 0;
  if(isset($_POST['ci'])){
    if($sth->department == 'NURSING'){ //if the teacher is not nursing discard ci
      foreach ($_POST['ci'] as $s) {
        $ci = $ci + $s;
        $ci_arr[$index] = $s;
        $index = $index + 1;
      }
    }
    else{
      for($i = 0; $i < 7; $i++){
        $ci_arr[$i] = 0;
    }
    }
  }
  else{
    for($i = 0; $i < 7; $i++){
      $ci_arr[$i] = 0;
    }
  }
  $index = 0;
  foreach($_POST['es'] as $s){
    $es = $es + $s;
    $es_arr[$index] = $s;
    $index = $index + 1;
  }
  $index = 0;
  foreach($_POST['ms'] as $s){
    $ms = $ms + $s;
    $ms_arr[$index] = $s;
    $index = $index + 1;
  }
  $index = 0;
  foreach($_POST['ir'] as $s){
    $ir = $ir + $s;
    $ir_arr[$index] = $s;
    $index = $index + 1;
  }
  $index = 0;
  foreach($_POST['pq'] as $s){
    $pq = $pq + $s;
    $pq_arr[$index] = $s;
    $index = $index + 1;
  }

  //current score
  $c_score = $ts + $ci + $es + $ms + $ir + $pq;
  echo "ts = ".$ts.'<br>';
  echo "ci = ".$ci.'<br>';
  echo "es = ".$es.'<br>';
  echo "ms = ".$ms.'<br>';
  echo "ir = ".$ir.'<br>';
  echo "pq = ".$pq.'<br>';
  //ready the code
  $code = $_POST['code'];
  //ready comments
  $str = $_POST['str'];
  $weak = $_POST['weak'];

  //then check if the teacher is already evaluated by the specific student
  $sql2 = "SELECT * FROM votes WHERE code = '$code' AND teacher_name = '$teach'";
  $sth2 = $db->prepare($sql2);
  if($sth2->execute()){
    if($sth2->rowcount() > 0){
      //if found redirect
    	header('Location: tt.php?error=1');
    	$error = "You have already evaluated this teacher!";
    }
    else{
      //if not then continue

      //if teacher already exist in subject table
		  if($found){
		    //get the current evaluation count
		    $score = $result->score; //evaluation score
		    $count = $result->students; //student count
        //get all score count for every parameter
        $r = getscores($teach);
        $ts_arr[0] = $ts_arr[0] + $r->ts1; $ci_arr[0] = $ci_arr[0] + $r->ci1; $es_arr[0] = $es_arr[0] + $r->es1;
        $ts_arr[1] = $ts_arr[1] + $r->ts2; $ci_arr[1] = $ci_arr[1] + $r->ci2; $es_arr[1] = $es_arr[1] + $r->es2;
        $ts_arr[2] = $ts_arr[2] + $r->ts3; $ci_arr[2] = $ci_arr[2] + $r->ci3; $es_arr[2] = $es_arr[2] + $r->es3;
        $ts_arr[3] = $ts_arr[3] + $r->ts4; $ci_arr[3] = $ci_arr[3] + $r->ci4; $es_arr[3] = $es_arr[3] + $r->es4;
        $ts_arr[4] = $ts_arr[4] + $r->ts5; $ci_arr[4] = $ci_arr[4] + $r->ci5; $es_arr[4] = $es_arr[4] + $r->es5;
        $ts_arr[5] = $ts_arr[5] + $r->ts6; $ci_arr[5] = $ci_arr[5] + $r->ci6;
        $ts_arr[6] = $ts_arr[6] + $r->ts7; $ci_arr[6] = $ci_arr[6] + $r->ci7;
        $ts_arr[7] = $ts_arr[7] + $r->ts8;
        $ts_arr[8] = $ts_arr[8] + $r->ts9;

        $ms_arr[0] = $ms_arr[0] + $r->ms1; $ir_arr[0] = $ir_arr[0] + $r->ir1; $pq_arr[0] = $pq_arr[0] + $r->pq1;
        $ms_arr[1] = $ms_arr[1] + $r->ms2; $ir_arr[1] = $ir_arr[1] + $r->ir2; $pq_arr[1] = $pq_arr[1] + $r->pq2;
        $ms_arr[2] = $ms_arr[2] + $r->ms3; $ir_arr[2] = $ir_arr[2] + $r->ir3; $pq_arr[2] = $pq_arr[2] + $r->pq3;
        $ms_arr[3] = $ms_arr[3] + $r->ms4; $ir_arr[3] = $ir_arr[3] + $r->ir4;
        $ms_arr[4] = $ms_arr[4] + $r->ms5;
        $ms_arr[5] = $ms_arr[5] + $r->ms6;
        $ms_arr[6] = $ms_arr[6] + $r->ms7;
        $ms_arr[7] = $ms_arr[7] + $r->ms8;

          $ts = $ts + $r->ts;
          $ci = $ci + $r->ci;
          $es = $es + $r->es;
          $ms = $ms + $r->ms;
          $ir = $ir + $r->ir;
          $pq = $pq + $r->pq;

		  }else{
		    //if the teacher did not exist
		    //all evaluation count is 0
		    $score = 0; //evaluation score
		    $count = 0; //student count
		  }

		  //add together
      echo "ts = ".$ts.'<br>';
      echo "ci = ".$ci.'<br>';
      echo "es = ".$es.'<br>';
      echo "ms = ".$ms.'<br>';
      echo "ir = ".$ir.'<br>';
      echo "pq = ".$pq.'<br>';
      echo "Current score = ".$c_score.'<br>';
      echo "Score in db = ".$score.'<br>';
		  echo $score = $score + $c_score;
      echo '<br>';
		  $count = $count + 1; //just increment the student count

      if($ci == 0){ //if ci has no vote meaning, this student is not nursing
        $div = 29;
      }
      else{
        $div = 36;
      }
		  //get overall grade divide by number of parameters then divide by student count
		  $grade = ($score / $div) / $count;

      $description = description($grade);

		  echo $grade = number_format($grade, 1, '.', ',');
      echo '<br>';
		  if($found){ //if the teacher already exist
		    //use update query
		    $query2 = $db->prepare("UPDATE overall SET score = '$score',
		    	students = '$count', grade = '$grade', description = '$description' WHERE teacher = '$teach'");

          $stmt = $db->prepare("UPDATE scores SET
            ts1 = '$ts_arr[0]', ts2 = '$ts_arr[1]', ts3 = '$ts_arr[2]', ts4 = '$ts_arr[3]', ts5 = '$ts_arr[4]',
            ts6 = '$ts_arr[5]', ts7 = '$ts_arr[6]', ts8 = '$ts_arr[7]', ts9 = '$ts_arr[8]', ts = '$ts',
            ci1 = '$ci_arr[0]', ci2 = '$ci_arr[1]', ci3 = '$ci_arr[2]', ci4 = '$ci_arr[3]',
            ci5 = '$ci_arr[4]', ci6 = '$ci_arr[5]', ci7 = '$ci_arr[6]', ci = $ci,
            es1 = '$es_arr[0]', es2 = '$es_arr[1]', es3 = '$es_arr[2]',
            es4 = '$es_arr[3]', es5 = '$es_arr[4]', es = '$es',
            ms1 = '$ms_arr[0]', ms2 = '$ms_arr[1]', ms3 = '$ms_arr[2]', ms4 = '$ms_arr[3]', ms5 = '$ms_arr[4]',
            ms6 = '$ms_arr[5]', ms7 = '$ms_arr[6]', ms8 = '$ms_arr[7]', ms = '$ms',
            ir1 = '$ir_arr[0]', ir2 = '$ir_arr[1]', ir3 = '$ir_arr[2]', ir4 = '$ir_arr[3]', ir = '$ir',
            pq1 = '$pq_arr[0]', pq2 = '$pq_arr[1]', pq3 = '$pq_arr[2]', pq = '$pq' WHERE teach = '$teach' ");
      }
		  else{
		    //if the teacher did not exist yet
		    //use insert into query
        $stmt = $db->prepare("INSERT INTO scores SET teach = '$teach',
          ts1 = '$ts_arr[0]', ts2 = '$ts_arr[1]', ts3 = '$ts_arr[2]', ts4 = '$ts_arr[3]', ts5 = '$ts_arr[4]',
          ts6 = '$ts_arr[5]', ts7 = '$ts_arr[6]', ts8 = '$ts_arr[7]', ts9 = '$ts_arr[8]', ts = '$ts',
          ci1 = '$ci_arr[0]', ci2 = '$ci_arr[1]', ci3 = '$ci_arr[2]', ci4 = '$ci_arr[3]',
          ci5 = '$ci_arr[4]', ci6 = '$ci_arr[5]', ci7 = '$ci_arr[6]', ci = $ci,
          es1 = '$es_arr[0]', es2 = '$es_arr[1]', es3 = '$es_arr[2]',
          es4 = '$es_arr[3]', es5 = '$es_arr[4]', es = '$es',
          ms1 = '$ms_arr[0]', ms2 = '$ms_arr[1]', ms3 = '$ms_arr[2]', ms4 = '$ms_arr[3]', ms5 = '$ms_arr[4]',
          ms6 = '$ms_arr[5]', ms7 = '$ms_arr[6]', ms8 = '$ms_arr[7]', ms = '$ms',
          ir1 = '$ir_arr[0]', ir2 = '$ir_arr[1]', ir3 = '$ir_arr[2]', ir4 = '$ir_arr[3]', ir = '$ir',
          pq1 = '$pq_arr[0]', pq2 = '$pq_arr[1]', pq3 = '$pq_arr[2]', pq = '$pq' ");

		    $query2 = $db->prepare("INSERT INTO overall SET teacher = '$teach',
		    	score = '$score', students = '$count', grade = '$grade', description = '$description'");

		  }

		 	//then insert into votes table the record of this particular student evaluating this particular teacher and the comments
		    $query1 = $db->prepare("INSERT INTO votes SET code = '$code', teacher_name = '$teach'");
		    $query3 = $db->prepare("INSERT INTO comments SET code = '$code', prof = '$teach', str = '$str', weak = '$weak' ");

		    if($stmt->execute() && $query2->execute() && $query1->execute() && $query3->execute()){
		        header('Location: http://localhost/IT33/tt.php?success');
		        echo "success";
		    }
		    else{
		    	echo "error";
		        header('Location: http://localhost/IT33/tt.php?error=2');
		    }
    	}
  	}


}

 ?>
