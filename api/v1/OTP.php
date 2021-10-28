<?php
// Send an SMS using Twilio's REST API and PHP
use Twilio\Rest\Client;
require_once "../../web/vendor/autoload.php";
require_once "../../web/application/models/AthleteAPI.php";
$phone=$_REQUEST['phone'];
$username=$_REQUEST['name'];
$account_sid = "AC6690c2afb7b6168604e7e4c8f5bd985b";
$auth_token = "f054fc4e5b222014ee767a9e48923c28";
$twilio_phone_number = "+18482891989";
$athlete=new AthleteAPI();
$athlete->checkUser($username,$phone);
if($athlete){
    $client = new Client($account_sid, $auth_token);
    $Code= strval(rand(100000, 999999));
    $phone='+94'.$phone;
    $message=$client->messages->create(
        $phone,
        array(
            "from" => $twilio_phone_number,
            "body" => "Your OTP code for SL Athlete Care is". $Code
        )
    );

    echo ($Code);

}
else{
    echo "Exists";

}










