<?php

class admin extends main{
    public function __construct(){
        if(!($this->getSession('userId'))){
            $this->redirect("accountController");
        }
        $this->helper("link");
    
        $this->adminModel = $this->model('adminModel');

    }
    public function index(){
        $userId = $this->getSession('userId');
        if($this->getSession('userRole')==1){
            
           // $data = $this->profileModel->getData($userId);
            $this->view("admin/home");
              
        }
        else{
            $this->view('404');
        }
    }
    public function register(){
       if($this->getSession('userRole')==1){
         $this->view('admin/reg');
       } 
       else{
        $this->view('404');
    } 
    }
    public function casestudy(){
        if($this->getSession('userRole')==1){
          $this->view('admin/casestudy');
        }  
        else{
            $this->view('404');
        }
    }
    public function notices(){
        if($this->getSession('userRole')==1){
          $this->view('admin/notices');
        }  
        else{
            $this->view('404');
        }
    }
    public function users(){
        if($this->getSession('userRole')==1){
          $this->view('admin/users');
        }  
        else{
            $this->view('404');
        }
    }
    public function articles(){
        if($this->getSession('userRole')==1){
          $this->view('admin/articles');
        }  
        else{
            $this->view('404');
        }
    }
    public function comments(){
        if($this->getSession('userRole')==1){
          $this->view('admin/comments');
        }  
        else{
            $this->view('404');
        }
    }
    public function profile(){
        if($this->getSession('userRole')==1){
           $this->view('admin/casestudy');
        }  
        else{
            $this->view('404');
        } 
    }
    public function settings(){
        if($this->getSession('userRole')==1){ 
          $this->view('admin/casestudy');
        }  
        else{
            $this->view('404');
        }
    }
    public function registerDoc(){
       
        $userData = [

            'fullName'        => $this->input('fullName'),
            'email'           => $this->input('email'),
            'username'        => $this->input('username'),
            'password'        => $this->input('password'),
            'nic'             => $this->input('nic'),
            'gender'          => $this->input('gender'),
            'hospital'        => $this->input('hospital'),
            'doctorId'        => $this->input('doctorId'),
            'province'        => $this->input('province'),
            'district'        => $this->input('district'),
            'fullNameError'   => '',
            'emailError'      => '',
            'usernameError'   => '' ,
            'passowrdError'   => '',
            'nicError'      => '',
            'genderError'   => '' ,
            'hospitalError'   => '',
            'doctorIdError'      => '',
            'provinceError'   => '' ,
            'districtError'   => '' ,
            'otherError'=>'',
   
        ];
        
          $userData=$this->validateUser($userData);    
     
        
           if(empty($userData['fullNameError']) && empty($userData['emailError']) && empty($userData['passwordError'])
           && empty($userData['usernameError']) && empty($userData['nicError']) && empty($userData['genderError'])
           && empty($userData['hospitalError']) && empty($userData['doctorError']) && empty($userData['provinceError'])
           && empty($userData['districtError']))
           {   
               if($this->adminModel->createAccountDoctor($userData)){
                   $this->redirect('admin');
                
                }
                else{
                    $userData['otherError']="Couldn't register the user";
                    $this->view('admin/reg');
                     
                }
   
           } else {
              
               $this->view('admin/reg',$userData);
              
           }
   
       
    }
    public function regPara(){

    }
    public function validateUser($userData){

        foreach($userData as $key => $value) {
            $userData[$key]=$this->commonValidate($value);
        }
       
        if(empty($userData['fullName'])){
            $userData['fullNameError'] = 'Full Name is required';

        }

        if(empty($userData['email'])){
            $userData['emailError'] = 'Email is required';
        } else {
            // if(!$this->accountModel->checkEmail($userData['email'])){
            //  $userData['emailError'] = "Sorry this email is already exist";

            // }
        }
        if(empty($userData['username'])){
            $userData['usernameError'] = 'Username is required';
        } else {
            // if(!$this->accountModel->checkEmail($userData['email'])){
            //  $userData['usernameError'] = "Sorry this username is already exist";

            // }
        }
        if(empty($userData['password'])){
            $userData['passwordError'] = "Password is required";
        } else if(strlen($userData['password']) < 6 ){
            $userData['passwordError'] = "Passowrd must be 5 characters long";
        }

        if(empty($userData['nic'])){
            $userData['nicError'] = 'NIC is required';
        } else {
            // if(!$this->accountModel->checkEmail($userData['email'])){
            //  $userData['nicError'] = "Sorry there is an already existing user with this nic";

            // }
        }
        if(empty($userData['gender'])){
            $userData['genderError'] = 'Gender is required';
        } 
        if(empty($userData['hospital'])){
            $userData['hospitalError'] = 'Hospital is required';
        } 
        if(empty($userData['doctorId'])){
            $userData['doctorIdError'] = 'Doctor Id is required';
        } 
        if(empty($userData['province'])){
            $userData['provinceError'] = 'Province is required';
        } 
        return $userData;

       
    }
    public function commonValidate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;

    }
    
    
    

}
?>    