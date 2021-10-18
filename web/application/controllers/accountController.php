<?php

class accountController extends main{
    public function __construct(){
        if($this->getSession('userId')){
            $this->redirectFunc($this->getSession('userRole'));
        }
        $this->helper("link");
    
        $this->accountModel = $this->model('accountModel');

    }
    public function index(){
        $this->view("login");
    }
    public function userLogin(){
        $userData = [

         'username'         => $this->input('username'),
         'password'      => $this->input('password'),
         'usernameError'    => '',
         'passwordError' => ''

        ];

        if(empty($userData['username'])){
            $userData['usernameError'] = "Username is required";
        }

        if(empty($userData['password'])){
            $userData['passwordError'] = "Password is required";
        }

        if(empty($userData['usernameError']) && empty($userData['passwordError'])){
         
            $result = $this->accountModel->loginUser($userData['username'], $userData['password']);
          
            if($result['status'] === 'usernameNotFound'){
                $userData['usernameError'] = "Sorry invalid username";
                $this->view("login", $userData);
            } else if($result['status'] === 'passwordNotMatched'){
                $userData['passwordError'] = "Sorry invalid password";
                $this->view("login", $userData);
            } else if($result['status'] === "ok"){
                $this->setSession("userId", $result['uuid']);
                $this->setSession("userRole", $result['role']);
                $this->redirectFunc($result['role']);
                
            }
        } else {
            $this->view("login", $userData);
        }

    }

    public function redirectFunc($role){  
        switch($role){
            case 1:
                $this->redirect('admin');
                break;
            case 2:
                $this->redirect('doctor/dashboard');
                break;
                
            case 3:
                $this->redirect('paramedical');
                break;

            default:
                $this->redirect('accountController');
                 
                   
        }


    }
    public function logout(){
        unset($_SESSION["userId"]);
        unset($_SESSION["userRole"]);
        header("location:" . BASEURL . "/"."accountController/index");
 
    }
   




}


?>