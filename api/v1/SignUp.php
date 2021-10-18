<?php
require_once '../../web/application/models/AthleteAPI.php';
$db=new AthleteAPI();
$response = array("error" => FALSE);
if (isset($_REQUEST['name']) && isset($_REQUEST['phone']) && isset($_REQUEST['password'])) {
    // receiving the post params
    $name = $_REQUEST['name'];
    $phone = $_REQUEST['phone'];
    $password = $_REQUEST['password'];
    if($db->validateUser($name,$password,$phone)){
        // check if user is already existed with the same email
        if ($db->checkUser($name,$phone)) {
            // user already existed
            $response["error"] = TRUE;
            $response["error_msg"] = "User already exist";
            echo json_encode($response);
        } else {
            // create a new user

            $user = $db->addUser($name,$password,$phone);
          
            if ($user) {
                // user stored successfully
                /*$response["error"] = FALSE;
                $response["message"]="User added";*/
                echo ("Success");
            } else {
                // user failed to store
                $response["error"] = TRUE;
                $response["error_msg"] = "Unknown error occurred in registration!";
                echo json_encode($response);
            }
        }

    }
    else{
        $response["error"]=TRUE;
        $response["error_msg"]="Invalid details";
        echo json_encode($response);
    }

} else {
    $response["error"] = TRUE;
    $response["error_msg"] = "Required parameters (name, phone or password) is missing!";
    echo json_encode($response);
}







