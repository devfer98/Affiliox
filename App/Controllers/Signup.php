<?php

namespace App\Controllers;
use Core\View;
use App\Models\BuyerM;
use App\Models\SellerM;
use App\Models\PromoterM;


class Signup extends \Core\Controller {

    public function createAction(){
       

        $this->view->display('Common/Account-Selectv2.php');

    }

    public function buyerAction(){
        $this->view->display('Common/CustomerReg.php');

    }

    public function sellerAction(){
        $this->view->display('Common/SellerReg.php');
    }

    public function promoterAction(){
        $this->view->display('Common/PromoterReg.php');
    }

    public function buyerToDBAction(){
        
        $user = new BuyerM();
        $userDob= $_POST['dob'];  
        $now = time();   
        $dob = strtotime($userDob); 
        $difference = $now - $dob;
        $age = floor($difference / 31556926);
        
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
        $password   =$_POST['Password-field'];	
        $con_password   =$_POST['Confirm-Password-field'];	
        $pw_md5 =md5($password);
 

        if (($userDob) && ($userID) && ($name) && ($aLine1) && ($aLine2) &&($city) && ($country) && ($gender) && ($status) && ($email) && ($phoneNo) && ($password)) {
        
        }else{
            $State=0;
            $this->view->State = $State;
            $UImsg= 'Empty Entries Detected, Please Try Again !';
            $this->view->UImsg = $UImsg;
            $this->view->display('Common/CustomerReg.php');
            exit;   
        }

        if($password != $con_password){
            $State=0;
            $this->view->State = $State;
            $UImsg= 'Password not matched, Please Try Again !';
            $this->view->UImsg = $UImsg;
            $this->view->display('Common/CustomerReg.php');
            exit;   
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $State=0;
            $this->view->State = $State;
            $UImsg= 'Email format invalid, Please Try Again !';
            $this->view->UImsg = $UImsg;
            $this->view->display('Common/CustomerReg.php');
            exit;  
        }

        if (!preg_match("/^[a-zA-Z0-9]*$/",$userID)) {
            $State=0;
            $this->view->State = $State;
            $UImsg= 'Invalid Username Format, Please Try Again !';
            $this->view->UImsg = $UImsg;
            $this->view->display('Common/CustomerReg.php');
            exit;  
        }


        if (!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/",$password)) {
            $State=0;
            $this->view->State = $State;
            $UImsg= 'Invalid password Format, Please Try Again !';
            $this->view->UImsg = $UImsg;
            $this->view->display('Common/CustomerReg.php');
            exit;  
        }

        $res =$user->EmailCompair($email,$userID);
            if($res==true){
                    $user->addBuyer($userID ,$name,$status,$email,$pw_md5,$phoneNo,$age,$userDob,$gender,$country,$city,$aLine1,$aLine2);
                    header('Location:../Signup/BuyerSuccess');
            }else{
                $UImsg= 'Username Or Emaill-Address Already Taken Please Try Again';
                $this->view->UImsg = $UImsg;
                $this->view->display('Common/CustomerReg.php');   
                    
                
                
            }	
    }

