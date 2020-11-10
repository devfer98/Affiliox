<?php

namespace App\Controllers;
use Core\View;
use App\Models\User;


class Login extends \Core\Controller {

    public function viewAction(){
        View::display('Common/Signin.php');

    }

    public function authAction(){
        $user = new User();
        $name       =$_POST['Username-field'];
        $password   =$_POST['Password-field'];	
        $pw_md5=md5($password);

               $result= $user->authenticate($name,$pw_md5);
                echo $result;
            
       }




    }   

