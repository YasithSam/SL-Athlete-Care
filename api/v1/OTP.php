<?php
// Send an SMS using Twilio's REST API and PHP
use Twilio\Rest\Client;
require_once "../../vendor/autoload.php";
require_once "../../application/models/AthleteAPI.php";
$phone=$_REQUEST['phone'];
$username=$_REQUEST['name'];
$account_sid = "ACac384855d9a7ccdbeb05c48fca145396";
$auth_token = "21d5e4a703e08183b3fcd7380e77435d";
$twilio_phone_number = "+15709894946";
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










