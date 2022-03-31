<?php

use Dotenv\Dotenv as Dot;

require_once "../../web/vendor/autoload.php";
require_once '../../web/application/models/forumModel.php';

$db=new forumModel();
$id=$_REQUEST['id'];
$data=$db->updateForumbyId($id,1);
$e=$data[0];
$d=$data[1];
$n=$data[2];  
$dotenv = Dot::createMutable(__DIR__);
$dotenv->load();
$apiKey=getenv('SENDGRID_API_KEY');
$email= new \SendGrid\Mail\Mail();
$email->setFrom("elimoitsolutions@gmail.com", "Admin User");
$email->setSubject("Your injury request has accepeted!");
$email->addTo("yasith.sam7@gmail.com", "Admin User - SL Athlete Care");
$email->addContent("text/plain", "Your request for injury has accepeted");
$email->addContent(
    "text/html", "<strong>Dear Patient,<br> Your request for the injury has been accepted and please view following details to get to know about the doctor. <br></strong> <ol> <li> Name :".$n."<li> Email: ".$e."</li>"
);

$sendgrid = new \SendGrid($apiKey);
try {
 $response = $sendgrid->send($email);
 
  header("location:" . BASEURL . "/forumController",true,303);
} catch (Exception $j) {
    echo 'Caught exception: '. $j ."\n";
}       


// echo "export SENDGRID_API_KEY='YOUR_API_KEY'" > sendgrid.env
// echo "sendgrid.env" >> .gitignore
// source ./sendgrid.env
         
