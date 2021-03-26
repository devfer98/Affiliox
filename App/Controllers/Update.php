<?php

namespace App\Controllers;
use Core\View;
use App\Models\BuyerM;
use App\Models\AdminM;
use App\Models\SellerM;
use App\Models\PromoterM;

class Update extends \Core\Controller {

    public function UpdateToDBAction(){
        
        $user = new AdminM();  

        $userID  	=$_POST['Username-field'];
        $name       =$_POST['fullname'];
        $aLine1	    =$_POST['aline1'];
        $aLine2     =$_POST['aline2'];	    
        $city       =$_POST['acity'];      	
        $country    =$_POST['country'];	
        $gender 	=$_POST['gender'];
        $status 	=$_POST['status'];
        $email  	=$_POST['email'];
        $phoneNo    =$_POST['phn-no'];		
        $position = $_POST['position'];

        if (($userID) && ($name) && ($aLine1) && ($aLine2) &&($city) && ($country) && ($gender) && ($status) && ($email) && ($phoneNo)) {
        
        }else{
            $State=0;
            $this->view->State = $State;
            $UImsg= 'Empty Entries Detected, Please Try Again !';
            $this->view->UImsg = $UImsg;
            $this->view->display('Admin/EditAdmin.php');
            exit;   
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $State=0;
            $this->view->State = $State;
            $UImsg= 'Email format invalid, Please Try Again !';
            $this->view->UImsg = $UImsg;
            $this->view->display('Admin/EditAdmin.php');
            exit;  
        }

        if (!preg_match("/^[a-zA-Z0-9]*$/",$userID)) {
            $State=0;
            $this->view->State = $State;
            $UImsg= 'Invalid Username Format, Please Try Again !';
            $this->view->UImsg = $UImsg;
            $this->view->display('Admin/EditAdmin.php');
            exit;  
        }
    }

    public function UpdateSuccessAction(){
        $this->view->display('Common/Adm_UpSuccess.php');
    }

    protected function before(){   
    if(session_id() == '') {
        session_start();
    }
}
}