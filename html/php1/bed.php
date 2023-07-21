<?php
 


if (isset($_POST['submit']))
{
    extract($_REQUEST);
$file=fopen("shirts.txt","a");
fwrite($file, "\n" );
fwrite($file, "\n" );
fwrite($file, "\n" );
fwrite($file,"Data :");
fwrite($file, "\n" );
fwrite($file, $name );
fwrite($file, "\n" );
fwrite($file, $sex );
fwrite($file, "\n" );
fwrite($file, $size );
fwrite($file, "\n" );
fwrite($file,"comment :");
fwrite($file, $comment);
fclose($file);
}

?>


<!DOCTYPE html>
<html>
<head>
<link rel="icon" type="img/favicon-32x32.png" sizes="50x50" href="fav.png">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>survey</title>
    <link rel= "stylesheet" href= "style/style.css">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	  
<style>

body 
{

	margin: 0 auto;
    background-image: url(R.jpg) ;
	  background-attachment: fixed;
	background-repeat: no-repeat;
	background-size: cover;
	font-size: 20px;
	
	
	}
	
.center{
	
color:white;	
}

input[type=submit] {
  width: 40%;
  background-color: #003366;
  color: white;
  padding: 14px 20px;
  margin: 0 auto;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

@media only screen and (max-width: 600px) {
  body {
     background-image: url(R.jpg) ;
	 
  }
  img{

  width: 30%;
  height: auto;

  }

}
</style>
</head>
<body>
    <br>
    <br>
    <br>
    <div class="center">
    <center> <h1>   You have filled the survey successfully  </h1>  </center></div>

</body>



</html>