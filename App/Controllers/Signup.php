<?php
namespace App\Controllers;
use Core\View;
require_once("../Models/Buyer.php");

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

       
            if((EmailCompair($email))|| (NameCompair($userID)) ){
                if($password == $con_password){
                    addUserDB($userID ,$name,$$aLine1,$aLine2,$city,$country,$gender,$status,$email,$phoneNo,$password);
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