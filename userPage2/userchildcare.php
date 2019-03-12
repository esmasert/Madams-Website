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
session_start();
require_once('dbconnect.php');


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
    
    
<div id="wrapper">
<header id="header">
<h1 style="color:blue"> <center><font size="8"> <b>  CHILD CARE </b> </font></center> </h1>
<p1> <b> <i> <center> <marquee> <font size="6">HERE WE ARE......FOR YOUR KIDS......</marquee></font> </i> </center></b></p1>
<img src="images/3.jpg" style="width:200; height:200;float: left; margin-right: 10px; margin-bottom: 5px" />
<p2> 
<font size="5" face="arial" color=black >A nanny provides childcare for one or more children in the parent's own home.Many families have a full-time nanny ,but it is also popular to employ a part-time nanny.
Nothing is more important than finding the nanny who will make your child happy.We make finding that special person easily.</p2> 
<p3>We provide nannies for your kids...You can search them here.. </font></p3>
</header>
</div>
<div> <br> <br> <br>
<p4><i> <font size="5" face="arial" color=red > Here are some of the nannies in our list... </i></font> </p4>
<br> <br> <br>

<table border="1" >

<img src="images/5.png" style="width:180; height:150;float: left; margin-right: 10px; margin-bottom:5px" /> <br> <br>
<p5> <b><br> SARAHCAD <br> I am a mature nanny of 48, I have a full driving licence which I've held for 24 years. I have been working with children for 30 yrs. <br> Mail:sarahcad11@yahoo.com <br> Phone: 07345332478 </p5>


<br><br> <br> <br><img src="images/6.jpg" style="width:180; height:150;float: left; margin-right: 10px; margin-bottom:5px" /> <br> <br>
<p6> <b><br> LEE <br> Hai.Iam 25 years old.I enjoy looking after kids, I also have 2 children of age 10 and 7.I have been working with children for 5 yrs. <br> Mail:leeangel44@yahoo.com <br> Phone: 07356781100 </p6>

<br><br> <br> <br><img src="images/7.png" style="width:180; height:150;float: left; margin-right: 10px; margin-bottom:5px" /> <br> <br>
<p7> <b><br>KATIE<br> Hai.Iam Katie.Iam 22 years old and have a little girl who is 4 years old. I have also had a passion for working with children and really enjoy what I do. <br> Mail:katieabraham889@gmail.com <br> Phone: 07455632189 </p7>

<br><br> <br> <br><img src="images/8.jpg" style="width:180; height:150;float: left; margin-right: 10px; margin-bottom:5px" /> <br> <br>
<p8> <b><br> JODIE <br> Hai.Iam 19 years old.iam from brighton.I am a level 2 childcarer.Ofsted registered and first aid trained.. <br> Mail:leeangel44@yahoo.com <br> Phone: 07365432344 </p8>

<br><br> <br> <br><img src="images/9.jpg" style="width:180; height:150;float: left; margin-right: 10px; margin-bottom:5px" /> <br> <br>
<p9> <b><br> SARA <br> Hai.I am a lovely young lady, friendly , bubbly and trustworthy. I have worked in nursery for about 4 years now and currently hold level 1,2&3 <br> Mail:saradennis33@yahoo.com <br> Phone: 07765458801 </p9>

<br><br> <br> <br><img src="images/10.jpg" style="width:180; height:150;float: left; margin-right: 10px; margin-bottom:5px" /> <br> <br>
<p10> <b><br> ISSIE <br> Hai.I am 45 years old and I am living in Manor Park. I completed a Foundation degree in early years. I have a Cache Level 3 Diploma for the Children and Young People..I have been working with children for 5 yrs. <br> Mail:issiel44@yahoo.com <br> Phone: 07399125401 </p10>

<br><br> <br> <br><img src="images/11.jpg" style="width:180; height:150;float: left; margin-right: 10px; margin-bottom:5px" /> <br> <br>
<p11> <b><br> LESLIE <br> Hello.I am a 25 year bubbly , caring, enthusiastic, organised childcare practitioner, I am very passionate about working with children as I love to be involved in teaching them.<br> Mail:leslie67@yahoo.com <br> Phone: 07965185429 </p11>

<br><br> <br> <br><img src="images/12.jpg" style="width:180; height:150;float: left; margin-right: 10px; margin-bottom:5px" /> <br> <br>
<p12> <b><br> EILEEN <br> Hai.I am a qualified Nursery Officer with more than 15 years of experience with working with children between the age of 2 to 5.currently working as a nanny. <br> Mail:eileen33@yahoo.com <br> Phone: 07654221091 </p12>

<br><br> <br> <br><img src="images/13.jpg" style="width:180; height:150;float: left; margin-right: 10px; margin-bottom:5px" /> <br> <br>
<p13> <b>9.<br> CHRISTINE <br> Helo,I am a reliable and experienced childcare practitioner and nanny based in Herne Hill Dulwich and the surrounding areas  <br> Mail:christine55@gmail.com <br> Phone: 07356723901 </p13>

<br> <br> <br><img src="images/14.jpg" style="width:180; height:150;float: left; margin-right: 10px; margin-bottom:5px" /> <br> <br>
<p14> <b>10.<br> MARY <br> Hai.I enjoy working with children, I believe that each child is an individual who learns and develops in different ways and that they should be given the independence to learn new things.
I enjoy doing creative, imaginative and outdoor activities.
 <br> Mail:maryangel889@gmail.com <br> Phone: 07312356217 </p14>


</table>

</header>
</div>
</body>

</html>