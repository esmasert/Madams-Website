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
      
<style>
    
/* Style the form element with a border around it */
form {
  border: 1px solid #f1f1f1;
}

/* Add some padding and a grey background color to containers */
.container {
  padding: 20px;
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
      
      
  </head>
  <body>

     
      
<?php
      
/*

      
include('/registrationandlogin/home.php/'); 
      
echo "Welcome " . $var;


if(mysqli_num_rows($result) > 0)
{
    
    while($row = $result->fetch_assoc()) {
        
        echo "Welcome " . $row["fname"];
    }

   // header('Location: http://localhost:8888/madams/userPage/userpage.php');

}
else
{
    echo "Invalid email or password";
}
      
$conn->close();
      
/*

$email = $_GET['email'];
$pwd = $_GET['pwd'];

echo "<br>";

$my_query = "";

$my_query = "select * from MadamUsers where email = '$email' and pwd = '$pwd'"; 

$result = mysqli_query($connection, $my_query);


if(mysqli_num_rows($result) > 0)
{
    
    while($row = $result->fetch_assoc()) {
        
        echo "Welcome " . $row["fname"];
    }

   // header('Location: http://localhost:8888/madams/userPage/userpage.php');

        
}
else
{
    echo "Invalid email or password";
    echo "    ";
    echo("<button onclick=\"location.href='http://localhost:8888/madams/registrationandlogin/?'\"> Go Back </button>");
}

*/

?>
  
      
   
      
<div id="wrapper">
  <header  id="header">
      
      <form style="float: right" action="http://localhost:8888/madams/index.html">
         <input type="submit" value="Log Out" />
      </form>
      
      <h1 style="center" > Madams </h1>
      
      <form action="home.php"  method="get">

      
      <nav class="navigation">
      <ul>

        <li><a href="http://localhost:8888/madams/userPage2/userpage.php">Home</a></li>
        <li><a href="http://localhost:8888/madams/userPage2/userrecepies.php">Recipes</a></li>
        <li><a href="http://localhost:8888/madams/userPage2/userchildcare.php">Child Care</a></li>
        <li><a href="http://localhost:8888/madams/userPage2/userfashiontips.php">Fashion Tips</a></li>
        <li><a href="http://localhost:8888/madams/userPage2/userfamilycounseling.php">Family Counseling</a></li>
        <li><a href="http://localhost:8888/madams/userPage2/usercontactus.php">Contact Us</a></li>

      </ul>
    </nav>

    
    <div id="content" class="clearfix">
        <img src="zehrafilm.png" width = "900"/>
        
      <section id="left-sidebar">
        <p> </p>
      </section>
             
      <section id="right">
        <p> </p>
      </section>
    </div>
         
    <footer>
      <p>All Rights Reserved. ©2018 Madams Team.</p>
    </footer>
      
    </form>
    </header>
      
  </div>  

      
</body>
</html>