<?php
class commonController extends main{
    public function __construct(){
        if(!$this->getSession('userId')){
            $this->redirect('accountController');
        }

        $this->helper("link");
    
        $this->accountModel = $this->model('accountModel');

    }

    public function settings(){
        
        $this->view('settings');

    }
    public function privacy(){
        $this->view('support');

    }
    public function help(){
        $this->view('help');

    }
  


}


?>