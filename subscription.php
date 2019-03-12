
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Madams</title>
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width; initial-scale=1.0">
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
  <link rel="stylesheet" href="main.css" />
  <link rel="stylesheet" href="fashiontips.html" />
  </head>
  <body>

      
<div id="wrapper">
  <header  id="header">
      <form style="float: right" action="http://localhost:8888/madams/registrationandlogin/">
        <input type="submit" value="Sign Up or Log In" />
      </form>
      
      <form style="float: right" action="http://localhost:8888/madams/subscription.php?">
        <input type="submit" value="Subscribe Here" />
      </form>
            
      <h1 style="padding-left:190px" > Madams </h1>
      
      <nav class="navigation">
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="receipes.html">Recipes</a></li>
        <li><a href="childcare.html">Child Care</a></li>
        <li><a href="fashiontips.html">Fashion Tips</a></li>
        <li><a href="familyCounseling.html">Family Counseling</a></li>
        <li><a href="contactus.html">Contact Us</a></li>  
      </ul>
    </nav>
  </header>
    
<style>
    
/* Style the form element with a border around it */
form {
  border: 1px solid #f1f1f1;
}

/* Add some padding and a grey background color to containers */
.container {
  padding: 2 0px;
  background-color: #f1f1f1;
}

/* Style the input elements and the submit button */
input[type=text], input[type=submit] {
  width: 100%;
  padding: 8px;
  margin: 4px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Add margins to the checkbox */
input[type=checkbox] {
  margin-top: 16px;
}

/* Style the submit button */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  border: none;
}

input[type=submit]:hover {
  opacity: 0.8;
}
    
</style>
<body>
    <div class="container">
    <h2>Subscribe to our Newsletter</h2>
  </div>
	<form action="subscription.php" method="post">
		<div class="container" style="background-color:white">
			<input type="text" placeholder="Email address" name="email" required>
			<label>
				<input type="checkbox" checked="checked" name="subscribe"> Daily Newsletter 
			</label>
		</div>

		<div class="container">
			<!--<input type="submit" value="subscribes"> -->
			<input type="submit" name="subscribe" value="Subscribe" />
		</div>
	</form>   
<?php
session_start();
require_once('dbconnect.php');
if(isset($_POST['subscribe'])){
	$email = $_POST['email'];

	echo "<br>";
	$my_query = "";
	if($email!=''){
		$my_query = "INSERT INTO subscribers(email) VALUES ('$email') "; 
		$emaildata = mysqli_query($connection, $my_query);
		if($emaildata){
			echo "Added Succesfully.";
		}
	}
}
?>
</body>
    
   
    
   
