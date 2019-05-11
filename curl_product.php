<?php
error_reporting(0);
//$url = "http://pratibimb.studio/".$_GET['id'];
$url= $_GET['id'];
echo "Logged In As: ";
$ch = curl_init($url);
$fp = fopen("response.txt", "w");
$user = $_GET['user'];
echo $user;
curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);

curl_exec($ch);
curl_close($ch);
fclose($fp);

$myfile = fopen("response.txt", "r");
echo fread($myfile,filesize("response.txt"));
fclose($myfile);

?>

<!-- Font Awesome Icon Library -->

<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="theme-color" content="#000000">
  <!--
      manifest.json provides metadata used when your web app is added to the
      homescreen on Android. See https://developers.google.com/web/fundamentals/engage-and-retain/web-app-manifest/
    -->
  <link rel="manifest" href="%PUBLIC_URL%/manifest.json">
  <link rel="shortcut icon" href="%PUBLIC_URL%/favicon.ico">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>
.checked {
  color: orange;
}
</style>
<script>
function updateRating(x) {
			console.log(`x = ${x}`);
            
			$.ajax({
          		type: "POST",
          		url: "productReview.php",
          		data: {website_id:4, product_id: 6, rating:x, review: "Nice", user_id:1},
          		dataType:'JSON', 
          		success: function(response){
              		console.log(response);
              		if(response.success) {
                 		
              		}
          		}
      		});
			for(let i = 1; i <= x; i++){
    			document.getElementById(i).classList.add('checked');
    		}
    		for(let i = x+1; i <= 5; i++){
    			document.getElementById(i).classList.remove('checked');
    		}
	}
</script>
   <body>
	   <div class="container">
		   <div>
   <h2>Star Rating</h2>
<span class="fa fa-star" id="1" value ="1" onClick="updateRating(1)"></span>
<span class="fa fa-star" id="2" value ="1" onClick="updateRating(2)"></span>
<span class="fa fa-star" id="3" value ="1" onClick="updateRating(3)"></span>
<span class="fa fa-star" id="4" value ="1" onClick="updateRating(4)"></span>
<span class="fa fa-star" id="5" value ="1" onClick="updateRating(5)"></span>   
   
  </div>
<br>
<a href=<?php echo $url."?user=".$user; ?>><button class="btn btn-danger">Go To Parent Company's Product</button></a>

</div>

</body>


