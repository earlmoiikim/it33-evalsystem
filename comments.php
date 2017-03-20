<?php
include 'functions/function.php';

$results = getoverall();

if(isset($_POST['searchname'])){
  $results = searchbyname($_POST['searchname']);
}
if(isset($_GET['dept'])){
  if($_GET['dept'] == "ict"){
    $results = searchbydept("ICT");
  }
  if($_GET['dept'] == "eng"){
    $results = searchbydept("ENGINEERING");
  }
  if($_GET['dept'] == "nur"){
    $results = searchbydept("NURSING");
  }
  if($_GET['dept'] == "chm"){
    $results = searchbydept("CHM");
  }
  if($_GET['dept'] == "cri"){
    $results = searchbydept("CRIMINOLOGY");
  }
  if($_GET['dept'] == "ba"){
    echo "in here";
    $results = searchbydept("B.A");
  }
  if($_GET['dept'] == "edu"){
    $results = searchbydept("EDUCATION");
  }  
  if($_GET['dept'] == "shs"){
    $results = searchbydept("SENIORHIGH");
  }
}

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
                <img class="img-responsive" src="./images/logo.png"
                style="margin-left:70px; margin-top:5px">
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

<div class="container bg-white" style="height: 480px;">
  <div class="row">
    <div class="col-md-2">
      <a href="adminrecord.php"><button class="btn btn-danger" type="button" name="button">
        <i class="fa fa-arrow-left"></i> BACK</button>
    </a>
    </div>
    <div class="col-md-7">
      <div class="form-inline pull-left">
        <label for="">Search by dept : </label>
        <a href="comments.php?dept=ict" class="btn btn-default">ICT</a>
        <a href="comments.php?dept=eng" class="btn btn-default">ENG</a>
        <a href="comments.php?dept=nur" class="btn btn-default">NUR</a>
        <a href="comments.php?dept=chm" class="btn btn-default">CHM</a>
        <a href="comments.php?dept=cri" class="btn btn-default">CRI</a>
        <a href="comments.php?dept=ba" class="btn btn-default">BA</a>
        <a href="comments.php?dept=edu" class="btn btn-default">EDU</a>
        <a href="comments.php?dept=shs" class="btn btn-default">SHS</a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-group">
        <form class="input-group" action="#" method="post">
          <input class="form-control" type="text" name="searchname" placeholder="Search by name">
          <span class="input-group-addon"> <i class="fa fa-search"></i>
          </span>
        </form>
      </div>
    </div>
  </div>
  <!-- end of row -->
  <div class="row">
    <div class="col-md-6">
      <div class="row" style="height: 400px; overflow: auto;"id="divToPrint">
        <table class="table table-responsive table-striped table-bordered text" align="center">
          <tr>
            <th>Name of Faculty</th>
            <th>Option</th>
          </tr>
          <?php foreach($results as $g): ?>
            <tr>
              <td><?php echo $g->teacher ?></td>
              <td><button data-id="<?php echo $g->teacher;?>" type="button" class="btn btn-primary details"
               data-toggle="modal">See comments</button>
             </td>
            </tr>
          <?php endforeach; ?>
        </table>
      </div>
    </div>
    <!-- end of col 8 -->
    <div class="col-md-6">
      <div class="row" id="comments" style="height: 400px; overflow: auto;" >

      </div>
    </div>
  </div>
<!-- end of row -->
</div>
<!-- End of container -->
</body>
</html>

<style media="screen" type="text/css">
  .text tr th{
    text-align: center;
  }
  .text tr td{
    text-align: center;
  }
</style>
<!-- Jquery  -->
<script src="js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<script type="text/javascript">
  $(document).on("click", ".details", function(){
      var name = $(this).data('id');
      console.log(name);
      if(name != ''){
        $.ajax({
          url: "process.php",
          method: "post",
          data: {comments:name},
          success: function(data){
            $('#comments').html(data);
          }
        });
      }
  });

  $(document).on("click", ".deletecomment", function(){
      var name = $(this).data('id');
      console.log(name);
      if(name != ''){
        $.ajax({
          url: "process.php",
          method: "post",
          data: {commentid:name},
          success: function(data){
            $('#comments').html(data);
          }
        });
      }
  });
  // function PrintTable() {
  //    var divToPrint = document.getElementById('divToPrint');
  //    var popupWin = window.open('', '_blank', 'width=500,height=500');
  //    popupWin.document.open();
  //    popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
  //     popupWin.document.close();
  //         }
</script>
