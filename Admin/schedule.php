
<!DOCTYPE html>
<?php

session_start();
include "../functions/function.php";
$db = connect();

 if(isset($_GET['action']) && $_GET['action']=='delete'){
  $db = connect();
  $sth = $db->prepare("delete FROM registration Where id = :id");
  $sth->bindValue('id',$_GET['id']);
  $sth->execute();
 }
 $noob = getemp();
 if(isset($_POST['search'])){
  if(findname($_POST['search'])){
    $noob = getemp2($_POST['search']);
  }
  else{
    header('Location:#popup3');
  }
}

?>

<html>
  <head>
  <title>Schedule</title>
  
  </head>

<body>

  <h2 align="center">Hi, Admin Cute!</h2>

  <div class="navi">
    <nav>
      <ul>
     
        <li><a href="table.php">ADD</a></li>
        <li><a href="../functions/logout.php">| LOG OUT</a></li>
      </ul>
    </nav>
  </div>
  <br>
  <div class="dib">
        <form class="search" method="POST" action="schedule.php" >
          <input type="text" class="sirts" name="search" placeholder="Search">
        </form>
 </div>
  <div class="wrapper" >
  <table class="table2"  border="2">

  <tr class="font1">
    <th>Teaher's Name</th>
    <th>1. He/She treat one another with respect.</th>
    <th>2. He/She know about their students lives outside of school.</th>
    <th>3. He/She help each other and work together.</th>
    <th>4. He/She are respectful of parents.</th>
    <th>5. He/She welcome contact fromparents.</th>
    <th>Sex</th>
    <th>Department</th>
  
  </tr>
  <?php foreach ($noob as $g ):?>
  <tr class="font">
    <td><?php echo $g->TeahersName;?></td>
    <td><?php echo  $g->Eval1; ?></td>
    <td><?php echo  $g->Eval2; ?></td>
    <td><?php echo  $g->Eval3; ?></td>
    <td><?php echo  $g->Eval3; ?></td>
    <td><?php echo  $g->Eval5; ?></td>
    <td><?php echo  $g->sex; ?></td>
    <td><?php echo  $g->Department
; ?></td>
    
    <td><a href="../functions/page.php?id=<?php echo $g->id;?>">Edit</a> | 
    <a href="schedule.php?id=<?php echo $g->id;?>
    &action=delete" onclick="return confirm('Are you sure?')">Delete</a>
    </td> 
  </tr>
  <?php endforeach;?>
  
  </table>
  
  </div>
</div>

<div id="popup1" class="overlay">

  <?php
  $name = $_SESSION['try'];
  $db = connect();
  $stmt = $db->prepare("SELECT * from registration where id = :id");
  $stmt->bindValue('id',$name);
  $stmt->execute();
  $account = $stmt->fetch(PDO::FETCH_OBJ);  
  ?>
    <div class="popup1">
          <a class="close" href="schedule.php">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&times</a>
          
            <form action="../functions/update.php" method="POST">
            <h2>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspEdit The Answer</h2>
            <input required="Required Field" type="hidden" name="id"
            value="<?php echo $name;?>">
              <table class="poptable">
          <tr align="center"> 
           <td>Teacher's Name</td>
           <td>1. He/She treat one another with respect.</td>
           <td>2. He/She know about their studentsâ€™ lives outside of school.</td>
           <td>3. He/She help each other and work together.</td>
           <td>4. He/She are respectful of parents.</td>
           <td>5. He/She welcome contact fromparents.</td>
           <td>Sex</td>
           <td>Department</td>
         </tr>
         <tr>
            <td align="center">
              <select name = "TeahersName" required>
              <option><?php echo $account->TeahersName
               ?></option>
              <option>Mr. Modesto Tarrazona</option>
              <option>Miss Sheryl Mae Rodriguez</option>
              <option>Mr. Erwin Funa</option>
              <option>Mrs. Cheryl R. Amante</option>
              <option>Miss Chona Caga-anan</option>
              </select>
            </td>
            <td align="center">
               <select name="Eval1"  required>
                 <option><?php echo $account->Eval1 ?></option>
                 <option>Strongly Disagree</option>
                 <option>Some what Disagree</option>
                 <option>Some what Agree</option>
                 <option>Strongly Agree</option>
               </select>
             </td>
             <td align="center">
                <select name= "Eval2" required>
                  <option><?php echo $account->Eval2 ?></option>
                   <option>Strongly Disagree</option>
                 <option>Some what Disagree</option>
                 <option>Some what Agree</option>
                 <option>Strongly Agree</option>
                </select>
             </td>
             <td align="center">
                  
                    <select name="Eval3" >
                      <option><?php echo $account->Eval3 ?></option>
                       <option>Strongly Disagree</option>
                 <option>Some what Disagree</option>
                 <option>Some what Agree</option>
                 <option>Strongly Agree</option>
                      
                    </select>
                  
             </td>
             <td align="center">
      <select name="Eval4"  required>
                 <option><?php echo $account->Eval5 ?></option>
                  <option>Strongly Disagree</option>
                 <option>Some what Disagree</option>
                 <option>Some what Agree</option>
                 <option>Strongly Agree</option>
               </select>
             </td>

             <td align="center">
               <select name="Eval5"  required>
                 <option><?php echo $account->Eval5 ?></option>
                  <option>Strongly Disagree</option>
                 <option>Some what Disagree</option>
                 <option>Some what Agree</option>
                 <option>Strongly Agree</option>
               </select>
             </td>
              <td align="center">
               <select name="sex" required>
                <option><?php echo $account->sex?></option>
                  <option>Male</option>
                <option>Female</option>
               </select>
             </td>
             <td align="center">
               <select name="Department"  required>
                 <option><?php echo $account->Department
 ?></option>
                 <option>Business Add</option>
                 <option>Crim</option>
                 <option>CHM</option>
                 <option>Nursing</option>
                 <option>Educ</option>
                 <option>ICT</option>s
               </select>
             </td>
        <tr>
        
        <td><input type="submit" name="save" value="Save"></td>
    </tr>
        </table>
      </form>
      </div>
    </div>



  
