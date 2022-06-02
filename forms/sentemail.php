<?php

$dataform=$_POST['data'];


$to = "thpapathanasiou@gmail.com";
$to = "nickspanosf1@gmail.com";
$subject = "Newsletter";
$message .= "<br>Email: ";
$message .= $dataform[0]['value'];

// $headers = "Content-Type: text/html; charset=UTF-8; ";
$headers = "From: nspanos@insurance-agent-tools.com";

mail($to, $subject, $message, $headers);

?>