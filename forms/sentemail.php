<?php
header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With");
$dataform=$_POST['data'];


// $to = "thpapathanasiou@gmail.com";
//gil@gileaders.gr
$to = "christosbaztekas@gmail.com";
$subject = "Newsletter";
$message = "<br>Email: ";
$message .= $dataform[0]['value'];

$headers = "Content-Type: text/html; charset=UTF-8; ";


mail($to, $subject, $message, $headers);

?>