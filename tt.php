<?php
session_start();
include 'functions/function.php';
include 'ns.php';
$test='hidden';

$sql = "SELECT * FROM teachers";
        $db = connect();
        $sth = $db->prepare($sql);
        $sth->execute();
        $res = $sth->fetchAll(PDO::FETCH_OBJ);

$student = userbycode($_SESSION['code']);
$dept = $student->dept;

if(isset($_GET['success'])){
  $test='<script type="text/javascript">
    alert("Evaluation counted");
  </script>';
}

if(isset($dept) && $dept == "NURSING"){
  $section = nursing();
}
else{
    $section = "";
}
?>
<html>
<head>
	<title>Add New Teacher</title>
  <!-- Bootstrap Core CSS -->
  <link href="style/bootstrap.min.css" rel="stylesheet">
  <!-- Icons -->
  <link rel="stylesheet" href="style/css/font-awesome.min.css" type="text/css">
  <!-- custom css -->
  <link href="style/master.css" rel="stylesheet">

<script src="js/jquery.js"></script>
</head>

<body style="background:linear-gradient(to bottom right,white,lightblue,white);">

  <header>
    <div class="container-fluid bg-primary">
      <div class="row">
        <div class="container" style="padding: 20px 0px;">

          <div class="col-md-3">
            <div class="box">
                <img class="img-responsive" src="./images/logo.png">
            </div>
          </div>

          <div class="col-md-6 text-center">
              <h1 class="font"> Faculty Evaluation System </h1>
              <h1 class="font2"> - Office of Guidance - </h1>
          </div>

          <div class="col-md-3"></div>
        </div>
      </div>
    </div>
  </header>

