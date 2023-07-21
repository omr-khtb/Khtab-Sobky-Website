<!DOCTYPE html>
<head>
<link rel="icon" type="img/favicon-32x32.png" sizes="50x50" href="img/fav.png">
    <title>Royal house seniors 2021 </title>
    <link rel= "stylesheet" href= "style/style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="java/java.js"></script>
</head>
<body>




<br><br>

<h1 style="font-size: 80px;  margin: 50px;margin-left: 100px;font-family:verdana;text-align: center;border: 5px solid white ;color: black;-webkit-text-stroke: 4px white ;font-size: 50px;" class="h11" > Seniors 2021 T-shirt Vote</h1>
  <br>

  <img src="img/royal.png" alt="secound" width="20%" height="20%" id="second" class="center">
<br>

<?php
/* $host="localhost";
$username="id14531849_koko2";
$password="[>59ysb^Uk)T4GiD";
$dbname="id14531849_koko";

 $con = mysqli_connect("$host","$username","$password","$dbname"); */
$con = mysqli_connect("localhost","root","","pyr");

if (isset($_POST['resultss']))
{
	$vote_r= "update votes set resultss=resultss+1";
	$run_r= mysqli_query($con, $vote_r);
	
	if($run_r){
	echo"<h2 align='center'> you chose1 </h2>";
    echo"<h2 align='center'><a href='index2.php?results'>View Results </a></h2>";
		
	}		
}



if (isset($_POST['shirt1']))
{
	$vote_1= "update votes set shirt1=shirt1+1";
	$run_1= mysqli_query($con, $vote_1);
	
	if($run_1){
	echo"<h2 align='center'> you chose1 </h2>";
    echo"<h2 align='center'><a href='index2.php?results'>View Results </a></h2>";
		
	}		
}
if (isset($_POST['shirt2']))
{
	$vote_2= "update votes set shirt2=shirt2+1";
	$run_2= mysqli_query($con, $vote_2);
	
	if($run_2){
	echo"<h2 align='center'> you chose2 </h2>";
    echo"<h2 align='center'><a href='index2.php?results'>View Results </a></h2>";
		
	}		
}
if (isset($_POST['shirt3']))
{
	$vote_3= "update votes set shirt3=shirt3+1";
	$run_3= mysqli_query($con, $vote_3);
	
	if($run_3){
	echo"<h2 align='center'> you chose3 </h2>";
    echo"<h2 align='center'><a href='index2.php?results'>View Results </a></h2>";
		
	}		
}
if (isset($_POST['shirt4']))
{
	$vote_4= "update votes set shirt4=shirt4+1";
	$run_4= mysqli_query($con, $vote_4);
	
	if($run_4){
	echo"<h2 align='center'> you chose4 </h2>";
    echo"<h2 align='center'><a href='index2.php?results'>View Results </a></h2>";
		
	}		
}
if (isset($_POST['shirt5']))
{
	$vote_5= "update votes set shirt5=shirt5+1";
	$run_5= mysqli_query($con, $vote_5);
	
	if($run_5){
	echo"<h2 align='center'> you chose5 </h2>";
    echo"<h2 align='center'><a href='index2.php?results'>View Results </a></h2>";
		
	}		
}
if (isset($_POST['shirt6']))
{
	$vote_6= "update votes set shirt6=shirt6+1";
	$run_6= mysqli_query($con, $vote_6);
	
	if($run_6){
	echo"<h2 align='center'> you chose6 </h2>";
    echo"<h2 align='center'><a href='index2.php?results'>View Results </a></h2>";
		
	}		
}
if (isset($_POST['shirt7']))
{
	$vote_7= "update votes set shirt7=shirt7+1";
	$run_7= mysqli_query($con, $vote_7);
	
	if($run_7){
	echo"<h2 align='center'> you chose7 </h2>";
    echo"<h2 align='center'><a href='index2.php?results'>View Results </a></h2>";
		
	}		
}
if (isset($_POST['shirt8']))
{
	$vote_8= "update votes set shirt8=shirt8+1";
	$run_8= mysqli_query($con, $vote_8);
	
	if($run_8){
	echo"<h2 align='center'> you chose8 </h2>";
    echo"<h2 align='center'><a href='index2.php?results'>View Results </a></h2>";
		
	}		
}
if (isset($_POST['shirt9']))
{
	$vote_9= "update votes set shirt9=shirt9+1";
	$run_9= mysqli_query($con, $vote_9);
	
	if($run_9){
	echo"<h2 align='center'> you chose9 </h2>";
    echo"<h2 align='center'><a href='index2.php?results'>View Results </a></h2>";
		
	}		
}
if (isset($_POST['shirt10']))
{
	$vote_10= "update votes set shirt10=shirt10+1";
	$run_10= mysqli_query($con, $vote_10);
	
	if($run_10){
	echo"<h2 align='center'> you chose10 </h2>";
    echo"<h2 align='center'><a href='index2.php?results'>View Results </a></h2>";
		
	}		
}
if (isset($_POST['shirt11']))
{
	$vote_11= "update votes set shirt11=shirt11+1";
	$run_11= mysqli_query($con, $vote_11);
	
	if($run_11){
	echo"<h2 align='center'> you chose11 </h2>";
    echo"<h2 align='center'><a href='index2.php?results'>View Results </a></h2>";
		
	}		
}
if (isset($_POST['shirt12']))
{
	$vote_12= "update votes set shirt12=shirt12+1";
	$run_12= mysqli_query($con, $vote_12);
	
	if($run_12){
	echo"<h2 align='center'> you chose12 </h2>";
    echo"<h2 align='center'><a href='index2.php?results'>View Results </a></h2>";
		
	}		
}
if (isset($_POST['shirt13']))
{
	$vote_13= "update votes set shirt13=shirt13+1";
	$run_13= mysqli_query($con, $vote_13);
	
	if($run_13){
	echo"<h2 align='center'> you chose13 </h2>";
    echo"<h2 align='center'><a href='index2.php?results'>View Results </a></h2>";
		
	}		
}
if (isset($_POST['shirt14']))
{
	$vote_14= "update votes set shirt14=shirt14+1";
	$run_14= mysqli_query($con, $vote_14);
	
	if($run_14){
	echo"<h2 align='center'> you chose14 </h2>";
    echo"<h2 align='center'><a href='index2.php?results'>View Results </a></h2>";
		
	}		
}
if (isset($_POST['shirt15']))
{
	$vote_15= "update votes set shirt15=shirt15+1";
	$run_15= mysqli_query($con, $vote_15);
	
	if($run_15){
	echo"<h2 align='center'> you chose15 </h2>";
    echo"<h2 align='center'><a href='index2.php?results'>View Results </a></h2>";
		
	}		
}


