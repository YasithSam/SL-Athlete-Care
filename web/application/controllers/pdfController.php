<?php

class pdfController extends main{
    public function __construct(){
        if($this->getSession('userId')){
            $this->redirect('accountController');
        }
        $this->helper("link");
    
        $this->accountModel = $this->model('accountModel');
    }

}