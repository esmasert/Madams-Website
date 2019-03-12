<?php


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
        
        $var = $row["fname"];
        
        echo "Welcome ";
        
        Print "<strong>$var:</strong> ".$row['Height']."<br>";

        
        header( "refresh:2 ; http://localhost:8888/madams/userPage2/userpage.php" );

        
    }


}
else
{
    echo "Invalid email or password";
    echo "    ";
    echo("<button onclick=\"location.href='http://localhost:8888/madams/registrationandlogin/?'\"> Go Back </button>");
}

?>