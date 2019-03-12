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
?>
   
      
<div id="wrapper">
  <header  id="header">
      
      <form style="float: right" action="http://localhost:8888/madams/index.html">
         <input type="submit" value="Log Out" align="right" width="8"/>
      </form>
      
      <h1 style="center" > Madams </h1>
    
      <nav class="navigation">
      <ul>
        <li><a href="http://localhost:8888/madams/userPage/userpage.php">Home</a></li>
        <li><a href="http://localhost:8888/madams/userPage/userrecepies.php">Recipes</a></li>
        <li><a href="http://localhost:8888/madams/userPage/userchildcare.php">Child Care</a></li>
        <li><a href="http://localhost:8888/madams/userPage/userfashiontips.php">Fashion Tips</a></li>
        <li><a href="http://localhost:8888/madams/userPage/userfamilycounseling.php">Family Counseling</a></li>
        <li><a href="http://localhost:8888/madams/userPage/usercontactus.php">Contact Us</a></li>
          

      </ul>
    </nav>
  </header>


  <head>
    <link rel="stylesheet" href="style.css">
  </head>
  
  <body>
  <h1>chocolate cake</h1>
  <img src="images/chocolatecake.jpg" width = "400"/>
  <style>
  img {float:right;}
  
  </style>
<h3>Ingredients:</h3>
<ul>

</ul>
<li>3/4 cups butter or margarine, softened</li>
<li>3 eggs</li>
<li>2 cups sugar</li>
<li>2 cups flour</li>
<li>3/4 cup unsweetened cocoa powder</li>
<li>3/4 teaspoon baking powder</li>
<li>2 teaspoon vanilla</li>
<li>1 1/2 cup milk</li>

<h3>Method:</h3>

<ol>

</ol>
<li>Pre-heat oven to 350 degrees</li>
<li>Grease and flour three 6" X 1 1/2" round cake pans</li>
<li>Mix together flour, cocoa powder, baking powder and baking soda.set aside</li>
<li>In a large bowl, beat butter, eggs and vanilla</li>
<li>Gradually add sugar</li>
<li>Beat on medium to high speed for about 3-4 minutes until well mixed</li>
<li>Alternately combine in flour mixture and milk to batter while beating</li>
<li>Continue to beat until batter is smooth</li>
<li>Pour equal amounts of batter into greased and floured round cake pans</li>
<li>Bake 30 to 35 minutes</li>
<li>Check with a toothpick to se if it is done. Bake a few minutes more, if needed</li>
<li>Remove from oven and allow cakes to cool in pans for a few minutes</li>
<li>Place cakes on a wire rack, to them allow to completely cool</li>
</body>
 
 
 <h2> spaghetti bologonese</h2>
 <img src="images/spaghettibolognese.jpg" width = "400"/>
 <h3>Ingredients:</h3>
<ul>
<li>1 tbsp olive oil</li>
<li>4 rashers smoked streaky bacon, finely chopped</li>
<li>2 medium onions,finely chopped</li>
<li>2 carrots,trimmed and finely chopped</li>
<li>2 celery sticks, finely chopped</li>
<li>2 garlic cloves, finely chopped</li>
<li>2-3 sprigs rosemary,leaves picked and finely chopped</li>
<li>500g beef mince</li>
<p>For the Bolognese sauce</p>
<li>2 x 400g tins plum tomatoes</li>
<li>small pack basil, leaves picked, 
¾ finely chopped and the rest left whole for garnish</li>
<li>1 tsp dried oregano</li>
<li>2 fresh bay leaves</li>
<li>2 tbsp tomato purée</li>
<li>1 beef stock cube</li>
<li>1 red chilli, deseeded and finely chopped (optional)</li>
<li>125ml red wine</li>
<li>6 cherry tomatoes, sliced in half</li>
<li>400g spaghetti</li>

<h3>Method:</h3>

<ol

</ol>
<li>Put a large saucepan on a medium heat and add 1 tbsp olive oil.</li>
<li>Add 4 finely chopped bacon rashers and fry for 10 mins until golden and crisp</li>
<li>Reduce the heat and add the 2 onions, 2 carrots, 2 celery sticks
<br>2 garlic cloves and the leaves from 2-3 sprigs rosemary, all finely</br> 
chopped, then fry for 10 mins. Stir the veg often until it softens<br/></li>
<li>Increase the heat to medium-high, add 500g beef mince and cook 
<br>stirring for 3-4 mins until the meat is browned all over</br>
<li>Add 2 tins plum tomatoes, the finely chopped leaves from ¾ small pack basil, 
<br>1 tsp dried oregano, 2 bay leaves, 2 tbsp tomato purée, 1 beef stock cube, 
<br>1 deseeded and finely chopped red chilli (if using), 
<br>125ml red wine and 6 halved cherry tomatoes. 
<br>Stir with a wooden spoon, breaking up the plum tomatoes</br>
<li>Bring to the boil, reduce to a gentle simmer and cover with a lid. 
<br>Cook for 1 hr 15 mins stirring occasionally, 
<br>until you have a rich, thick sauce.</br>
<li>Add the 75g grated parmesan, check the seasoning and stir.</li>
<li>When the Bolognese is nearly finished, 
<br>cook 400g spaghetti following the pack instructions.</br>
<li>Drain the spaghetti and stir into the Bolognese sauce. 
<br>Serve with more grated parmesan, the remaining basil leaves and crusty bread, 
<br>if you like.</br>

  
</html>