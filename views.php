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

<div class="container bg-white">
  <div class="row">
    <div class="col-md-1">
      <a href="adminrecord.php"><button class="btn btn-danger" type="button" name="button">
        <i class="fa fa-arrow-left"></i> BACK</button>
    </a>
    </div>
    <div class="col-md-6">
      <div class="form-inline pull-right">
        <label for="">Search by dept : </label>
        <a href="views.php?dept=ict" class="btn btn-default" style="padding:5px;">ICT</a>
        <a href="views.php?dept=eng" class="btn btn-default" style="padding:5px;">ENG</a>
        <a href="views.php?dept=nur" class="btn btn-default" style="padding:5px;">NUR</a>
        <a href="views.php?dept=chm" class="btn btn-default" style="padding:5px;">CHM</a>
        <a href="views.php?dept=cri" class="btn btn-default" style="padding:5px;">CRI</a>
        <a href="views.php?dept=ba" class="btn btn-default" style="padding:5px;">BA</a>
        <a href="views.php?dept=edu" class="btn btn-default" style="padding:5px;">EDU</a>
        <a href="views.php?dept=shs" class="btn btn-default" style="padding:5px;">SHS</a>
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
    <div class="col-md-2">
      <div class="pull-right">
        <a href="#" class="btn btn-warning" onclick="PrintTable();"
        title="print this table">Print</a>
      </div>
    </div>
  </div>

  <div class="row" style="height: 300px; overflow: auto;">
    <table class="table table-responsive table-striped table-bordered text" align="center"
     style="border-collapse: collapse;">
    	<tr>
    		<th>Name of Faculty</th>
    		<th>Mean Rating</th>
    		<th>Descriptive Equivalent</th>
    		<th>Option</th>
    	</tr>
    	<?php foreach($results as $g): ?>
        <tr>
          <td><?php echo $g->teacher ?></td>
          <td><?php echo $g->grade ?></td>
          <td><?php echo $g->description ?></td>
          <td><button data-id="<?php echo $g->teacher;?>" type="button" class="btn btn-primary details"
           data-toggle="modal">See details</button>
         </td>
        </tr>
      <?php endforeach; ?>
    </table>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="pull-right" style="padding-top: 20px;">
          <a class="btn btn-danger inline" href="functions/delete.php?deleteall=1"
          onclick="return confirm('Every Results will be deleted including users! Are you sure?')">
          <i class="fa fa-warning"></i> Delete all results</a>
      </div>
    </div>
    <div class="col-md-1">
    </div>
  </div>
</div>

<div class="modal fade" id="details" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Evaluation Details</h4>
      </div>
      <div class="modal-body" id="eval-details">

      </div>
      <div class="modal-footer">
        <button type="button" name="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="none" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Evaluation Details</h4>
      </div>
      <div class="modal-body" id="divToPrint">
        <table style="border-collapse: collapsed; border:1px solid black;" class="table table-responsive table-striped table-bordered text" 
          align="center">
          <tr>
            <th width="400px">Name of Faculty</th>
            <th width="300px">Mean Rating</th>
            <th width="300px">Descriptive Equivalent</th>
          </tr>
          <?php foreach($results as $g): ?>
           <h2 style="text-align: center"> Teacher Evaluation Result </text> </h2>
            <br>
            <tr align="center">
              <td width="400px"><?php echo $g->teacher ?></td>
              <td width="300px"><?php echo $g->grade ?></td>
              <td width="300px"><?php echo $g->description ?></td>
            </tr>
          <?php endforeach; ?>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" name="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

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
          data: {details:name},
          success: function(data){
            $('#eval-details').html(data);
            $('#details').modal('show');
          }
        });
      }
  });
  function PrintTable() {
     var divToPrint = document.getElementById('divToPrint');
     var popupWin = window.open('', '_blank', 'width=500,height=500');
     popupWin.document.open();
     popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
      popupWin.document.close();
          }
</script>
