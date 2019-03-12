<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Sign-Up/Login Form</title>
  <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="css/style.css">
  
</head>
    

      
      <!--
      
<div style="width:10000px;">

    <div style="float: left ; width:150px"> 
        <form> <li><a href="http://127.0.0.1:50914/index.html">Home</a></li>  </form>
    </div>
    
    <div style="float: left; width:150px"> 
        <form> <li><a href="http://127.0.0.1:50914/receipes.html">Recipes</a></li>   </form>
    </div>
    
    <div style="float: left; width:150px"> 
        <form> <li><a href="http://127.0.0.1:50914/childcare.html">Child Care</a></li> </form>
    </div>
    
    <div style="float: left; width:180px"> 
        <form> <li><a href="http://127.0.0.1:50914/fashiontips.html">Fashion Tips</a></li></form>
    </div>
    
    <div style="float: left; width:200px"> 
        <form> <li><a href="http://127.0.0.1:50914/familyCounseling.html">Family Counseling</a></li></form>
    </div>
    
    <div style="float: left; width:150px"> 
        <form> <li><a href="http://127.0.0.1:50914/contactus.html">Contact Us</a></li></form>
    </div>
    
</div>
   -->

      
<body>
    
    
    <div id="wrapper">
  <header  id="header">
      
      
      <form style="float: right" action="http://localhost:8888/madams/registrationandlogin/">
        <input type="submit" value="Sign Up or Log In" />
      </form>
      
      <form style="float: right" action="http://localhost:8888/madams/subscription.php?">
        <input type="submit" value="Subscribe Here" />
      </form>
      
      <h1 style="padding-left:370px" > Madams </h1>
      
        </header>

 
  </div>
    
           <nav class="navigation">
      <ul>
        <li><a href="http://127.0.0.1:60741/index.html">Home</a></li>
        <li><a href="http://127.0.0.1:60741/receipes.html">Recipes</a></li>
        <li><a href="http://127.0.0.1:60741/childcare.html">Child Care</a></li>
        <li><a href="http://127.0.0.1:60741/fashiontips.html">Fashion Tips</a></li>
        <li><a href="http://127.0.0.1:60741/familyCounseling.html">Family Counseling</a></li>
        <li><a href="http://127.0.0.1:60741/contactus.html">Contact Us</a></li>
          
      </ul>
    </nav>
      
  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Sign Up for Free</h1>
          
          <form action="Registration.php"  method="get">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" id="fname" name="fname" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text" id="lname" name="lname" required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" id="email" name="email" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password"  id="pwd" name="pwd" required autocomplete="off"/>
          </div>
          
          <button type="submit" class="button button-block">Get Started</button>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Welcome to Madams!</h1>
          
          <form action="home.php"  method="get">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" id="email" name="email" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" id="pwd" name="pwd" required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button class="button button-block">Log In</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
