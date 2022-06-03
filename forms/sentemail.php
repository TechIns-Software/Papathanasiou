<?php

$dataform=$_POST['data'];


// $to = "thpapathanasiou@gmail.com";
$to = "gil@gileaders.gr";
$subject = "Newsletter";
$message .= "<br>Email: ";
$message .= $dataform[0]['value'];

$headers = "Content-Type: text/html; charset=UTF-8; ";


mail($to, $subject, $message, $headers);

?>