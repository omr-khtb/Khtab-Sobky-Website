<!DOCTYPE html>
<head>
<link rel="icon" type="img/favicon-32x32.png" sizes="50x50" href="img/fav.png">
    <title>seniors 2021 </title>
    <link rel= "stylesheet" href= "style/style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="java/java.js"></script>
</head>
<body>

<audio autoplay>
  <source src="music.mp3" type="audio/mp3">
</audio>



<h1 style="font-size: 80px;  margin: 50px;margin-left: 100px;font-family:verdana;text-align: center;border: 5px solid white ;color: black;-webkit-text-stroke: 4px white ;font-size: 50px;" class="h11"> Seniors 2021 T-shirt Vote</h1>
         <br>
         <br>





<?php
 $con = mysqli_connect("localhost","id14430776_jefkjks","kldfKLN_sdno15","id14430776_jkassjk");


if (isset($_POST['resultss']))
{
    extract($_REQUEST);
$file=fopen("results.txt","a");

fwrite($file,"name :");
fwrite($file, $username );
fwrite($file,"  / a7a results" ."\n");
fclose($file);



	$vote_r= "update votes set resultss=resultss+1";
	$run_r= mysqli_query($con, $vote_r);
	
	if($run_r){

	echo"<h2 align='center' style='color:white;'> These are the results before voting  </h2>";
    echo"<h2 style='color:white;' align='center' ><a href='config.php?results' style='text-decoration:none;'><div > <button style='border-color:black; border-radius:  20px; background-color:white;' > View Results </a></button></div></h2>";
		
	}		
}