<div class="container">
  <div class="row bgwhite padside">
    <!-- go to evalprocess.php for submission evaluation -->
    <form id="insert_form" action="evalprocess.php" method="POST"
    class="text-center form-group" style="margin-top: 20px;">

    <div class="pull-left" style="display: inline;">
      <a href="studenthere1.php" class="btn btn-danger"><i class="fa fa-arrow-left"></i> Back</a>
    </div>
      <h3 class="font3" style="display: inline;">Select Your Teacher's Name:</h3>
    <select required name="teach" style="height: 30px; width: 250px; border-radius: 5px; margin-bottom: 30px; display: inline;">
      <option disabled selected hidden value>- Teacher -</option>
    <?php foreach ($res as $g):?>
      <option value="<?php echo $g->name;?>"> <?php echo $g->name;?> </option>
    <?php endforeach; ?>
    </select>
    <!--
    <input type="text"  name="teach" value="<?php //echo $g->id; ?>"> -->
    <table class="table table-responsive table-striped tables">
      <tr>
        <td style="text-align: center;"> <font class="font1"> <b>  A1. TEACHING SKILLS  </b> </font></td><td style="text-align: center;"></td>
      </tr>
      <tr>
        <td style="text-align: center;"> <font size="4px"> <b>   The instructor: </font> </b>  </td><td style="text-align: center;"></td>
      </tr>
      <tr>
        <td width="500px"><b> 1. discusses the course outline, objectives, and expectations. </b></td>
        <td width="150px"><select required class="form-control" name="ts[0]">
       <option disabled selected hidden value>-CHOOSE-</option>
      <option value="4" >Excellent</option>
      <option value="3">Very Good</option>
      <option value="2">Satisfactory</option>
      <option value="1">Unsatisfactory</option>
              </select>
        </td>
      </tr>
      <tr>
        <td width="500px"><b> 2. presents and explains the goals of each lesson. </b></td>
        <td width="150px"><select class="form-control" name="ts[1]" required>
       <option disabled selected hidden value>-CHOOSE-</option>
       <option value="4" >Excellent</option>
        <option value="3">Very Good</option>
        <option value="2">Satisfactory</option>
        <option value="1">Unsatisfactory</option>
              </select>
        </td>
      </tr>

         <tr>
        <td width="500px"><b> 3. presents the grading system in the first meeting. </b></td>
        <td width="150px"><select class="form-control" name="ts[2]" required>
       <option disabled selected hidden value>-CHOOSE-</option>
        <option value="4" >Excellent</option>
        <option value="3">Very Good</option>
        <option value="2">Satisfactory</option>
        <option value="1">Unsatisfactory</option>
              </select>
        </td>
      </tr>
      <tr>
        <td width="500px"><b> 4. is knowledgeable about the subject matter. </b></td>
     <td width="150px"><select class="form-control" name="ts[3]" required>
       <option disabled selected hidden value>-CHOOSE-</option>
        <option value="4" >Excellent</option>
        <option value="3">Very Good</option>
        <option value="2">Satisfactory</option>
        <option value="1">Unsatisfactory</option>
        </select>
        </td>
      </tr>

      <tr>
        <td width="500px"><b> 5. uses different teaching styles to make the subject more understandable. </b></td>
    <td width="150px"><select class="form-control" name="ts[4]" required>
       <option disabled selected hidden value>-CHOOSE-</option>
        <option value="4" >Excellent</option>
        <option value="3">Very Good</option>
        <option value="2">Satisfactory</option>
        <option value="1">Unsatisfactory</option>
              </select>
        </td>
      </tr>
      <tr>
        <td width="500px"><b> 6. encourages and/or requires reading of additional publications & books. </b></td>
        <td width="150px"><select class="form-control" name="ts[5]" required>
       <option disabled selected hidden value>-CHOOSE-</option>
        <option value="4" >Excellent</option>
        <option value="3">Very Good</option>
        <option value="2">Satisfactory</option>
        <option value="1">Unsatisfactory</option>
              </select>
        </td>
      </tr>

      <tr>
        <td width="500px"><b> 7. uses language and words that can be easily understood. </b></td>
        <td width="150px"><select class="form-control" name="ts[6]" required>
       <option disabled selected hidden value>-CHOOSE-</option>
        <option value="4" >Excellent</option>
        <option value="3">Very Good</option>
        <option value="2">Satisfactory</option>
        <option value="1">Unsatisfactory</option>
              </select>
        </td>
      </tr>
      <tr>
        <td width="500px"><b> 8. makes sure that all interaction in class is related to the topic. </b></td>
        <td width="150px"><select class="form-control" name="ts[7]" required>
       <option disabled selected hidden value>-CHOOSE-</option>
        <option value="4" >Excellent</option>
        <option value="3">Very Good</option>
        <option value="2">Satisfactory</option>
        <option value="1">Unsatisfactory</option>
              </select>
        </td>
      </tr>

      <tr>
        <td width="500px"><b> 9. gives example that can be useful in the real world. </b></td>
         <td width="150px"><select class="form-control" name="ts[8]" required>
       <option disabled selected hidden value>-CHOOSE-</option>
        <option value="4" >Excellent</option>
        <option value="3">Very Good</option>
        <option value="2">Satisfactory</option>
        <option value="1">Unsatisfactory</option>
              </select>
        </td>
      </tr>
    </table>
      <?php echo $section; ?>
    <table class="table table-striped">
      <tr>
        <td style="text-align: center;"> <font class="font1"> <b>  B. EVALUATING STUDENTS  </b> </font></td><td style="text-align: center;"></td>
        </tr>
        <tr>
         <td style="text-align: center;"> <font size="4px"> <b>    The instructor: </font> </b>  </td><td style="text-align: center;"></td>
         </tr>
      <tr>
        <td width="500px"><b> 1. gives quizzes and exams that are within the lessons taken. </b></td>
         <td width="150px"><select class="form-control" name="es[0]" required>
        <option disabled selected hidden value>-CHOOSE-</option>
        <option value="4" >Excellent</option>
        <option value="3">Very Good</option>
        <option value="2">Satisfactory</option>
        <option value="1">Unsatisfactory</option>
              </select>
        </td>
      </tr>
      <tr>
        <td width="500px"><b> 2. is fair in rating the students, giving reward and sanctions. </b></td>
         <td width="150px"><select class="form-control" name="es[1]" required>
        <option disabled selected hidden value>-CHOOSE-</option>
        <option value="4" >Excellent</option>
        <option value="3">Very Good</option>
        <option value="2">Satisfactory</option>
        <option value="1">Unsatisfactory</option>
              </select>
        </td>
      </tr>

      <tr>
        <td width="500px"><b> 3. checks and returns the quizzes, test papers and requirements on time. </b></td>
         <td width="150px"><select class="form-control" name="es[2]" required>
        <option disabled selected hidden value>-CHOOSE-</option>
        <option value="4" >Excellent</option>
        <option value="3">Very Good</option>
        <option value="2">Satisfactory</option>
        <option value="1">Unsatisfactory</option>
              </select>
        </td>
      </tr>
      <tr>
        <td width="500px"><b> 4. completes and discusses evaluation of student's performance. </b></td>
         <td width="150px"><select class="form-control" name="es[3]" required>
        <option disabled selected hidden value>-CHOOSE-</option>
        <option value="4" >Excellent</option>
        <option value="3">Very Good</option>
        <option value="2">Satisfactory</option>
        <option value="1">Unsatisfactory</option>
              </select>
        </td>
      </tr>

      <tr>
        <td width="500px"><b> 5. opens more chances for further enhancement through oral recitations. projects, specials reports and assignments. </b></td>
         <td width="150px"><select class="form-control" name="es[4]" required>
        <option disabled selected hidden value>-CHOOSE-</option>
        <option value="4" >Excellent</option>
        <option value="3">Very Good</option>
        <option value="2">Satisfactory</option>
        <option value="1">Unsatisfactory</option>
              </select>
        </td>
      </tr>
    </table>
    <table class="table table-striped">
          <tr>
        <td style="text-align: center;"> <font class="font1"> <b>  C. MANAGEMENT SKILLS  </b> </font></td><td style="text-align: center;"></td>
        </tr>
        <tr>
         <td style="text-align: center;"> <font size="4px"> <b>  The instructor: </font> </b>  </td><td style="text-align: center;"></td>
         </tr>
      <tr>
        <td width="500px"><b> 1. handles the classroom activities readily and competently. </b></td>
         <td width="150px"><select class="form-control" name="ms[0]" required>
        <option disabled selected hidden value>-CHOOSE-</option>
        <option value="4" >Excellent</option>
        <option value="3">Very Good</option>
        <option value="2">Satisfactory</option>
        <option value="1">Unsatisfactory</option>
              </select>
        </td>
      </tr>
      <tr>
        <td width="500px"><b> 2. keeps classroom clean and in order. </b></td>
         <td width="150px"><select class="form-control" name="ms[1]" required>
        <option disabled selected hidden value>-CHOOSE-</option>
        <option value="4" >Excellent</option>
        <option value="3">Very Good</option>
        <option value="2">Satisfactory</option>
        <option value="1">Unsatisfactory</option>
              </select>
        </td>
      </tr>

      <tr>
        <td width="500px"><b> 3. starts and ends the class on time. </b></td>
         <td width="150px"><select class="form-control" name="ms[2]" required>
        <option disabled selected hidden value>-CHOOSE-</option>
        <option value="4" >Excellent</option>
        <option value="3">Very Good</option>
        <option value="2">Satisfactory</option>
        <option value="1">Unsatisfactory</option>
              </select>
        </td>
      </tr>
      <tr>
        <td width="500px"><b> 4. starts and ends the class with a prayer. </b></td>
         <td width="150px"><select class="form-control" name="ms[3]" required>
        <option disabled selected hidden value>-CHOOSE-</option>
        <option value="4" >Excellent</option>
        <option value="3">Very Good</option>
        <option value="2">Satisfactory</option>
        <option value="1">Unsatisfactory</option>
              </select>
        </td>
      </tr>

      <tr>
        <td width="500px"><b> 5. implements policies on wearing of proper uniform, shoes, ID. </b></td>
         <td width="150px"><select class="form-control" name="ms[4]" required>
        <option disabled selected hidden value>-CHOOSE-</option>
        <option value="4" >Excellent</option>
        <option value="3">Very Good</option>
        <option value="2">Satisfactory</option>
        <option value="1">Unsatisfactory</option>
              </select>
        </td>
      </tr>
      <tr>
        <td width="500px"><b> 6. enforces policies on attendance, excuse and admission slips. </b></td>
         <td width="150px"><select class="form-control" name="ms[5]" required>
        <option disabled selected hidden value>-CHOOSE-</option>
        <option value="4" >Excellent</option>
        <option value="3">Very Good</option>
        <option value="2">Satisfactory</option>
        <option value="1">Unsatisfactory</option>
              </select>
        </td>
      </tr>

      <tr>
        <td width="500px"><b> 7. maintains good behavior/conduct of students in the classroom. </b></td>
         <td width="150px"><select class="form-control" name="ms[6]" required>
        <option disabled selected hidden value>-CHOOSE-</option>
        <option value="4" >Excellent</option>
        <option value="3">Very Good</option>
        <option value="2">Satisfactory</option>
        <option value="1">Unsatisfactory</option>
              </select>
        </td>
      </tr>
      <tr>
        <td width="500px"><b> 8. reports to class regularly. </b></td>
         <td width="150px"><select class="form-control" name="ms[7]" required>
        <option disabled selected hidden value>-CHOOSE-</option>
        <option value="4" >Excellent</option>
        <option value="3">Very Good</option>
        <option value="2">Satisfactory</option>
        <option value="1">Unsatisfactory</option>
              </select>
        </td>
      </tr>
    </table>
    <table class="table table-striped">
          <tr>
        <td style="text-align: center;"> <font class="font1"> <b>  D. INTERPERSONAL RELATIONSHIP & COMMUNICATION SKILLS  </b> </font></td><td style="text-align: center;"></td>
        </tr>
        <tr>
         <td style="text-align: center;"> <font size="4px"> <b>  The instructor: </font> </b>  </td><td style="text-align: center;"></td>
         </tr>
      <tr>
        <td width="400px"><b> 1. builds professional relationship with us. </b></td>
         <td width="250px"><select class="form-control" name="ir[0]" required>
        <option disabled selected hidden value>-CHOOSE-</option>
        <option value="4" >Excellent</option>
        <option value="3">Very Good</option>
        <option value="2">Satisfactory</option>
        <option value="1">Unsatisfactory</option>
        </select>
        </td>
      </tr>
      <tr>
        <td width="500px"><b> 2. gives constructive correction without embarrassing us. </b></td>
         <td width="250px"><select class="form-control" name="ir[1]" required>
        <option disabled selected hidden value>-CHOOSE-</option>
        <option value="4" >Excellent</option>
        <option value="3">Very Good</option>
        <option value="2">Satisfactory</option>
        <option value="1">Unsatisfactory</option>
        </select>
        </td>
      </tr>

      <tr>
        <td width="500px"><b> 3. is sensitive to the students' needs (ventilation, lighting, academics, counseling, etc.). </b></td>
         <td width="250px"><select class="form-control" name="ir[2]" required>
        <option disabled selected hidden value>-CHOOSE-</option>
        <option value="4" >Excellent</option>
        <option value="3">Very Good</option>
        <option value="2">Satisfactory</option>
        <option value="1">Unsatisfactory</option>
              </select>
        </td>
      </tr>
      <tr>
        <td width="500px"><b> 4. speaks understandably loudly and clearly. </b></td>
         <td width="250px"><select class="form-control" name="ir[3]" required>
        <option disabled selected hidden value>-CHOOSE-</option>
        <option value="4" >Excellent</option>
        <option value="3">Very Good</option>
        <option value="2">Satisfactory</option>
        <option value="1">Unsatisfactory</option>
              </select>
        </td>
      </tr>
    </table>
    <table class="table table-striped">
          <tr>
        <td width="500px" style="text-align: center;"> <font class="font1"> <b>  E. PERSONAL QUALITIES  </b> </font></td><td style="text-align: center;"></td>
        </tr>
        <tr>
         <td width="500px" style="text-align: center;"> <font size="4px"> <b>   The instructor: </font> </b>  </td><td style="text-align: center;"></td>
         </tr>
      <tr>
        <td width="500px"><b> 1. acts decently and is well groomed, tidy. </b></td>
         <td width="150px"><select class="form-control" name="pq[0]" required>
        <option disabled selected hidden value>-CHOOSE-</option>
        <option value="4" >Excellent</option>
        <option value="3">Very Good</option>
        <option value="2">Satisfactory</option>
        <option value="1">Unsatisfactory</option>
              </select>
        </td>
      </tr>
      <tr>
        <td width="500px"><b> 2. is open minded, artistic and resourceful. </b></td>
         <td width="150px"><select class="form-control" name="pq[1]" required>
        <option disabled selected hidden value>-CHOOSE-</option>
        <option value="4" >Excellent</option>
        <option value="3">Very Good</option>
        <option value="2">Satisfactory</option>
        <option value="1">Unsatisfactory</option>
              </select>
        </td>
      </tr>

      <tr>
        <td width="500px"><b> 3. maintains good relationship with the students and creates an atmosphere of common respect to students. </b></td>
         <td width="150px"><select class="form-control" name="pq[2]" required>
        <option disabled selected hidden value>-CHOOSE-</option>
        <option value="4" >Excellent</option>
        <option value="3">Very Good</option>
        <option value="2">Satisfactory</option>
        <option value="1">Unsatisfactory</option>
              </select>
        </td>
      </tr>
    </table>

    <div class="row">
      <div class="col-md-6">
        <strong>  <font size="4" color="green">  <b> What are the strengths of your teacher?</font> </strong>
        <textarea rows="7" cols="50" name="str" minlength="10" placeholder="Leave your comments here.."></textarea>
      </div>
      <div class="col-md-6">
        <strong>  <font size="4" color="red"> What are the weaknesses of your teacher?</font> </strong>
        <textarea rows="7" cols="50" name="weak" minlength="10" placeholder="Leave your comments here.."></textarea>
      </div>
    </div>

    <!-- get user code ready for submit-->
    <input type="text" hidden value="<?php echo $_SESSION['code'];?>" name="code">

    <div class="row" style="margin-top: 30px; padding-bottom: 30px;">
    <input type="submit" class="btn btn-primary btn-lg" value="Submit Evaluation" name="submit" class="submit">
    </div>
    </form>

  </div>
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
if(isset($_GET['error']) && $_GET['error'] == 2){
  echo '<script type="text/javascript">
          alert("Something went wrong, ask for support");
        </script>';
}
if(isset($_GET['success'])){
  echo '<script type="text/javascript">
          alert("Evaluation Submitted!");
        </script>';
}

 ?>
