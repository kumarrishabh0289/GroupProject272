<?php
$url = "http://suyashsjsu.xyz/updateProductViews.php?website_id=". $_POST['website_id'] ."&product_id=". $_POST['product_id'];
print_r($url);
$ch = curl_init($url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);
$data = json_decode($result, true);


header('Content-type: application/json');
echo json_encode( $data );