<?php

namespace App\Controllers;
use Core\View;
use App\Models\Buyer;
use App\Models\Seller;
use App\Models\Promoter;


class Signup extends \Core\Controller {

    public function buyerAction(){
        View::display('Common/CustomerReg.php');

    }

    public function sellerAction(){
        View::display('Common/SelllerReg.php');
    }

    public function addAction(){
        echo 'Admin add method is called';
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
        
            if($user->EmailCompair($email) ){
                    $user->addBuyer($userID ,$name,$status,$email,$pw_md5,$phoneNo,$age,$userDob,$gender,$country,$city,$aLine1,$aLine2);
                    echo "Success";
            }else{
                echo "User already exist";
            }	
        header('');
        exit;
    }

    public function sellerToDBAction(){
        $seller = new Seller();
        $status = $seller->addSeller('dilshan98', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ');
        if($status){
            echo "Success";
        }else{
            echo "Unsuccessful";
        }
    }

    public function promoterToDBAction(){
        $promoter = new Promoter();
        $status = $promoter->addPromoter('dilshan98', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ');
        if($status){
            echo "Success";
        }else{
            echo "Unsuccessful";
        }
    }
}