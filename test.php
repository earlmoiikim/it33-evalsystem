<?php
include 'functions/function.php';

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

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog modal-lg">
        <?php $r = scoresbyteacher("SHERYL RODEIGUEZ"); ?>
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
                <p>A. Teaching skills</p>
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

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>

    <?php
    $teacher = "SHERYL RODEIGUEZ";
    $r = scoresbyteacher($teacher);
      echo $r->department;
    ?>
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
