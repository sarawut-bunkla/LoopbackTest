<?php
session_start();
$email = $_POST["text_email"] ;
$password = $_POST["text_password"];

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://203.157.168.91:8083/api/Users/login",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\"email\":\"$email\",\"password\":\"$password\"}", //******** */
  CURLOPT_HTTPHEADER => array(
    "Content-Type: application/json"
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
?>