
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
      
     <!-- <form style="float: right" action="http://127.0.0.1:50914/subscription.html">
        <input type="submit" value="Subscribe Here" />
      </form> -->
      
      <form style="float: right" action="http://localhost:8888/madams/subscription.php">
        <input type="submit" value="Subscribe Here" />
      </form>
      
      <h1 style="padding-left:190px" > Madams </h1>
    
      <nav class="navigation">
      <ul>
        <li><a href="http://localhost:8888/madams/index.html">Home</a></li>
        <li><a href="http://localhost:8888/madams/receipes.html">Recipes</a></li>
        <li><a href="http://localhost:8888/madams/childcare.html">Child Care</a></li>
        <li><a href="http://localhost:8888/madams/fashiontips.html">Fashion Tips</a></li>
        <li><a href="http://localhost:8888/madams/familyCounseling.html">Family Counseling</a></li>
        <li><a href="http://localhost:8888/madams/contactus.html">Contact Us</a></li>
          

      </ul>
    </nav>
  </header>
  </body>
  </html>
  
    
<?php
    
    
    
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "admin@madamz.co.uk";
    $email_subject = "Your email subject line";
 
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     
 
    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $comments = $_POST['comments']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
 
  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
  }
 
  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
 
Thank you for contacting us. We will be in touch with you very soon.
  
}
?>