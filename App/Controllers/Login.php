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


        if (!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/",$password)) {

            $UImsg= 'Invalid password Format, Please Try Again !';
            $this->view->UImsg = $UImsg;
            $this->view->display('Common/Signin.php');
            exit;  
        }

        
        if (!preg_match("/^[a-zA-Z0-9]*$/",$name)) {

            $UImsg= 'Invalid Username Format, Please Try Again !';
            $this->view->UImsg = $UImsg;
            $this->view->display('Common/Signin.php');
            exit;  
        }
        $pw_md5=md5($password);
       
               $result= $user->authenticate($name,$pw_md5);
                if($result==1){
                    header("Location:../Buyer/Market");
                }elseif ($result==2) {
                    header("Location:../Seller/Market");
                }elseif ($result==3){
                    header("Location:../Promoter/Market");
                 }elseif ($result==4){
                    header("Location:../Admin/AdminDashboard");
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
     public function passwordResetMessage($code,$Email)
    {
        $subject = "Password Reset Code";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";   

        $headers .= '"From: Affiliox.xyz@gmail.com' . "\r\n";     

        
			$message = '<html><body>';

			$message .= '<table style="border-color: #666;" cellpadding="10">';
			$message .= "<tr style='background: #eee; font-size:30px'><td><strong>You have Resquested to Reset the Password</strong> </td></tr>";
			$message .= "<tr><td>To reset your password, click on this link (or copy and paste it into your browser):</td></tr>";
            $message .= "<tr><td><a href=$code>Reset code</a></td></tr>";
            $message .= "</table>";
			$message .= "<p>If you did not request to reset your password, simply disregard this email. No changes will be made to your account. Remember,This link contains the access to your account DO NOT share with others.</p>";
			$message .= "</body></html>";
			
            
        if (mail($Email,$subject,$message,$headers)) {
            return true;
        } else {
           return false;
        }
    }

    public function forgetAction(){

        if(isset($_POST['resetcode'])){
   
            $Email = $_POST['resetcode'];
            $user= new User();
            $result = $user->PW_EmailCompair($Email);

            if($result){
                $State= 1;
                $code=$this->getcode($Email);
                $mail=$this->passwordResetMessage($code,$Email);
                if($mail){
                    $UImsg ='Reset Code Has been Sent To Your Email-Address';
                }else{
                    $UImsg ='Error Occured While Sending the Email';
                }
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
                    // start_session();
                    // $_SESSION['code']=$url;
            }else{

                return false;
            }    
      }
        return $url;
    }


    public function ResetPassword(){
       if(isset($_POST['password'])){
            $pass=$_POST['password'];

            if (!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/",$pass)) {
                $State=0;
                $this->view->State = $State;
                $UImsg= 'Invalid password Format, Please Try Again !';
                $this->view->UImsg = $UImsg;
                $this->view->display('Common/PassReset.php');
                exit;  
            }

            
            $pass=md5($pass);
            
            $user =new User();
            $url=$_SERVER['QUERY_STRING'];
            $code =$this->urlpart($url);
            $getEmail=$this->Decode_getCode($code);
            $result=$user->Emailcompair($getEmail,$pass);
            if($result){
                
                $State=1;
                $this->view->State = $State;
                $UImsg ='Successfull!! ,Please Login With your New Password'; 
                $this->view->UImsg = $UImsg;  
                $this->view->display('Common/PassReset.php');
            }else{
                
                $State=0;
                $this->view->State = $State;
                $UImsg ='Error Occured, Please Try Again From The Link Provided'; 
                $this->view->UImsg = $UImsg;  
                $this->view->display('Common/PassReset.php');
            }
        }else{

            $url=$_SERVER['QUERY_STRING'];
            $code =$this->urlpart($url);
            $getEmail=$this->Decode_getCode($code);

            $user =new User();
            $result=$user-> PW_EmailCompair($getEmail);
                if($result){
                    $this->view->Code = $code;  
                    $this->view->display('Common/PassReset.php');

                }else{
                    header('Location:../login/index');
                }
            
        }
        
    }

    public function LogoutAction(){
        if(session_id() == '') {
            session_start();
        }
        unset($_SESSION['type']);
        unset($_SESSION['username']);
        if(isset($_SESSION['ministore'])){
            unset($_SESSION['ministore']);
        }

        if(session_id() != '') {
            session_destroy();
        }
        header('refresh:0; url=../');
       // $this->view->display('Common/index.php');
    }



 }   