<?php

namespace App\Controllers;
use Core\View;
use App\Models;


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

        
            if(EmailCompair($email) ){
                if($password == $con_password){
                    $user->addBuyer($userID ,$name,$status,$email,$password,$phoneNo,$age,$dob,$gender,$country,$city,$aLine1,$aLine2);
                }else{
                    echo("Password Mismatched");
                }
            }else{
                echo "User already exist";
            }	
        header('');
        exit;

    }
}