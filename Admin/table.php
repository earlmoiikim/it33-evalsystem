<!DOCTYPE html>
<html>
<head>
  <title>HOME</title>
  
</head>
  

  
      <h2 align="center">SURVEY</h2>
    



<form method="POST" action="../functions/process.php">
  <div class="container">

        
      
         <table border="2" width="900">
          <tr>
           <td>Teacher's Name</td>
           <td>
                   <select name = "TeahersName" required>
              <option></option>
              <option>Mr. Modesto Tarrazona</option>
              <option>Miss Sheryl Mae Rodriguez</option>
              <option>Mr. Erwin Funa</option>
              <option>Mrs. Cheryl R. Amante</option>
              <option>Miss Chona Caga-anan</option>
              </select>
            </td>
            </tr>
           <table border="2" width="900">
           <td>1. He/She treat one another with respect.</td>
             <td>
               <select name="Eval1" required>
                 <option></option>
                 <option>Strongly Disagree</option>
                 <option>Some what Disagree</option>
                 <option>Some what Agree</option>
                 <option>Strongly Agree</option>
                
               </select>
             </td>

           </tr>
           <table border="2" width="900">
           <td>2. Teachers know about their studentsâ€™ lives outside of school.</td>
            <td>
                <select name= "Eval2" required>
                  <option></option>
                  <option>Strongly Disagree</option>
                 <option>Some what Disagree</option>
                 <option>Some what Agree</option>
                 <option>Strongly Agree</option>
                </select>
             </td>
             <table border="2" width="900">
           <td>3. Teachers help each other and work together.</td>
           <td>
         <select name="Eval3" required>
                      <option></option>
                <option>Strongly Disagree</option>
                 <option>Some what Disagree</option>
                 <option>Some what Agree</option>
                 <option>Strongly Agree</option>
                    </select>
                  
             </td>
           <table border="2" width="900">
           <td>4. Teachers are respectful of parents.</td>
            <td>
               
                 <select name="Eval4" required>
                  <option></option>
                <option>Strongly Disagree</option>
                 <option>Some what Disagree</option>
                 <option>Some what Agree</option>
                 <option>Strongly Agree</option>
                 </select>
               
             </td>
           <table border="2" width="900">
           <td>5. Teachers welcome contact fromparents.</td>
           <td>
               <select name="Eval5" required>
                <option></option>
                 <option>Strongly Disagree</option>
                 <option>Some what Disagree</option>
                 <option>Some what Agree</option>
                 <option>Strongly Agree</option>
               </select>
             </td>
           <table border="2" width="900">
            <td>Sex</td>
           <td>Department</td>

         </tr>
         <tr>
            
            
           
             
             <td align="center">
               <select name="sex"  required>
                <option></option>
                <option>Male</option>
                <option>Female</option>
                
               </select>
             </td>
             <td>
               <select name="Department" required>
                 <option></option>
                 <option>Business Add</option>
                 <option>Crim</option>
                 <option>CHM</option>
                 <option>Nursing</option>
                 <option>Educ</option>
                 <option>ICT</option>

               </select>
             </td>
         </tr>

     
         
         <input type="submit" name="submit" value="Submit">
        </table>
  </div>
</form>
</body>
</html>

<style type="text/css">
  body{
    background-image: url(../images/b2.jpg);
  margin: 0 auto
  
}
img{
  width: 50px;
  margin: 10px 0px 100px 100px;
  
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
.style3{
  border-bottom: 1px solid;
  width: 750px;

}

.container{
  width: 900px;
  height: 350px;
  text-align: left;
  margin: 0 auto;
  background-color: rgba(11, 83, 69,0.7); 
  border-radius: 4px;
  margin-top: 50px;
  box-shadow: 10px 10px 5px;

}
h3{
  padding-top: 5px;
  padding-right: 500px;
  margin: 0 auto;
  font-size: 25px;

}
table{
  background-color: #000000;
}


table td{
  width: 180px;
  height: 30px;
  background-color: #F0E68C;
}
table tr select{
  background-color: #95A5A6;
  height: 25px;
}
input[type="submit"]{
  position: absolute;
  top: 69%;
  left: 46%;
  padding: 15px 30px;
  color: #fff;
  border: none;
  background-color: #6495ED;
  border-radius: 5px;
  box-shadow: 5px 5px 5px black;

}
.navi{
  width: 500px;
  margin: 0 auto;
  margin-left: 700px;
  margin-top: 50px;
}
.navi ul li{
  float: left;
  margin-right: 50px;

  
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
  background-color: #85929E;
  padding: 10px 15px;
  border-radius: 5px;
}





</style>