</body>
<div id="popup3" class="overlay">
  <div class="popup">
  <a class="close" href="schedule.php">&times</a>
  <h1>No results have been found!</h1>
  </div>
</div>


<div id="popup4" class="overlay">
  <div class="popup">
  <a class="close" href="schedule.php">&times</a>
  <h1 align="center">Successfully updated! </h1>
  </div>
</div>

<div id="popup5" class="overlay">
  <div class="popup">
  <a class="close" href="schedule.php">&times</a>
  <h1 align="center">Schedule is Already exists! </h1>
  </div>
</div>



</html>


<style>

  body{
  background-image: url(../images/b2.jpg);
  margin: 0 auto
  
}


.style1{
  border-top: 1px solid;
  margin-top: 50px;
  width: 40%;

}
.style2{
  border-top: 2px solid ;
  width: 65%;

}

.wrapper{
 
 height: 400px;
 width: 1100px;
 position: absolute;
  left: 8%;
  overflow: auto;
  background-color: black;
}
.wrapper table th{
  background-color: #F0E68C;
  width: 110px;
  height: 40px;
}
.wrapper table td{
  height:25px;
  background-color: #FAF0E6;
}
.search{
  position: relative;
  left: 70px;
  margin: 10px auto;
  border-radius: 50px;
  padding: 20px;
  background-color: #B22222;
  width: 20%;
}

.sirts{
  width: 200px;
  height: 25px;


}


/*popup*/
.overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(81, 90, 90, 0.7);
  transition: opacity 100ms;
  visibility: hidden;
  opacity: 0;
}
.overlay h1{
  position: absolute;
  left: 16%;
  top: 25%;
  color: #FFF8DC;
}


.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup {
  margin: 260px auto;
  padding: 20px;
  background: #fff;
  border-radius: 5px;
  width: 50%;
  height: 50px;
  position: relative;
  background-color: #B22222;
  transition: all 3s ease-in-out;
}

.popup h2 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}
.popup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup .close:hover {
  color: #06D85F;
}
.popup .content {
  max-height: 30%;
  overflow: auto;
}

@media screen and (max-width: 700px){
  .box{
    width: 70%;
  }
  .popup{
    width: 70%;
  }
}

.popup td{
  width: 80px;
  background-color: #A93226;
}
.popup td select{
  width: 90px;
  height: 30px;
  background-color: #1A5276;

}


/*popup*/
.popup1 {
  margin: 100px auto;
  padding: 20px;
  background: #fff;
  border-radius: 5px;
  width: 56%;
  height: 150px;
  position: relative;
  background-color: #FAF0E6;
  transition: all 3s ease-in-out;
}

.popup1 h2 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}
.popup1 .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup1 .close:hover {
  color: #06D85F;
}
.popup1 .content {
  max-height: 30%;
  overflow: auto;
}

@media screen and (max-width: 700px){
  .box{
    width: 70%;
  }
  .popup1{
    width: 70%;
  }
}

.popup1 td{
  width: 80px;
  background-color: #F0E68C;
}
.popup1 td select{
  width: 90px;
  height: 30px;
  background-color:   #A9A9A9;

}

input[type="submit"]{
  position: absolute;
  margin-top: 10px;
  left: 47%;
  padding: 5px 15px;
  background-color: #17202A;
  color: #fff;
}

.navi{
  width: 500px;
  margin: 0 auto;
  margin-left: 1000px;
  margin-top: 10px;
}
.navi ul li{
  float: left;
  margin-right: 100px;

  
}
.navi ul{
  list-style: none;

}
.navi ul li a{
  text-decoration: none;
  font-weight: bold;
  color: #17202A;

}
.navi ul li a:hover{
  color: black ;
  background-color: #7FFF00;
  padding: 10px 15px;
  border-radius: 5px;
}

</style>
