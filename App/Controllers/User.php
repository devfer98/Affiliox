<?php
namespace App\Controllers;
use Core\View;
class User extends \Core\Controller{

    public function indexAction(){
       $this->view->display('Common/index.php');
    }
    public function Error4(){
        $this->view->display('Common/E404.php');
     }
    // public function PasswordResetAction(){
    //     $Email = $_POST['email'];
    //     $user= new User();
    //     $result = $user->Email($userID);
        
    //  }
    
    public function get(){
        echo "get method is called";
        echo'<pre>';
        echo htmlspecialchars(print_r($_GET, true));
        echo'</pre>';
    }

    public function MarketAction(){
        $this->view->display('Customer/market.php');
    }

    public function ShoppingCartAction(){
        $this->view->display('Customer/ShoppingCart.php');
    }


    public function ProductAction()
    {
       $this->view->display('Customer/productDetails.php');
    }

    
    public function AboutUSAction(){
        $this->view->display('Common/AboutUs.php');
    }
    public function HelpAction(){
        $this->view->display('Common/ContactUs.php');
    }


    public function AccountAction(){
        echo 'add method is called';
    }

    public function FacebookAction(){
        echo 'add method is called';
    }

    protected function before()
    {   
        if(session_id() == '') {
            session_start();
        }

    }


}