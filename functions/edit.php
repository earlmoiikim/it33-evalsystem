<?php
include '../database/database.php';
$msg = '';

if(isset($_GET['edit'])){

$id=$_GET['edit'];

}

$data = teacherupdate($id);
        if($data){
              foreach($data as $r){
                $id = $r['id'];
                $emp_id = $r['emp_id'];
                $name = $r['name'];
                $department = $r['department'];
                $pass = $r['pass'];
              }

}

if(isset($_POST['update'])){

$nid = strtoupper($_POST['id']);
$neid = strtoupper($_POST['empnum']);
$nname = strtoupper($_POST['name']);
$pass = $_POST['pass'];
$ndept = $_POST['dept'];

$db = connect();
      $query = $db->prepare("UPDATE teachers SET name ='$nname', emp_id = '$neid', pass='$pass' department = '$ndept' WHERE id = '$nid'");
       if($query->execute()){
        header('Location: http://localhost/IT33/chereg.php');

}
else
  header('Location: http://localhost/IT33/chereg.php?error');
}

?>
<html>
<head>
  <title>SJPIICD Faculty Evaluation System</title>
  <!-- Bootstrap Core CSS -->
  <link href="../style/bootstrap.min.css" rel="stylesheet">
  <!-- Icons -->
  <link rel="stylesheet" href="../style/css/font-awesome.min.css" type="text/css">
  <!-- custom css -->
  <link href="../style/master.css" rel="stylesheet">
</head>

<body style="background:linear-gradient(to bottom right,white,lightblue,white);">

  <header style="margin-bottom: 20px;">
    <div class="container-fluid bg-primary">

      <div class="row">
        <div class="container" style="padding: 20px 0px;">

          <div class="col-md-3">
            <div class="box">
                <img class="img-responsive" src="../images/logo.png">
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
  <div class="">
  <div class="sclass"> <?php echo $msg; ?> </div>

    <form action="edit.php" method="POST">

      <input type="hidden" value="<?php echo $id ?>" name= 'id'>
      <div class="col-md-4"></div>
      <div class="col-md-4 bgwhite" style="padding: 20px 30px 20px 30px">
        <h3 align="center" style="margin: 0px 0px 20px 0px">TEACHER'S INFORMATION</h3>
        <div class="form-group">
          <label>Employee Number : </label>
          <input type="text" name="empnum" value="<?php echo $emp_id ?>"
          class="form-control botspace" size="30" height= "100" minlength="7" maxlength="7"
          title="example format: SRT-123" required style="margin-bottom: 10px; text-transform:uppercase;">
          <label>Password : </label>
          <input type="password" name="pass" value="<?php echo $pass ?>"
          class="form-control botspace" size="30" height= "100" minlength="8" maxlength="20"
          required style="margin-bottom: 10px;">
          <label>Employee Name : </label>
          <input type="text" name="name" value="<?php echo $name ?>"
          class="form-control botspace" required style="margin-bottom: 10px; text-transform:uppercase;">
          <label>Department : </label>
          <select name="dept" value="<?php echo $department ?>"
          class="form-control botspace" required style="margin-bottom: 10px;">
          <option value="<?php echo $department ?>"><?php echo $department ?></option>
          <option value="ICT"> ICT </option>
          <option value="ENGINEERING"> ENGINEERING </option>
          <option value="NURSING"> NURSING </option>
          <option value="CRIMINOLOGY"> CRIMINOLOGY </option>
          <option value="EDUCATION"> EDUCATION </option>
          <option value="BA"> B.A </option>
          <option value="CHM"> CHM </option>
          </select>
          <div class="pull-right">
            <button type="submit" name="update" class="btn btn-primary">
            <i class="fa fa-edit"></i> UPDATE</button>
            <a href="../chereg.php" class="btn btn-danger">
              <i class="fa fa-arrow-left"></i> BACK</a>
          </div>
        </div>
        <!-- form group -->
      </div>
      <div class="col-md-4"></div>

    </form>
  </div>
</div>

<?php
  if(isset($_GET['success'])== true){$test = "";}
      else{$test = "hidden";}
?>

    <div id="save" visibility: <?php echo $test;?>>
      <div id="inside"><p>Your data has been updated!</p>
      <a href="../chereg.php"><button id="okbutton" autofocus="autofocus">OKAY!</button></a>
      </div>
    </div>

?>

</body>
</html>
