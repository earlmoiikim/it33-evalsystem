<?php
include 'header.php';
?>


<html>
<head>
	<title>SJPIICD Faculty Evaluation System</title>

<link href="Style/bootstrap.css" rel="stylesheet" />
<script src="js/jquery.js"></script>     
<style type="text/css">

#container{
width: 50%;

border: 1px solid;
margin: auto;
margin-top: 40px;
padding: 5px;
}	
.table-info td{
	padding: 10px;
	padding-right: 40px;
	font-size: 25px;

}.modal-footer-no-color{
	text-align: center;
}
.input-width{
	width: 330px;
}
input[type=text] {
    width: 130%;
    height: 35px;
    padding: 12px 20px;
    margin: 8px 0;
}
select {
    width: 200%;
    height: 35px;
    margin: 8px 0;
 }

</style>
</head>
<body>

<div id="container">
<h3 align="center">Student Information</h3>
<br><br>
<form id="insert_form" method="post" action="addstudent.php">
<table class="table-info" align="center">
	<tr>
		<td>School ID:</td>
		<td><input type="text" id="sch_id" name="schoolid" style="font-size:20px;"> <br> <span class="chkId"></span></td>
	</tr>
	<tr>
		<td>Full Name:</td>
		<td><input type="text" id="sch_name" name="name" style="font-size:20px;text-transform:uppercase;" title="FIRSTNAME - LASTNAME"> <br> <span class="chkname"></span></td>
	</tr>
	<tr>
		<td>Department:</td>
		<td>
			<select required name="course" id="course" class="input-width" style="font-size:20px">
      <option value="">-Choose-</option>
        <option value="BSIT">BSIT</option>
          <option value="BEED">BEED</option>  
            <option value="BSN">BSN</option>
              <option value="CRIM">CRIM</option>
                <option value="CHM">CHM</option>
                  </select>
		</td>
	</tr>


</table>
<br>
<div class="modal-footer-no-color">
  <button type="submit" name="AddMember" class=" btn btn-large  btn-primary">Register</button>
  <span><button type="button" id="clear" class=" btn btn-large btn-warning">Clear</button></span>
 </div>

</form>

</div>

</body>
</html>
<script type="text/javascript">
	



$(document).ready(function(){

var error_id = false;
var error_name = false;


$('#sch_id').keyup(function() {chk_id();});
$('#sch_name').keyup(function() {chk_name();});

function chk_id(){
  var Reg = /^\s*[0-9,\s]+\s*$/;
  var id = $("#sch_id").val();

  if(!Reg.test(id)) {
        $(".chkId").css({"color":"red"});
        $(".chkId").css({"font-size":"15px"});
        $(".chkId").html("Invalid ID number");
        $(".chkId").show();
         error_id = true;
    }
 else{
    $(".chkId").html(''); //no error found
    
    }
}


function chk_name(){
  var Reg = /^[a-zA-Z .\-]+$/i;
  var name = $("#sch_name").val();

  if(!Reg.test(name)) {
        $(".chkname").css({"color":"red"});
        $(".chkname").css({"font-size":"15px"});
        $(".chkname").html("Invalid Name");
        $(".chkname").show();
         error_name = true;
    }
 else{
    $(".chkname").html(''); //no error found
    
    }
}

$("#insert_form").submit(function() { //you cannot submit date if there is a error

error_id = false;
error_name = false;
     
 
   chk_id();
   chkname(); 

  if(error_id == false  && error_id == false){
    return true;
  }else{
    return false;
  }



});



$(document).on('click', '#clear', function(){            
                  
                  $('#insert_form')[0].reset();   
                   $(".error").html('');  
                                      
               });    



 });

</script>