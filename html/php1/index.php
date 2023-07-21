

<!DOCTYPE html>
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
  width: 20%;
  background-color: #003366;
  color: white;
  padding: 14px 20px;
  margin: 0 auto;
  border: none;
  border-radius: 6px;
  cursor: pointer;
}
.buton{
  width: 20%;
  background-color: #003366;
  color: white;
  padding: 14px 20px;
  margin: 0 auto;
  border: none;
  border-radius: 6px;
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
.buton{
  width: 40%;
  background-color: #003366;
  color: white;
  padding: 14px 20px;
  margin: 0 auto;
  border: none;
  border-radius: 6px;
  cursor: pointer;
}
}
}
</style>
</head>
<body>



<div class="center">
<center><h1> Survey</h1></center>
<center><img src="royal.png" alt="secound"  id="second" class="center"></center>
<center><h5>Survey for Royal house senior t-shirts </h5></center>
<center><h6>Price for T-shirt:175 egp with transaction fees and for hijab:185</h6></center>
<center>
    
    <form  method="post" align "center"  action="bed.php">
Enter Your <b>FULL FULL YA SHBAB </b> name: <input  type="text" name="name" required >
<br>
<br>
Gender:
<select name="sex" required>
<option></option>
<option>Male</option>
<option>Female (hijab)</option>
<option>Female (no hijab)</option>

</select>
<br>
<br>
size:
<select name="size" required>
<option></option>
<option>Xsmall height:62 width:46</option>
<option>small height:68 width:52</option>
<option>Medium height:70 width:54</option>
<option>Large height:72 width:56</option>
<option>Xlarge height:74 width:58</option>
<option>Xxlarge height:76 width:60</option>
<option>Xxxlarge height:78 width:62</option>
</select>
<br>
<br>

<br>
Any special requests write down below:
<br>
<textarea name="comment" rows="6"cols="15">
</textarea>
<br>
<br>
<div class="button">
   
   
<input type="submit" name="submit"  value="submit"><br><br>



</center>
</form>    
<center><h6>After submitting your data will apear in results</h6></center>
<a href="results.php">

<center><button class="buton">Results</button></center></a><br><br>
<img src="logo.png" alt="logo" width="17%" height="17%" id="logo">

</div>
</body>
</html>