<html>
<head>
	<title>Admin Record</title>

  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <link rel="stylesheet" type="text/css" href="style/bootstrap.css">

<style type="text/css">
	.heading{
	width: 100%;
	height: 27%;
	background-color: #2471A3;
}
.fes{
	margin-top: -185px;
	margin-left: 180px;
	text-shadow: 3px 4px white;
	font-family: arial;
	color: #062F63;
	font-weight: 800;
	font-size: 60px;
}
.jp{
	margin-top: 70px;
	margin-left: 130px;
	text-shadow: 5px 7px #030301;
	font-family: arial;
	color: #FAFF05;
	font-weight: 700;
	font-size: 60px;
}

#image{
	margin-left: -950px;
	margin-top: -220px;
}
.button {
    background-color: #064F7C; 
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 50px;
    width: 330px;
    height: 150px;
    margin: 4px 2px;
    cursor: pointer;
    transition-duration: 0.4s;
}
.button1:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

.button2:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
  #font{
    font-size: 30px;
  }
#xx{
  width: 350px;
  height: 150px;
  font-size:50px;
  font-family: Comic San MS;
  background-color: lightblue;
}
.btn-lg{
  width: 320px;
  height: 120px;
  font-size: 25px;
  font-weight: bold;
}
.btn-lz{
  width: 660px;
  height: 50px;

  font-size: 25px;
  font-weight: bold;
}
.back{
  background-color: #ECF0F1;
  margin: auto;
  position: absolute;
  left: 0;
  right: 0;
  width: 690px;
  height: 360px;
}
</style>
<center>
   <div class="heading">
        <h1 style="margin-top: 30px;"> 
        </h1>
   </div>
     <img id="image" src="./images/logo.png" width="230px" height="230px">
  <div class="fes">
     <p align="center"> Faculty Evaluation System </p>
      <br> 
  </div>
    <div class="jp">
     <p align="center"> -Office of Guidance- </p>
      <br> 
  </div>

</center>
</head>
<body style="background:linear-gradient(to bottom right,white,lightblue,white); height:790px">
 <br><br> <br> <br>
<div class="back">
<table align="center" cellpadding="10">
        <tr> 
         <td align="center"> 
        <a href="gencode.php">

        <button class="btn btn-primary btn-lg">GENERATE <br><br> STUDENT CODE</button></a> &nbsp;&nbsp;   
        <a href="chereg.php">

        <button class="btn btn-primary btn-lg" >REGISTER <br> <br> A TEACHER 
        </button></a> 
        <a href="adminhere.php">
        </td>
      <tr>
        <td align="center" >
        <a href="views.php">
        <button class="btn btn-primary btn-lg">VIEW</button></a>&nbsp;&nbsp;
           
        <a href="">
        <button class="btn btn-primary btn-lg">TEMPORARY</button></a>
        </td>
      </tr>
      <tr>
         <td>  <a href="index.php">
        <button class="btn btn-primary btn-lz">LOGOUT</button></a>
      </td> </tr>

  
          
</table>
            

</body>
</html>
