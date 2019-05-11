<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
  Products
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="./assets/css/now-ui-kit.css?v=1.3.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="./assets/demo/demo.css" rel="stylesheet" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
function updateView(view){

$.ajax({
        type: "POST",
        url: "productViewLocal.php",
        data: {website_id:190, product_id: view},
        dataType:'JSON', 
        success: function(response){
            console.log(response);
            if(response.success) {
              
            }
        }
    });

}
</script>

</head>

<body class="index-page sidebar-collapse">
 
  <div class="wrapper">
    <div class="page-header clear-filter" filter-color="orange">
      <div class="page-header-image" data-parallax="true" style="background-image:url('background.jpg');">
      </div>
      <div class="container">
        <div class="content-center brand">
          <img class="n-logo" src="logo.png" alt="">
          <h3 >Welcome to SJSU Market Place</h3>
          <h1 >Member Comapny's Products</h1>
        </div>
  
      </div>
    </div>
    <div class="main">
  
    
      <!-- End .section-navbars  -->
      <div class="section section-tabs">



<?php


$servername = $username = $password = $dbname ="";
$servername = "cmpe272.clauxrtatppm.us-west-1.rds.amazonaws.com";
$username = "cmpe272";
$password = "mysql123";
$dbname = "cmpe272";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT product_id, product_name, website_id, website, url, image FROM Product";
$result = $conn->query($sql);
$user = $_GET['user'];
$_SESSION["user"] = $user;
//echo $_SESSION["user"];
echo "<p><b> Logged in as : <font color='red'>".$user."</font><b></p>";
echo "<div class='text-center card-columns' >";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
              // echo "Email.: " . $row["product_id"]." - Cell Phone: " .$row["product_name"]. " - Name: " . $row["website_id"]. " " . $row["image"]. "<br>";
    

              echo "         <div class='col-md-12 ml-auto col-xl-6 mr-auto'>
              <!-- Tabs with Background on Card -->
              <div class='card'>
             <img src='./assets/img/". $row["image"]."' class='card-img-top' alt='Circle Image' height='220' width='200' >
                <div class='card-body'>
                <h4 class='card-title'>".$row["product_name"]."</h4>
                
                <p class='card-text'>Company: ".$row["website"]."</p>
                </div>
                <div class='card-footer'><a href='curl_product.php?id=". $row["url"]."&user=".$user."'><button class='btn btn-danger'>Click To View</button></a></div>
              </div>
              <!-- End Tabs on plain Card -->
            </div>";





    
              }
} else {
    echo "0 results";
}

echo "</div>";

$conn->close();
?>


      </div> 
      <!-- End Section Tabs -->

      

    
      <!--  end notifications -->
  
  
     
   
 
   
      
    </div>

    <!--  End Modal -->
    <footer class="footer" data-background-color="black">
      <div class=" container ">
        <nav>
          <ul>
            <li>
              <a href="https://www.divisha.site">
                Creative Team
              </a>
            </li>
            <li>
              <a href="https://www.divisha.site">
                About Us
              </a>
            </li>
            <li>
              <a href="https://www.divisha.site">
                Blog
              </a>
            </li>
          </ul>
        </nav>
        <div class="copyright" id="copyright">
          &copy;
          <script>
            document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
          </script>, Designed by
          272 takers. Coded by
          272 takers
        </div>
      </div>
    </footer>
  </div>
  <!--   Core JS Files   -->
  <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="./assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="./assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/now-ui-kit.js?v=1.3.0" type="text/javascript"></script>
  <script>
    $(document).ready(function() {
      // the body of this function is in assets/js/now-ui-kit.js
      nowuiKit.initSliders();
    });

    function scrollToDownload() {

      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }
  </script>
</body>

</html>