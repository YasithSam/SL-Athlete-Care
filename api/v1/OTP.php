<?php
// Send an SMS using Twilio's REST API and PHP
use Twilio\Rest\Client;
require_once "../../web/vendor/autoload.php";
require_once "../../web/application/models/AthleteAPI.php";
$phone=$_REQUEST['phone'];
$username=$_REQUEST['name'];
$account_sid = //account id;
$auth_token = //token;
$twilio_phone_number = //tel;
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










