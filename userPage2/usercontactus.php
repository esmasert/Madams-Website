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
  <link rel="stylesheet" href="contactusCss.css" />
      
      
  </head>

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
      
      
      
<?php
    
/*
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "Madams";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM MadamUsers ORDER BY Userid DESC LIMIT 1";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
        echo "Welcome " . $row["fname"];
    }
} else {
    echo "0 results";
}
$conn->close();

*/
?>
      
      
      
<div id="wrapper">
  <header  id="header">
      
      <form style="float: right" action="http://localhost:8888/madams/index.html">
         <input type="submit" value="Log Out" />
      </form>
    
      
      <h1 style="center" > Madams </h1>
      
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
  </header>
</div>
    
    
<div class="container">
  <form action="action_page.php">

    <label for="fname">Name Surname</label>
    <textarea type="text" id="fname" name="firstname" placeholder="Your name and surname.."></textarea>

    <label for="lname">E-mail</label>
    <textarea type="text" id="lname" name="email" placeholder="Your email address.."></textarea>

    <label for="country">Country</label>
    <select id="country" name="country" style="height:30px" >
      <option value="uk">UK</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>
</div> 
 