if (isset($_POST['shirt1']))
{
extract($_REQUEST);
$file=fopen("names.txt","a");

fwrite($file,"name :");
fwrite($file, $username );
fwrite($file," :shirt 1" ."\n");
fclose($file);

	$vote_1= "update votes set shirt1=shirt1+1";
	$run_1= mysqli_query($con, $vote_1);
	
	if($run_1){
	echo"<h2 style='color:white;' align='center'> $username Chose Shirt 1 </h2>";
    echo"<h2 style='color:white;' align='center' ><a href='config.php?results' style='text-decoration:none;'><div > <button style='border-color:black; border-radius:  20px; background-color:white;' > View Results </a></button></div></h2>";
		
	}		
}
if (isset($_POST['shirt2']))
{
	extract($_REQUEST);
$file=fopen("names.txt","a");

fwrite($file,"name :");
fwrite($file, $username );
fwrite($file," :shirt 2" ."\n");
fclose($file);
	$vote_2= "update votes set shirt2=shirt2+1";
	$run_2= mysqli_query($con, $vote_2);
	
	if($run_2){
	echo"<h2 style='color:white;' align='center'> $username Chose Shirt 2 </h2>";
  echo"<h2 style='color:white;' align='center' ><a href='config.php?results' style='text-decoration:none;'><div > <button style='border-color:black; border-radius:  20px; background-color:white;' > View Results </a></button></div></h2>";		
	}		
}
if (isset($_POST['shirt3']))
{
	extract($_REQUEST);
$file=fopen("names.txt","a");

fwrite($file,"name :");
fwrite($file, $username );
fwrite($file," :shirt 3" ."\n");
fclose($file);
	$vote_3= "update votes set shirt3=shirt3+1";
	$run_3= mysqli_query($con, $vote_3);
	
	if($run_3){
	echo"<h2 style='color:white;' align='center'> $username Chose Shirt 3 </h2>";
  echo"<h2 style='color:white;' align='center' ><a href='config.php?results' style='text-decoration:none;'><div > <button style='border-color:black; border-radius:  20px; background-color:white;' > View Results </a></button></div></h2>";		
	}		
}
if (isset($_POST['shirt4']))
{
	extract($_REQUEST);
$file=fopen("names.txt","a");

fwrite($file,"name :");
fwrite($file, $username );
fwrite($file," :shirt 4" ."\n");
fclose($file);
	$vote_4= "update votes set shirt4=shirt4+1";
	$run_4= mysqli_query($con, $vote_4);
	
	if($run_4){
	echo"<h2 style='color:white;' align='center'> $username Chose Shirt 4 </h2>";
  echo"<h2 style='color:white;' align='center' ><a href='config.php?results' style='text-decoration:none;'><div > <button style='border-color:black; border-radius:  20px; background-color:white;' > View Results </a></button></div></h2>";		
	}		
}
if (isset($_POST['shirt5']))
{
	extract($_REQUEST);
$file=fopen("names.txt","a");

fwrite($file,"name :");
fwrite($file, $username );
fwrite($file," :shirt 5" ."\n");
fclose($file);
	$vote_5= "update votes set shirt5=shirt5+1";
	$run_5= mysqli_query($con, $vote_5);
	
	if($run_5){
	echo"<h2 style='color:white;' align='center'> $username Chose Shirt 5 </h2>";
echo"<h2 style='color:white;' align='center' ><a href='config.php?results' style='text-decoration:none;'><div > <button style='border-color:black; border-radius:  20px; background-color:white;' > View Results </a></button></div></h2>";
		
	}		
}
if (isset($_POST['shirt6']))
{
	extract($_REQUEST);
$file=fopen("names.txt","a");

fwrite($file,"name :");
fwrite($file, $username );
fwrite($file," :shirt 6" ."\n");
fclose($file);
	$vote_6= "update votes set shirt6=shirt6+1";
	$run_6= mysqli_query($con, $vote_6);
	
	if($run_6){
	echo"<h2 style='color:white;' align='center'> $username Chose Shirt 6 </h2>";
echo"<h2 style='color:white;' align='center' ><a href='config.php?results' style='text-decoration:none;'><div > <button style='border-color:black; border-radius:  20px; background-color:white;' > View Results </a></button></div></h2>";
		
	}		
}
if (isset($_POST['shirt7']))
{
	extract($_REQUEST);
$file=fopen("names.txt","a");

fwrite($file,"name :");
fwrite($file, $username );
fwrite($file," :shirt 7" ."\n");
fclose($file);
	$vote_7= "update votes set shirt7=shirt7+1";
	$run_7= mysqli_query($con, $vote_7);
	
	if($run_7){
	echo"<h2 style='color:white;' align='center'> $username Chose Shirt 7 </h2>";
echo"<h2 style='color:white;' align='center' ><a href='config.php?results' style='text-decoration:none;'><div > <button style='border-color:black; border-radius:  20px; background-color:white;' > View Results </a></button></div></h2>";
		
	}		
}
if (isset($_POST['shirt8']))
{
	extract($_REQUEST);
$file=fopen("names.txt","a");

fwrite($file,"name :");
fwrite($file, $username );
fwrite($file,"shirt 8" ."\n");
fclose($file);
	$vote_8= "update votes set shirt8=shirt8+1";
	$run_8= mysqli_query($con, $vote_8);
	
	if($run_8){
	echo"<h2 style='color:white;' align='center'> $username Chose Shirt 8 </h2>";
echo"<h2 style='color:white;' align='center' ><a href='config.php?results' style='text-decoration:none;'><div > <button style='border-color:black; border-radius:  20px; background-color:white;' > View Results </a></button></div></h2>";
		
	}		
}
if (isset($_POST['shirt9']))
{
	extract($_REQUEST);
$file=fopen("names.txt","a");

fwrite($file,"name :");
fwrite($file, $username );
fwrite($file,"shirt 9" ."\n");
fclose($file);
	$vote_9= "update votes set shirt9=shirt9+1";
	$run_9= mysqli_query($con, $vote_9);
	
	if($run_9){
	echo"<h2 style='color:white;' align='center'> $username Chose Shirt 9 </h2>";
echo"<h2 style='color:white;' align='center' ><a href='config.php?results' style='text-decoration:none;'><div > <button style='border-color:black; border-radius:  20px; background-color:white;' > View Results </a></button></div></h2>";
		
	}		
}
if (isset($_POST['shirt10']))
{
	extract($_REQUEST);
$file=fopen("names.txt","a");

fwrite($file,"name :");
fwrite($file, $username );
fwrite($file,"shirt 10" ."\n");
fclose($file);
	$vote_10= "update votes set shirt10=shirt10+1";
	$run_10= mysqli_query($con, $vote_10);
	
	if($run_10){
	echo"<h2 style='color:white;' align='center'> You Chose Shirt 10 </h2>";
echo"<h2 style='color:white;' align='center' ><a href='config.php?results' style='text-decoration:none;'><div > <button style='border-color:black; border-radius:  20px; background-color:white;' > View Results </a></button></div></h2>";
		
	}		
}
if (isset($_POST['shirt11']))
{
	extract($_REQUEST);
$file=fopen("names.txt","a");

fwrite($file,"name :");
fwrite($file, $username );
fwrite($file,"shirt 11" ."\n");
fclose($file);
	$vote_11= "update votes set shirt11=shirt11+1";
	$run_11= mysqli_query($con, $vote_11);
	
	if($run_11){
	echo"<h2 style='color:white;' align='center'> You Chose Shirt 11 </h2>";
echo"<h2 style='color:white;' align='center' ><a href='config.php?results' style='text-decoration:none;'><div > <button style='border-color:black; border-radius:  20px; background-color:white;' > View Results </a></button></div></h2>";
		
	}		
}
if (isset($_POST['shirt12']))
{
	extract($_REQUEST);
$file=fopen("names.txt","a");

fwrite($file,"name :");
fwrite($file, $username );
fwrite($file,"shirt 12" ."\n");
fclose($file);
	$vote_12= "update votes set shirt12=shirt12+1";
	$run_12= mysqli_query($con, $vote_12);
	
	if($run_12){
	echo"<h2 style='color:white;' align='center'> You Chose Shirt 12 </h2>";
echo"<h2 style='color:white;' align='center' ><a href='config.php?results' style='text-decoration:none;'><div > <button style='border-color:black; border-radius:  20px; background-color:white;' > View Results </a></button></div></h2>";
		
	}		
}
if (isset($_POST['shirt13']))
{
	extract($_REQUEST);
$file=fopen("names.txt","a");

fwrite($file,"name :");
fwrite($file, $username );
fwrite($file,"shirt 13" ."\n");
fclose($file);
	$vote_13= "update votes set shirt13=shirt13+1";
	$run_13= mysqli_query($con, $vote_13);
	
	if($run_13){
	echo"<h2 style='color:white;' align='center'> You Chose Shirt 13 </h2>";
echo"<h2 style='color:white;' align='center' ><a href='config.php?results' style='text-decoration:none;'><div > <button style='border-color:black; border-radius:  20px; background-color:white;' > View Results </a></button></div></h2>";
		
	}		
}
if (isset($_POST['shirt14']))
{
	extract($_REQUEST);
$file=fopen("names.txt","a");

fwrite($file,"name :");
fwrite($file, $username );
fwrite($file,"shirt 14" ."\n");
fclose($file);
	$vote_14= "update votes set shirt14=shirt14+1";
	$run_14= mysqli_query($con, $vote_14);
	
	if($run_14){
	echo"<h2 style='color:white;' align='center'> You Chose Shirt 14 </h2>";
echo"<h2 style='color:white;' align='center' ><a href='config.php?results' style='text-decoration:none;'><div > <button style='border-color:black; border-radius:  20px; background-color:white;' > View Results </a></button></div></h2>";
		
	}		
}
if (isset($_POST['shirt15']))
{
	extract($_REQUEST);
$file=fopen("names.txt","a");

fwrite($file,"name :");
fwrite($file, $username );
fwrite($file,"shirt 15" ."\n");
fclose($file);
	$vote_15= "update votes set shirt15=shirt15+1";
	$run_15= mysqli_query($con, $vote_15);
	
	if($run_15){
	echo"<h2 style='color:white;' align='center'> You Chose Shirt 15 </h2>";
echo"<h2 style='color:white;' align='center' ><a href='config.php?results' style='text-decoration:none;'><div > <button style='border-color:black; border-radius:  20px; background-color:white;' > View Results </a></button></div></h2>";
		
	}		
}


