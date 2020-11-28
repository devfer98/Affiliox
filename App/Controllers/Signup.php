<?php

namespace App\Controllers;
use Core\View;
use App\Models\BuyerM;
use App\Models\Seller;
use App\Models\Promoter;


class Signup extends \Core\Controller {

    public function createAction(){
       

        $this->view->display('Common/Account-Selectv2.php');

    }

    public function buyerAction(){
        $this->view->display('Common/CustomerReg.php');

    }

    public function sellerAction(){
        View::display('Common/SelllerReg.php');
    }

    public function promoterAction(){
        $this->view->display('Common/PromoterReg.php');
    }

    public function buyerToDBAction(){
        
        $user = new Buyer();
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
        if($password != $con_password){

        }
        $res =$user->EmailCompair($email,$userID);
            if($res==true){
                    $user->addBuyer($userID ,$name,$status,$email,$pw_md5,$phoneNo,$age,$userDob,$gender,$country,$city,$aLine1,$aLine2);
                    header('Location:../Signup/BuyerSuccess');
            }else{
                $UImsg= 'Username Or Emaill-Address Already Taken Please Try Again';
                $this->view->UImsg = $UImsg;
                $this->view->display('Common/CustomerReg.php');   
                    
                echo "User already exist";
                
            }	
    }

    public function sellerToDBAction(){
        
        $user = new Seller();
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


        if($password != $con_password){
            
        }
        $res =$user->EmailCompair($email,$userID);
            if($res==true){
                    $user->addSeller($userID ,$name,$status,$email,$pw_md5,$phoneNo,$age,$userDob,$gender,$country,$city,$aLine1,$aLine2,$storeName,$accStatus,$wCount);
                    header('Location:../Signup/SellerSuccess');
            }else{
                $UImsg= 'Username Or Emaill-Address Already Taken Please Try Again';
                $this->view->UImsg = $UImsg;
                $this->view->display('Common/SellerReg.php');   
                    
                echo "User already exist";
                
            }	
          
    }

    public function promoterToDBAction(){
        
        $user = new Promoter();
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
        if($password != $con_password){

        }

        $res =$user->EmailCompair($email,$userID);
            if($res==true){
                    $user->addPromoter($userID ,$name,$status,$email,$pw_md5,$phoneNo,$age,$userDob,$gender,$country,$city,$aLine1,$aLine2,$accStatus,$arrs);
                    header('Location:../Signup/PromoterSuccess');
            }else{
                $UImsg= 'Username Or Emaill-Address Already Taken Please Try Again';
                $this->view->UImsg = $UImsg;
                $this->view->display('Common/PromoterReg.php');   
                    
                echo "User already exist";
                
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