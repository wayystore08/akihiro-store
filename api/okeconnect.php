<?php


$data = json_decode(
file_get_contents("php://input"),
true
);



$product = $data["product"];

$dest = $data["dest"];

$refID = $data["refID"];



// DATA RAHASIA OKECONNECT

$memberID = "OK1332825";

$pin = "2001";

$password = "wahyu080901";




// URL TRANSAKSI

$url = 
"https://h2h.okeconnect.com/trx?" .

"product=".$product .

"&dest=".$dest .

"&refID=".$refID .

"&memberID=".$memberID .

"&pin=".$pin .

"&password=".$password;



// kirim request

$response = file_get_contents($url);



// balikin respon ke website

echo $response;


?>