if(isset($_GET['results']))
{
  $get_votes = "select * from votes";
  $run_votes = mysqli_query($con, $get_votes);
  $row_votes = mysqli_fetch_array($run_votes);
  
  $resultss = $row_votes['resultss'];
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
	<div paddind: 10px; text-allign: center;>
	<center>
	<h2 style='color:white;' style='color:white;'> Results: </h2>
	<p style=' border-style:solid; border-color:white; border-style:solid; border-color:white; border-radius:100px ; background: black; color: white; padding: 10px; width:500px;'>
	
	<b> shirt 1: </b>  $per_shirt1
	
	</p>
	<p style=' border-style:solid; border-color:white; border-radius:100px ; background: black; color: white; padding: 10px; width:500px;'>
	
	<b> shirt 2: </b>  $per_shirt2
	
	</p>
	<p style=' border-style:solid; border-color:white; border-radius:100px ; background: black; color: white; padding: 10px; width:500px;'>
	
	<b> shirt 3: </b>  $per_shirt3
	
  </p>
  </p>
	<p style=' border-style:solid; border-color:white; border-radius:100px ; background: black; color: white; padding: 10px; width:500px;'>
	
	<b> shirt 4: </b>  $per_shirt4
	
  </p>
  </p>
	<p style=' border-style:solid; border-color:white; border-radius:100px ; background: black; color: white; padding: 10px; width:500px;'>
	
	<b> shirt 5: </b> $per_shirt5
	
  </p>
  </p>
	<p style=' border-style:solid; border-color:white; border-radius:100px ; background: black; color: white; padding: 10px; width:500px;'>
	
	<b> shirt 6: </b>  $per_shirt6
	
  </p>


  
	
	
	</p>
	</center>
	</div>";
	
}
	


?>
















  
         
  <p style="font-size: larger; color: white;text-align-last: center;">Thank You For Voting</p>
    <h6 style="color: white;text-align-last: center;">*Note You Can Only Vote Once. Any Other Votes From The Same Device Will NOT Be Counted.*</h6>
	
	<center><h3>Scroll down to see the full list</h3></center>
   <center> <iframe src="names.txt" style="background-color:white;" width="30%" height="200px">
    </iframe></center>

<marquee  behavior="scroll" scrollamount="8" >
   <img src="img/logo.png" alt="logo" width="30%" height="30%" id="logo"><p id="marquee" >

  </marquee>


</body>

</html>