    public function sellerToDBAction(){
        
        $user = new SellerM();
        $userDob= $_POST['dob'];  
        $now = time();   
        $dob = strtotime($userDob); 
        $difference = $now - $dob;
        $age = floor($difference / 31556926);
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
        $storeName  =$_POST['store'];
        $password   =$_POST['Password-field'];	
        $con_password   =$_POST['Confirm-Password-field'];	
        $accStatus ='Pending';
        $wCount =0;
        $pw_md5 =md5($password);



        if (($userDob) && ($userID) && ($name) && ($aLine1) && ($aLine2) &&($city) && ($country) && ($gender) && ($status) && ($email) && ($phoneNo) && ($password) && ($storeName)) {
        
        }else{
            $State=0;
            $this->view->State = $State;
            $UImsg= 'Empty Entries Detected, Please Try Again !';
            $this->view->UImsg = $UImsg;
            $this->view->display('Common/SellerReg.php');
            exit;   
        }

        if($password != $con_password){
            $State=0;
            $this->view->State = $State;
            $UImsg= 'Password not matched, Please Try Again !';
            $this->view->UImsg = $UImsg;
            $this->view->display('Common/SellerReg.php');
            exit;   
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $State=0;
            $this->view->State = $State;
            $UImsg= 'Email format invalid, Please Try Again !';
            $this->view->UImsg = $UImsg;
            $this->view->display('Common/SellerReg.php');
            exit;  
        }

        if (!preg_match("/^[a-zA-Z0-9]*$/",$userID)) {
            $State=0;
            $this->view->State = $State;
            $UImsg= 'Invalid Username Format, Please Try Again !';
            $this->view->UImsg = $UImsg;
            $this->view->display('Common/SellerReg.php');
            exit;  
        }


        if (!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/",$password)) {
            $State=0;
            $this->view->State = $State;
            $UImsg= 'Invalid password Format, Please Try Again !';
            $this->view->UImsg = $UImsg;
            $this->view->display('Common/SellerReg.php');
            exit;  
        }

        $res =$user->EmailCompair($email,$userID);
            if($res==true){
                    $user->addSeller($userID ,$name,$status,$email,$pw_md5,$phoneNo,$age,$userDob,$gender,$country,$city,$aLine1,$aLine2,$storeName,$accStatus,$wCount);
                    header('Location:../Signup/SellerSuccess');
            }else{
                $State=0;
                $this->view->State = $State;
                $UImsg= 'Username Or Emaill-Address Already Taken Please Try Again';
                $this->view->UImsg = $UImsg;
                $this->view->display('Common/SellerReg.php');   
                    
                
                
            }	
          
    }

    public function promoterToDBAction(){
        
        $user = new PromoterM();
       
        $userDob= $_POST['dob'];  
        $now = time();   
        $dob = strtotime($userDob); 
        $difference = $now - $dob;
        $age = floor($difference / 31556926);
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
        $password   =$_POST['Password-field'];	
        $con_password   =$_POST['Confirm-Password-field'];	
        $accStatus ='Pending';
        $Chnnels = $_POST['description'];
        $arrs=explode(";",$Chnnels);
        $pw_md5 =md5($password);
        

        if (($userDob) && ($userID) && ($name) && ($aLine1) && ($aLine2) &&($city) && ($country) && ($gender) && ($status) && ($email) && ($phoneNo) && ($password) && ($Chnnels)) {
        
        }else{
            $State=0;
            $this->view->State = $State;
            $UImsg= 'Empty Entries Detected, Please Try Again !';
            $this->view->UImsg = $UImsg;
            $this->view->display('Common/PromoterReg.php');
            exit;   
        }

        if($password != $con_password){
            $State=0;
            $this->view->State = $State;
            $UImsg= 'Password not matched, Please Try Again !';
            $this->view->UImsg = $UImsg;
            $this->view->display('Common/PromoterReg.php');
            exit;   
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $State=0;
            $this->view->State = $State;
            $UImsg= 'Email format invalid, Please Try Again !';
            $this->view->UImsg = $UImsg;
            $this->view->display('Common/PromoterReg.php');
            exit;  
        }

        if (!preg_match("/^[a-zA-Z0-9]*$/",$userID)) {
            $State=0;
            $this->view->State = $State;
            $UImsg= 'Invalid Username Format, Please Try Again !';
            $this->view->UImsg = $UImsg;
            $this->view->display('Common/PromoterReg.php');
            exit;  
        }


        if (!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/",$password)) {
            $State=0;
            $this->view->State = $State;
            $UImsg= 'Invalid password Format, Please Try Again !';
            $this->view->UImsg = $UImsg;
            $this->view->display('Common/PromoterReg.php');
            exit;  
        }

        $res =$user->EmailCompair($email,$userID);
            if($res==true){
                    $user->addPromoter($userID ,$name,$status,$email,$pw_md5,$phoneNo,$age,$userDob,$gender,$country,$city,$aLine1,$aLine2,$accStatus,$arrs);
                    header('Location:../Signup/PromoterSuccess');
            }else{
                $UImsg= 'Username Or Emaill-Address Already Taken Please Try Again';
                $this->view->UImsg = $UImsg;
                $this->view->display('Common/PromoterReg.php');   
                    
                
                
            }	    
    }
  
    public function BuyerSuccessAction(){
        $this->view->display('Common/Cus_RegSuccess.php');
    }
    public function SellerSuccessAction(){
        $this->view->display('Common/SP-RegSuccess.php');
    }
    public function PromoterSuccessAction(){
        $this->view->display('Common/SP-RegSuccess.php');
    }

    protected function before()
    {   
        if(session_id() == '') {
            session_start();
        }

    }
}