<?php

namespace App\Controllers;
use Core\View;
use App\Models\User;


class Login extends \Core\Controller {

    public function indexAction(){
        // View::display('Common/Signin.php');
   
        $this->view->display('Common/Signin.php');

        

    }



    public function authAction(){
        $user = new User();
        $UImsg="Username or password incorrect!";
      
    
        $name       =$_POST['Username-field'];
        $password   =$_POST['Password-field'];	
        $pw_md5=md5($password);
       
               $result= $user->authenticate($name,$pw_md5);
                if($result==1){
                    header("Location:../Buyer/Market");
                }elseif ($result==2) {
                    header("Location:../Seller/accountIndex");
                }elseif ($result==3){
                    header("Location:../Promoter/Market");
                 }elseif ($result==4){
                    header("Location:../Admin/ApproveReg");
                }else{
                    $this->view->UImsg = $UImsg;
                    $this->view->display('Common/Signin.php');
                   
                }                   
       }

       function getCode($email) { 
               
        $ciphering = "AES-128-CTR"; 
        $iv_length = openssl_cipher_iv_length($ciphering); 
        $options = 0; 
        $encryption_iv = '1039485765431245'; 
          
        // Store the encryption key 
        $encryption_key = "ARKDUTHFBHWJXKFGKR"; 
          
        // Use openssl_encrypt() function to encrypt the data 
        $encryption = openssl_encrypt($email, $ciphering, 
                    $encryption_key, $options, $encryption_iv); 

        $link = "localhost/login/ResetPassword?".$encryption."";
          
        return $link;

        $decryption_iv = '1039485765431245'; 
          
        // Store the decryption key 
        $decryption_key = "ARKDUTHFBHWJXKFGKR"; 
          
        // Use openssl_decrypt() function to decrypt the data 
        $decryption=openssl_decrypt ($encryption, $ciphering,  
                $decryption_key, $options, $decryption_iv); 
          
        // Display the decrypted string 
        echo "Decrypted String: " . $decryption; 
     } 

     function Decode_getCode($code) { 
               
        $ciphering = "AES-128-CTR"; 
        $iv_length = openssl_cipher_iv_length($ciphering); 
        $options = 0; 
       
        $decryption_iv = '1039485765431245'; 
          
        // Store the decryption key 
        $decryption_key = "ARKDUTHFBHWJXKFGKR"; 
          
        // Use openssl_decrypt() function to decrypt the data 
        $decryption=openssl_decrypt ($code, $ciphering,  
                $decryption_key, $options, $decryption_iv); 
          
        // Display the decrypted string 
        return $decryption; 
     } 

    public function forgetAction(){

        if(isset($_POST['resetcode'])){
   
            $Email = $_POST['resetcode'];
            $user= new User();
            $result = $user->PW_EmailCompair($Email);

            if($result){
                $State=1;
                $code=$this->getCode($Email);
                echo $code;
                $UImsg ='Reset Code Has been Sent To Your Email-Address'; 
                $this->view->UImsg = $UImsg;
                $this->view->State = $State;
                $this->view->display('Common/PassResetcode.php');    
            }else{
                $State=0;
                $UImsg ='Email-Address Not Found In Our System'; 
                $this->view->UImsg = $UImsg;
                $this->view->State = $State;
                $this->view->display('Common/PassResetcode.php'); 
            }
           
         }else{
        
        $this->view->display('Common/PassResetcode.php');
        }
    }

    function urlpart($url){
        if($url != ''){
            $set=explode('&',$url,3);
            if(strpos($set[0], '=') === false){
                    $url =$set[1];
            }else{

                return false;
            }    
      }
        return $url;
    }


    public function ResetPassword(){
       if(isset($_POST['password'])){
            $pass=$_POST['password'];
            $url=$_SERVER['QUERY_STRING'];
            $code =$this->urlpart($url);
            $getEmail=$this->Decode_getCode($code);
            $user =new User();
            $result=$user->Emailcompair($getEmail,$pass);
            if($result){
                
                $State=1;
                $this->view->State = $State;
                $UImsg ='Successfull!! ,Please Login With your New Password'; 
                $this->view->UImsg = $UImsg;  
                echo "hi";
                $this->view->display('Common/PassReset.php');
            }else{
                $State=0;
                $this->view->State = $State;
                $UImsg ='Error Occured, Please Try Again From The Link Provided'; 
                $this->view->UImsg = $UImsg;  
                $this->view->display('Common/PassReset.php');
            }
        }else{
            $this->view->display('Common/PassReset.php');
        }
        
    }

    public function LogoutAction(){
        if(session_id() == '') {
            session_start();
        }
        unset($_SESSION['type']);
        unset($_SESSION['username']);

        if(session_id() != '') {
            session_destroy();
        }
        $this->view->display('Common/index.php');
    }



 }   