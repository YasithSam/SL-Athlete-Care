<?php
require_once '../../application/models/AthleteAPI.php';
$db=new AthleteAPI();
$response = array("error" => FALSE);
if (isset($_REQUEST['name']) && isset($_REQUEST['phone']) && isset($_REQUEST['password'])) {
    $name=$_REQUEST['name'];
    $phone=$_REQUEST['phone'];
    $password=$_REQUEST['password'];
    if($db->validateUser($name,$password,$phone)) {
        if ($db->checkUser($name, $phone)) {
            // user already existed
            $response["error"] = TRUE;
            $response["error_msg"] = "User already exist";
            echo json_encode($response);
        } else {

        }
    } else{
        $response["error"]=TRUE;
        $response["error_msg"]="Invalid details";
        echo json_encode($response);
    }
}