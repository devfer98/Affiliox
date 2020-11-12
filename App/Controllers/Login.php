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
                    
                    header("Location:../BuyerCon/accountIndex");
                }elseif ($result==2) {
                    header("Location:../SellerCon/accountIndex");
                }elseif ($result==3){
                    header("Location:../Promoter/Market");
                 }elseif ($result==4){
                    header("Location:../BuyerCon/accountIndex");
                }else{
                    $this->view->UImsg = $UImsg;
                    $this->view->display('Common/Signin.php');
                   
                }                   
       }

       public function forgetAction(){
       

        $this->view->display('Common/PassResetcode.php');

    }

    

    }   

