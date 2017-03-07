<html>
<head>
  <title>List of Teachers</title>
  <!-- Bootstrap Core CSS -->
  <link href="style/bootstrap.min.css" rel="stylesheet">
  <!-- Icons -->
  <link rel="stylesheet" href="style/css/font-awesome.min.css" type="text/css">
  <!-- custom css -->
  <link href="style/master.css" rel="stylesheet">
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

  <div class="container bgwhite" style="padding-bottom: 20px;">
    <div class="row">
      <div class="col-md-4">
         <div class="headingteacher"><h2> List of Teachers</h2> </div>
      </div>
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <div class="pull-right form-group" style="padding-top: 20px;">
          <div class="input-group">
            <input class="form-control" type="text" id="search"
            placeholder="Search Here"><span class="input-group-addon">
               <i class="fa fa-search"></i> </span>
          </div>
        </div>
    </div>
  </div>

  <div class="row" style="height: 350px; overflow: auto;">
    <div id="result" class="box-table">

    </div>
  </div>

   <div class="row" style="margin-top: 10px;">
     <div class="col-md-4"></div>
     <div class="col-md-4 text-center">
       <a href="addnewteacher.php"><button class="btn btn-primary">
         <i class="fa fa-sign-in"></i>&nbsp; Add Teacher </button></a>
       <a href="adminrecord.php"> <button class="btn btn-danger">
         <i class="fa fa-arrow-left"></i>&nbsp; BACK </button> </a>
     </div>
     <div class="col-md-4"></div>

  </div>
</div>

</body>
</html>

<script src="js/jquery.js"> </script>

<script>
     $('#result').load('teacherslist.php');
     $(document).ready(function(){

     	$('#search').keyup(function(){
     		var txt = $(this).val();
     		if(txt != ''){
     			$.ajax({
     				url:"process.php",method:"post",
     				data:{searchteacher:txt},
     				dataType:"text",
     				success:function(data){
     					$('#result').html(data);
     				}
     			})
     		}
     		else{
     			$('#result').load('teacherslist.php');

     		}
     	})

     })

  </script>
