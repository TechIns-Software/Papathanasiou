<?php

$dataform=$_POST['data'];


$to = "nickspanosf1@gmail.com";
$to = "thpapathanasiou@gmail.com";
$subject = "Newsletter";
$message .= "<br>Email: ";
$message .= urldecode(urldecode($dataform[0]['value']));

$headers = "Content-Type: text/html; charset=UTF-8; ";

mail($to, $subject, $message, $headers);

?>