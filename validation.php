<?php

$servername = $username = $datapass = $dbname ="";
$servername = "cmpe272.clauxrtatppm.us-west-1.rds.amazonaws.com";
$username = "cmpe272";
$datapass = "mysql123";
$dbname = "cmpe272";

$conn = mysqli_connect($servername, $username, $datapass, $dbname);

// Check connection
if(!$conn) {
    //die("Connection failed: " .mysqli_connect_error());
   echo "Unable to connect Data base";
}

$email = $_POST["email"];
$password = $_POST["password"];

$serverpass="";
$fname="";
$lname="";
$sql = "select * from USER where email = '$email' ";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)){
    $serverpass = $row["password"];
    $fname = $row['first_name'];
    $lname = $row['last_name'];
}

if($serverpass === $password){
    
    
    header("Location: allproducts.php?user=$fname $lname");
  
}
else{
    echo "<body style='background: url(background.jpg) no-repeat center center fixed;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;'><h1>Authentication Failed</h1>Go Back <a href='index.php'>Click Here</a>";
}


?>