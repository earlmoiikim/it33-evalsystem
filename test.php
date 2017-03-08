<?php
include 'functions/function.php';

$teacher = "SHERYL RODRIGUEZ";
$r = scoresbyteacher($teacher);

 ?>

<html>
<head>
<title> VIEW </title>
<!-- Bootstrap Core CSS -->
<link href="style/bootstrap.min.css" rel="stylesheet">
<!-- Icons -->
<link rel="stylesheet" href="style/css/font-awesome.min.css" type="text/css">
<!-- custom css -->
<link href="style/master.css" rel="stylesheet">
</head>
<body style="background:linear-gradient(to bottom right,white,lightblue,white); height:100%">

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
    <h2>Modal Example</h2>
    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>
    <?php echo $r->teach; ?>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog modal-lg">
        <?php $teacher = "SHERYL RODRIGUEZ";
        $r = scoresbyteacher($teacher); ?>
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header text-center">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Evaluation Details</h4>
          </div>
          <div class="modal-body">
            <label for="">Instructor : </label> <p style="display: inline"> <?php echo $r->teach; ?></p>
            <div class="pull-right">
              <label for="">Department : </label> <p style="display: inline"> <?php echo $r->department; ?></p>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="margin">
                  <table border="1">
                    <tr>
                      <th class="pad">Over-All Result</th>
                      <th class="pad"> <?php echo $r->grade; ?></th>
                      <th class="pad"> <?php echo $r->description; ?></th>
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
                    <td class="text-center"><?php echo $g = rating($r->ts1, $r->students); ?></td>
                    <td class="text-center"><?php echo description($g); ?></td>
                  </tr>
                  <tr>
                    <td>2. presents and explains the goals of each lesson.</td>
                    <td class="text-center"><?php echo $g = rating($r->ts2, $r->students); ?></td>
                    <td class="text-center"><?php echo description($g); ?></td>
                  </tr>
                  <tr>
                    <td>3. presents the grading system in the first meeting.</td>
                    <td class="text-center"><?php echo $g = rating($r->ts3, $r->students); ?></td>
                    <td class="text-center"><?php echo description($g); ?></td>
                  </tr>
                  <tr>
                    <td>4. is knowledgeable about the subject matter.</td>
                    <td class="text-center"><?php echo $g = rating($r->ts4, $r->students); ?></td>
                    <td class="text-center"><?php echo description($g); ?></td>
                  </tr>
                  <tr>
                    <td>5. uses different teaching styles to make the subject more understandable.</td>
                    <td class="text-center"><?php echo $g = rating($r->ts5, $r->students); ?></td>
                    <td class="text-center"><?php echo description($g); ?></td>
                  </tr>
                  <tr>
                    <td>6. encourages and/or requires reading of additional publications & books.</td>
                    <td class="text-center"><?php echo $g = rating($r->ts6, $r->students); ?></td>
                    <td class="text-center"><?php echo description($g); ?></td>
                  </tr>
                  <tr>
                    <td>7. uses language and words that can be easily understood.</td>
                    <td class="text-center"><?php echo $g = rating($r->ts7, $r->students); ?></td>
                    <td class="text-center"><?php echo description($g); ?></td>
                  </tr>
                  <tr>
                    <td>8. makes sure that all interaction in class is related to the topic.</td>
                    <td class="text-center"><?php echo $g = rating($r->ts8, $r->students); ?></td>
                    <td class="text-center"><?php echo description($g); ?></td>
                  </tr>
                  <tr>
                    <td>9. gives example that can be useful in the real world.</td>
                    <td class="text-center"><?php echo $g = rating($r->ts9, $r->students); ?></td>
                    <td class="text-center"><?php echo description($g); ?></td>
                  </tr>
                  <tr>
                    <th class="text-center"> Total Rating </th>
                    <th class="text-center"><?php echo $g = sectionrating($r->ts, $r->students, 9); ?></th>
                    <th class="text-center"><?php echo description($g); ?></th>
                  </tr>
                </table>
              </div>
            </div>
            <!--end of row  -->

          <div class="row">
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
                <td class="text-center"><?php echo $g = rating($r->ci1, $r->students); ?></td>
                <td class="text-center"><?php echo description($g); ?></td>
              </tr>
              <tr>
                <td>2. provides fair student assignments in the area.</td>
                <td class="text-center"><?php echo $g = rating($r->ci2, $r->students); ?></td>
                <td class="text-center"><?php echo description($g); ?></td>
              </tr>
              <tr>
                <td>3. supervises students in using the equipments and instruments in the area.</td>
                <td class="text-center"><?php echo $g = rating($r->ci3, $r->students); ?></td>
                <td class="text-center"><?php echo description($g); ?></td>
              </tr>
              <tr>
                <td>4. make sure that students are ethical, moral, spiritual and are able to respect individual differences in the area.</td>
                <td class="text-center"><?php echo $g = rating($r->ci4, $r->students); ?></td>
                <td class="text-center"><?php echo description($g); ?></td>
              </tr>
              <tr>
                <td>5. gives students not less that three quizzes.</td>
                <td class="text-center"><?php echo $g = rating($r->ci5, $r->students); ?></td>
                <td class="text-center"><?php echo description($g); ?></td>
              </tr>
              <tr>
                <td>6. conducts class in english.</td>
                <td class="text-center"><?php echo $g = rating($r->ci6, $r->students); ?></td>
                <td class="text-center"><?php echo description($g); ?></td>
              </tr>
              <tr>
                <td>7. provides post RLE conferences.</td>
                <td class="text-center"><?php echo $g = rating($r->ci7, $r->students); ?></td>
                <td class="text-center"><?php echo description($g); ?></td>
              </tr>

              <tr>
                <th class="text-center"> Total Rating </th>
                <th class="text-center"><?php echo $g = sectionrating($r->ci, $r->students, 7); ?></th>
                <th class="text-center"><?php echo description($g); ?></th>
              </tr>
            </table>
          </div>
        </div>
        <!--end of row  -->

          <div class="row">
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
                  <td class="text-center"><?php echo $g = rating($r->es1, $r->students); ?></td>
                  <td class="text-center"><?php echo description($g); ?></td>
                </tr>
                <tr>
                  <td>2. is fair in rating the students, giving reward and sanctions.</td>
                  <td class="text-center"><?php echo $g = rating($r->es2, $r->students); ?></td>
                  <td class="text-center"><?php echo description($g); ?></td>
                </tr>
                <tr>
                  <td>3. checks and returns the quizzes, test papers and requirements on time.</td>
                  <td class="text-center"><?php echo $g = rating($r->es3, $r->students); ?></td>
                  <td class="text-center"><?php echo description($g); ?></td>
                </tr>
                <tr>
                  <td>4. completes and discusses evaluation of student's performance.</td>
                  <td class="text-center"><?php echo $g = rating($r->es4, $r->students); ?></td>
                  <td class="text-center"><?php echo description($g); ?></td>
                </tr>
                <tr>
                  <td>5. opens more chances for further enhancement through oral recitations. projects, specials reports and assignments.</td>
                  <td class="text-center"><?php echo $g = rating($r->es5, $r->students); ?></td>
                  <td class="text-center"><?php echo description($g); ?></td>
                </tr>

                <tr>
                  <th class="text-center"> Total Rating </th>
                  <th class="text-center"><?php echo $g = sectionrating($r->es, $r->students, 5); ?></th>
                  <th class="text-center"><?php echo description($g); ?></th>
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
                  <td class="text-center"><?php echo $g = rating($r->ms1, $r->students); ?></td>
                  <td class="text-center"><?php echo description($g); ?></td>
                </tr>
                <tr>
                  <td>2. keeps classroom clean and in order.</td>
                  <td class="text-center"><?php echo $g = rating($r->ms2, $r->students); ?></td>
                  <td class="text-center"><?php echo description($g); ?></td>
                </tr>
                <tr>
                  <td>3. starts and ends the class on time.</td>
                  <td class="text-center"><?php echo $g = rating($r->ms3, $r->students); ?></td>
                  <td class="text-center"><?php echo description($g); ?></td>
                </tr>
                <tr>
                  <td>4. starts and ends the class with a prayer.</td>
                  <td class="text-center"><?php echo $g = rating($r->ms4, $r->students); ?></td>
                  <td class="text-center"><?php echo description($g); ?></td>
                </tr>
                <tr>
                  <td>5. implements policies on wearing of proper uniform, shoes, ID.</td>
                  <td class="text-center"><?php echo $g = rating($r->ms5, $r->students); ?></td>
                  <td class="text-center"><?php echo description($g); ?></td>
                </tr>

                <tr>
                  <td>6. enforces policies on attendance, excuse and admission slips.</td>
                  <td class="text-center"><?php echo $g = rating($r->ms6, $r->students); ?></td>
                  <td class="text-center"><?php echo description($g); ?></td>
                </tr>

                <td>7. maintains good behavior/conduct of students in the classroom.</td>
                <td class="text-center"><?php echo $g = rating($r->ms7, $r->students); ?></td>
                <td class="text-center"><?php echo description($g); ?></td>
              </tr>

              <tr>
                <td>8. reports to class regularly.</td>
                <td class="text-center"><?php echo $g = rating($r->ms8, $r->students); ?></td>
                <td class="text-center"><?php echo description($g); ?></td>
              </tr>

                <tr>
                  <th class="text-center"> Total Rating </th>
                  <th class="text-center"><?php echo $g = sectionrating($r->ms, $r->students, 8); ?></th>
                  <th class="text-center"><?php echo description($g); ?></th>
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
                  <td class="text-center"><?php echo $g = rating($r->ir1, $r->students); ?></td>
                  <td class="text-center"><?php echo description($g); ?></td>
                </tr>
                <tr>
                  <td>2. gives constructive correction without embarrassing us.</td>
                  <td class="text-center"><?php echo $g = rating($r->ir2, $r->students); ?></td>
                  <td class="text-center"><?php echo description($g); ?></td>
                </tr>
                <tr>
                  <td>3. is sensitive to the students' needs (ventilation, lighting, academics, counseling, etc.)</td>
                  <td class="text-center"><?php echo $g = rating($r->ir3, $r->students); ?></td>
                  <td class="text-center"><?php echo description($g); ?></td>
                </tr>
                <tr>
                  <td>4. speaks understandably loudly and clearly.</td>
                  <td class="text-center"><?php echo $g = rating($r->ir4, $r->students); ?></td>
                  <td class="text-center"><?php echo description($g); ?></td>
                </tr>

                <tr>
                  <th class="text-center"> Total Rating </th>
                  <th class="text-center"><?php echo $g = sectionrating($r->ir, $r->students, 4); ?></th>
                  <th class="text-center"><?php echo description($g); ?></th>
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
                  <td class="text-center"><?php echo $g = rating($r->ir1, $r->students); ?></td>
                  <td class="text-center"><?php echo description($g); ?></td>
                </tr>
                <tr>
                  <td>2. is open minded, artistic and resourceful.</td>
                  <td class="text-center"><?php echo $g = rating($r->ir2, $r->students); ?></td>
                  <td class="text-center"><?php echo description($g); ?></td>
                </tr>
                <tr>
                  <td>3. maintains good relationship with the students and creates an atmosphere of common respect to students.</td>
                  <td class="text-center"><?php echo $g = rating($r->ir3, $r->students); ?></td>
                  <td class="text-center"><?php echo description($g); ?></td>
                </tr>
                <tr>
                  <td>4. speaks understandably loudly and clearly.</td>
                  <td class="text-center"><?php echo $g = rating($r->ir4, $r->students); ?></td>
                  <td class="text-center"><?php echo description($g); ?></td>
                </tr>

                <tr>
                  <th class="text-center"> Total Rating </th>
                  <th class="text-center"><?php echo $g = sectionrating($r->ir, $r->students, 3); ?></th>
                  <th class="text-center"><?php echo description($g); ?></th>
                </tr>

              </table>
            </div>
          </div>
          <!--end of row  -->


          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>


</body>
</html>
<!-- Jquery  -->
<script src="js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<style media="screen" type="text/css">
  .text tr th{
    text-align: center;
  }
  .text tr td{
    text-align: center;
  }
</style>
