<!Doctype html>
<html lang="en">
	<head>
        <!--meta-->
        <meta charset="UTF-8" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="AE" content=" keywords" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- scripts -->
        <script type="text/javascript" src="js/script.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <!-- scripts -->

        <!-- stylesheets -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="../bootstrap/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap-grid.min.css">
        <link rel="icon" href="image/fiv.png" type="image/gif" sizes="16x16">
        <link rel="stylesheet" href="../css/css/grid_6" /> 
        <link rel="stylesheet" href="../css/glow.css">
        <link rel="stylesheet" href="../css/style.css">
        <!-- stylesheets -->
        <style>

img[src*="000webhost"]{   
   
   display: none !important;   
   
   }


</style>
        <title>KhtabSobky</title>
  </head>
  <body class="contact">
 
	<!--NAV-->
    <div class="con">
       <nav>
           <input type="checkbox" id="check">
           <div class="label">
           <label class="logo"> Khtab&Sobky </label>
           <label for="check" class="checkn">
              <i class="fa fa-bars"></i>
           </label>
          </div>

              <ul>
                <li> <a class="active" href="../index.html"> home</a></li>
                </li><li> <a href="about.html"> about us </a></li>
                <li> <a href="projects.html"> projects</a>
                <li> <a href="contact.php"> contact us</a></li>
              </ul>
      </nav>
      <section></section>
      </div>     
	<!--NAV-->

    <div class="con">
       <div class="cont"> 
          <div  class="contact">
             <h1  class="glow"> contact us</h1>
                <form action="" class="contact-form"  method="post">
                    <div class="move1">
                    <input type="text" class="contact2" name="user" required placeholder="your name">
                    </div>
                    <div class="move2">
                    <input type="email" class="contact2"name="email" placeholder="your email">
                    </div>
                    <div class="move3">
                    <input type="number" class="contact2" name="number" placeholder="your number">
                    </div>
                    <div class="move4">
                    <textarea class="contact2" name="message" placeholder="your message"></textarea>
                    </div>
                    <div class="move5">
                    <input type="submit" class="glow3shansend" name="submit" value="send">
                    </div>
                 </form>
           </div>
       </div>
	</div>
</body>


</html>

<?php
 


if (isset($_POST['submit']))
{
	echo '<script type="text/javascript">';
    echo ' alert("Thank You For Contacting Us")';  
    echo '</script>';

    extract($_REQUEST);
$file=fopen("contact.txt","a");
fwrite($file, "\n" );
fwrite($file, "\n" );
fwrite($file, "\n" );
fwrite($file,"Data :");
fwrite($file, "\n" );
fwrite($file,"name:");
fwrite($file, $user );
fwrite($file, "\n" );
fwrite($file,"email:");
fwrite($file, $email );
fwrite($file, "\n" );
fwrite($file,"number:");
fwrite($file, $number );
fwrite($file, "\n" );
fwrite($file,"message:");
fwrite($file, $message);
fclose($file);

}

?>