if(isset($_GET['results']))
{
  $get_votes = "select * from votes";
  $run_votes = mysqli_query($con, $get_votes);
  $row_votes = mysqli_fetch_array($run_votes);
   
 $result = $row_votes['result'];
  $shirt1 = $row_votes['shirt1'];
  $shirt2 = $row_votes['shirt2'];
  $shirt3 = $row_votes['shirt3'];
  $shirt4 = $row_votes['shirt4'];
  $shirt5 = $row_votes['shirt5'];
  $shirt6 = $row_votes['shirt6'];
  $shirt7 = $row_votes['shirt7'];
  $shirt8 = $row_votes['shirt8'];
  $shirt9 = $row_votes['shirt9'];
  $shirt10 = $row_votes['shirt10'];
  $shirt11 = $row_votes['shirt11'];
  $shirt12 = $row_votes['shirt12'];
  $shirt13 = $row_votes['shirt13'];
  $shirt14 = $row_votes['shirt14'];
  $shirt15 = $row_votes['shirt15'];

	
	$count= $shirt1+$shirt2+$shirt3+$shirt4+$shirt5+$shirt6+$shirt7+$shirt8+$shirt9+$shirt10+$shirt11+$shirt12+$shirt13+$shirt14+$shirt15;
	
	$per_shirt1 = round($shirt1*100/$count) . "%";
	$per_shirt2 = round($shirt2*100/$count) . "%";
  $per_shirt3 = round($shirt3*100/$count) . "%";
  $per_shirt4 = round($shirt4*100/$count) . "%";
  $per_shirt5 = round($shirt5*100/$count) . "%";
  $per_shirt6 = round($shirt6*100/$count) . "%";
  $per_shirt7 = round($shirt7*100/$count) . "%";
  $per_shirt8 = round($shirt8*100/$count) . "%";
  $per_shirt9 = round($shirt9*100/$count) . "%";
  $per_shirt10 = round($shirt10*100/$count) . "%";
  $per_shirt11 = round($shirt11*100/$count) . "%";
  $per_shirt12 = round($shirt12*100/$count) . "%";
  $per_shirt13 = round($shirt13*100/$count) . "%";
  $per_shirt14 = round($shirt14*100/$count) . "%";
  $per_shirt15 = round($shirt15*100/$count) . "%";
  
	
	echo"
	<div style=' background: orange' paddind: 10px; text-allign: center;>
	<center>
	<h2> result: </h2>
	<p style=' background: black; color: white; padding: 10px; width:500px;'>
	
	<b> shirt 1: </b>  $per_shirt1
	
	</p>
	<p style=' background: black; color: white; padding: 10px; width:500px;'>
	
	<b> shirt 2: </b> $per_shirt2
	
	</p>
	<p style=' background: black; color: white; padding: 10px; width:500px;'>
	
	<b> shirt 3: </b> $per_shirt3
	
  </p>
  </p>
	<p style=' background: black; color: white; padding: 10px; width:500px;'>
	
	<b> shirt 4: </b>  $per_shirt4
	
  </p>
  </p>
	<p style=' background: black; color: white; padding: 10px; width:500px;'>
	
	<b> shirt 5: </b>  $per_shirt5
	
  </p>
  </p>
	<p style=' background: black; color: white; padding: 10px; width:500px;'>
	
	<b> shirt 6: </b> $per_shirt6
	
  </p>
  </p>
	<p style=' background: black; color: white; padding: 10px; width:500px;'>
	
	<b> shirt 7: </b>  $per_shirt7
	
  </p>
  </p>
	<p style=' background: black; color: white; padding: 10px; width:500px;'>
	
	<b> shirt 8: </b> $per_shirt8
	
  </p>
  </p>
	<p style=' background: black; color: white; padding: 10px; width:500px;'>
	
	<b> shirt 9: </b>  $per_shirt9
	
  </p>
  </p>
	<p style=' background: black; color: white; padding: 10px; width:500px;'>
	
	<b> shirt 10: </b>  $per_shirt10
	
  </p>
  </p>
	<p style=' background: black; color: white; padding: 10px; width:500px;'>
	
	<b> shirt 11: </b> $shirt11 $per_shirt11
	
  </p>
  </p>
	<p style=' background: black; color: white; padding: 10px; width:500px;'>
	
	<b> shirt 12: </b> $ $per_shirt12
	
  </p>
  </p>
	<p style=' background: black; color: white; padding: 10px; width:500px;'>
	
	<b> shirt 13: </b>  (
  </p>
  </p>
	<p style=' background: black; color: white; padding: 10px; width:500px;'>
	
	<b> shirt 14: </b> $per_shirt14
	
  </p>
  </p>
	<p style=' background: black; color: white; padding: 10px; width:500px;'>
	
	<b> shirt 15: </b>  $per_shirt15
	
	</p>
	  </p>
	<p style=' background: black; color: white; padding: 10px; width:500px;'>
	
	<b> result </b>  $resultss
	
	</p>
	</center>
	</div>";
	
}
	
?>



<form action="config.php"  method="post" align "center">


  

  <h6>*Note You Can Only Vote Once. Any Other Votes From The Same Device Will NOT Be Counted, so please choose wisely.*</h6>
  <br>
  <p style="text-transform:capitalize; color:white;">ENTER YOUR NAME: <input type="text" name="username"> Votes With No Names Will NOT Be Counted</p>

    <hr>
<div>
  <div style=" display: flex;
  justify-content: center;
  align-items: center;
  
 ">
 
<input type="submit" style='color:black; border-style:solid; border-color:black; border-width:5px; border-radius:  20px; background-color:white;' name="resultss" value="Results"/> 
</div>
<br>
  <hr>
  
<input type="submit" style='color:black; border-style:solid; border-color:black; border-width:5px; border-radius:  20px; background-color:white;' name="shirt1" value="choose 1"/> 
        
       
    <img src="img/10.jpg" alt="First" width="500" height="600" id="first" class="center">
	<img src="img/blackonwhite.png" alt="First" width="500" height="600" id="first" class="center">
  </div><br>
 <hr>





 <hr>
  <div /*class="w3-black"*/>
    
  <input type="submit" style='color:black; border-style:solid; border-color:black; border-width:5px; border-radius:  20px; background-color:white;' name="shirt2" value="choose 2"/> 
        
      
   
      
    <br>
    <img src="img/golf10.png" alt="secound" width="500" height="600" id="secound" class="center">
	<img src="img/gold.png" alt="secound" width="500" height="600" id="secound" class="center">
</div><br>
<hr>


<hr>
  <div>
   
    <input type="submit" style='color:black; border-style:solid; border-color:black; border-width:5px; border-radius:  20px; background-color:white;' name="shirt3" value="choose 3"/> 
        
     
     
      <br>
	  <img src="img/teal2.png" alt="secound" width="500" height="600" id="secound" class="center">
    <img src="img/teal.png" alt="third" width="500" height="600" id="third" class="center">
    <p></p>
  </div>
  <hr>


  <hr>
  <div>
    
    <input type="submit" style='color:black; border-style:solid; border-color:black; border-width:5px; border-radius:  20px; background-color:white;' name="shirt4" value="choose 4"/> 
        
     
      
      <br>
	  <img src="img/tfrba1.png" alt="secound" width="500" height="600" id="secound" class="center">
    <img src="img/tfrba.png" alt="fourth" width="500" height="600" id="third" class="center" style="border: 10px solid lightblue;">
    <p></p>
  </div>
  <hr>

  <hr>
  <div>
  <input type="submit" style='color:black; border-style:solid; border-color:black; border-width:5px; border-radius:  20px; background-color:white;' name="shirt5" value="choose 5"/> 
        

      <br>
	  <img src="img/10.jpg" alt="secound" width="500" height="600" id="secound" class="center">
    <img src="img/white.png" alt="fifth" width="500" height="600" id="third" class="center" style="border: 10px soild lightblue;">
    <p></p>
  </div>
  <hr>



  
  <hr  >
<div>
  
    <input type="submit" style='color:black; border-style:solid; border-color:black; border-width:5px; border-radius:  20px; background-color:white;' name="shirt6" value="choose 6"/> 
        
     <img src="img/red2.png" alt="secound" width="500" height="600" id="secound" class="center">  
    <img src="img/red.png" alt="First" width="500" height="600" id="first" class="center">
  </div><br>
 <hr>




<hr>




  
  




</div>
<br>
  <img src="img/logo.png" alt="logo" width="25%" height="25%" id="logo">
    

</form>












</body>

</html>