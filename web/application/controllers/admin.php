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
            $data = $this->adminModel->getCounts();
            $data = array("patients"=>$data[0]->c1, "casestudies"=>$data[1]->c1, "post"=>$data[2]->c1); 
            $data2 = $this->adminModel->getuserName($userId);
            $this->view("admin/home",[$data,$data2]);
              
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
        $userId = $this->getSession('userId');
        $c=$this->input('id');
        if($this->getSession('userRole')==1){
          $data=$this->adminModel->getCasestudy($c);
          $data2=$this->adminModel->getCount4();
          $data3 = $this->adminModel->getuserName($userId);
          $this->view('admin/casestudy',[$data,$data2,$c,$data3]);
        }  
        else{
            $this->view('404');
        }
    }
    public function notices(){
        if($this->getSession('userRole')==1){
            $data=$this->adminModel->getNotices();
            $this->view('admin/notices',$data);
        }  
        else{
            $this->view('404');
        }
    }
    public function addnotice(){
        if($this->getSession('userRole')==1){
            $this->view('admin/addnotice');
        }
        else{
            $this->view('404');
        }
    }
    public function addnewnotice(){
        $userid = $this->getSession('userId');
        $type = 1;
        $userData = [
            'heading'        => $this->input('heading'),
            'content'           => $this->input('content'),
            'userid' => $userid,
            'type' => $type,
        ];
        
        if($this->adminModel->createNotice($userData)){
            $this->setFlash('addnot', 'Notice added successfully!');
            $this->redirect('admin/notices');
         }
        else {
        $this->view('admin/addnotice',$userData);
        }
    }

    public function deleteNotice($id)
    {
        if($this->adminModel->deleteNotice($id)){
            $this->setFlash('dltnot', 'Article deleted successfully!');
            $this->redirect('admin/notices');
          }  
          else{
              $this->view('admin/notices');
          } 
    }

    
    public function users(){
        $userId = $this->getSession('userId');
        $c=$this->input('id');
        if($this->getSession('userRole')==1){
          $data=$this->adminModel->getUsers($c);
          $data2=$this->adminModel->getCount();
          $this->view('admin/users',[$data,$data2,$c]);
        }  
        else{
            $this->view('404');
        }
    }

    public function articles(){
        $userId = $this->getSession('userId');
        $c=$this->input('id');
        if($this->getSession('userRole')==1){
          $data=$this->adminModel->getArticles($c);
          $data1=$this->adminModel->getReviewers();
          $data2=$this->adminModel->getCount2();
          $data3 = $this->adminModel->getuserName($userId);
          $this->view('admin/articles',[$data,$data2,$c,$data3,$data1]);
        }  
        else{
            $this->view('404');
        }
    }
    public function assignReviewer(){
        $data = [

            'doctorid'  => $this->input('doctor'),
            'postid' => $this->input('postid'),
        ];
       
        if($this->adminModel->setReviewer($data)){
            
            $this->redirect('admin/articles');
         }
        else {
        $this->view('admin/articles');
        }
    } 
    
    public function articleapprove(){
        $id=$this->input('id');
        if($this->getSession('userRole')==1){
        if ($this->adminModel->articleapprove($id)){
          $this->setFlash('approveart', 'Article approved!');
          $this->redirect('admin/articles');
        } 
        } 
        else{
            $this->view('admin/articles');
        }
    }
    public function articlereject(){
        $id=$this->input('postid');
        $r=$this->input('feedback');
        if($this->getSession('userRole')==1){
        if ($this->adminModel->articlereject($id,$r)){
          $this->setFlash('rejecteart', 'Article removed!');
          $this->redirect('admin/articles');
        } 
        } 
        else{
            $this->view('admin/articles');
        }
    }

    public function comments(){
        $userId = $this->getSession('userId');
        $c=$this->input('id');
        if($this->getSession('userRole')==1){
            $data=$this->adminModel->getComments($c);
            $data2=$this->adminModel->getCount3();
            $data3 = $this->adminModel->getuserName($userId);
          $this->view('admin/comments',[$data,$data2,$c,$data3]);
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
            'gender'          => $this->input('gender'),
            'hospital'        => $this->input('hospital'),
            'doctorId'        => $this->input('doctorId'),
            'province'        => $this->input('province'),
            'district'        => $this->input('district'),
            'fullNameError'   => '',
            'emailError'      => '',
            'usernameError'   => '' ,
            'passowrdError'   => '',
            'genderError'     => '' ,
            'hospitalError'   => '',
            'doctorIdError'   => '',
            'provinceError'   => '' ,
            'districtError'   => '' ,
            'otherError'      =>'',
   
        ];
        
          $userData=$this->validateUser($userData);    
     
        
           if(empty($userData['fullNameError']) && empty($userData['emailError']) && empty($userData['passwordError'])
           && empty($userData['usernameError'])  && empty($userData['genderError'])
           && empty($userData['hospitalError']) && empty($userData['doctorIdError']) && empty($userData['provinceError'])
           && empty($userData['districtError']))
           {   
               if($this->adminModel->createAccountDoctor($userData)){
                   $this->setFlash('docreg', 'Doctor registered successfully!');
                   $this->redirect('admin/home');
                
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
       
        $userData = [

            'fullName'        => $this->input('fullName'),
            'email'           => $this->input('email'),
            'para'            => $this->input('para'),
            'username'        => $this->input('username'),
            'password'        => $this->input('password'),
            'gender'          => $this->input('gender'),
            'hospital'        => $this->input('hospital'),
            'doctorId'        => $this->input('doctorId'),
            'province'        => $this->input('province'),
            'district'        => $this->input('district'),
            'fullNameError'   => '',
            'emailError'      => '',
            'paraError'       => '',
            'usernameError'   => '' ,
            'passowrdError'   => '',
            'genderError'     => '' ,
            'hospitalError'   => '',
            'doctorIdError'   => '',
            'provinceError'   => '' ,
            'districtError'   => '' ,
            'otherError'      =>'',
   
        ];
        
        $userData=$this->validateUser($userData);    
     
        
           if(empty($userData['fullNameError']) && empty($userData['emailError']) && empty($userData['paraError']) 
           && empty($userData['passwordError']) && empty($userData['usernameError']) 
           && empty($userData['genderError']) && empty($userData['hospitalError']) && empty($userData['doctorIdError']) 
           && empty($userData['provinceError']) && empty($userData['districtError']))
           {   
               if($this->adminModel->createAccountPara($userData)){
                   $this->setFlash('parareg', 'Paramedical user registered successfully!');
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
        if(empty($userData['para'])){
            $userData['paraError'] = 'Paramedical User Type is required';

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

/*     public function userName(){
        $id=$this->getSession('userId');
        if($this->getSession('userRole')==1){
            $data=$this->adminModel->getuserName($id);
            $this->view('admin/header',$data);
        }  
        else{
            $this->view('404');
        }
    }
 */
    

}
?>    