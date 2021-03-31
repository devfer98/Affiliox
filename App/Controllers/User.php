<?php

namespace App\Controllers;

use App\Models\User as ModelsUser;
use App\Models\BuyerM as ModelsBuyerM;
use App\Models\Product as ModelsProduct;
use Core\View;

class User extends \Core\Controller
{


    public function indexAction() {
        $latest = new ModelsUser();
        $featured = new ModelsUser();
        $result1 = $latest->getMarketLatestProduct();
        $result2 = $featured->getMarketFeaturedProduct();

        if($result1 && $result2 == null) {
            $empty= "Still there are no Products in store!";
            $this->view->empty=$empty;
            $this->view->display('Common/index.php');
        } else {
            $UImsg1 = $result1;
            $UImsg2 = $result2;
            $this->view->UImsg1=$UImsg1;
            $this->view->UImsg2=$UImsg2;
            $this->view->display('Common/index.php');
        }
        
    }
    

    public function Error4Action()
    {
        $this->view->display('Common/E404.php');
    }
    // public function PasswordResetAction(){
    //     $Email = $_POST['email'];
    //     $user= new User();
    //     $result = $user->Email($userID);

    //  }

    public function get()
    {
        echo "get method is called";
        echo '<pre>';
        echo htmlspecialchars(print_r($_GET, true));
        echo '</pre>';
    }



    public function MarketSearchAction()
    {
        if (!empty($_GET['search'])) {
            $name = $_GET['search'];
        } else {
            $name = 'AllProducts';
        }
        $prod = new ModelsUser;
        $UImsg = $prod->listProducts($name);
        
        $this->view->UImsg = $UImsg;
        $this->view->display('Customer/market.php');
    }
    public function MarketCATAction()
    {

        $name = $_GET['cat'];
        $prod = new ModelsUser;
        $UImsg = $prod->listCATProducts($name);
        $this->view->UImsg = $UImsg;
        $this->view->display('Customer/market.php');
    }
    public function Market_catsearch_Action()
    {

        $name = $_GET['search'];
        $cat = $_GET['cat'];
        $prod = new ModelsUser;
        $UImsg = $prod->listCAT_Search_Products($name, $cat);
        $this->view->UImsg = $UImsg;
        $this->view->display('Customer/market.php');
    }
    public function MarketAction()
    {


        if (empty($_GET['search']) && empty($_GET['cat'])) {
            $this->MarketSearchAction();
            exit;
        } elseif (!empty($_GET['search']) && empty($_GET['cat'])) {

            $this->MarketSearchAction();
        } elseif (empty($_GET['search']) && !empty($_GET['cat'])) {

            $this->MarketCATAction();
        } else {

            $this->Market_catsearch_Action();
        }
    }
    private function calculateTot()
    {
        $buy = new ModelsBuyerM;
        $value =  (!empty($_COOKIE["items"])) ? $_COOKIE["items"] : "[]";
        $value = json_decode($value, true);
        $UImsg = $buy->total_cal($value);
        return $UImsg;
    }
    public function viewCartitemAction()
    {
    }

    public function ADDShoppingCartAction()
    {
        $flag = 0;
        if (!empty($_POST['productID'])) {
            $quantity = $_POST["quantity"];
            $productCode = $_POST["productID"];
            $new_cart = array();
            $value =  (!empty($_COOKIE["items"])) ? $_COOKIE["items"] : "[]";
            $value = json_decode($value);
            
            foreach ($value as $c) {  
                if ($c->ID != $productCode) {
                    array_push($new_cart, $c);
                } else {
                   
                    $flag = 1;
                    $val = $c->Q;
                    array_push($new_cart, array(
                        "ID" => $productCode,
                        "Q" => $quantity + $val
                    ));
                }
            }
            if($flag == 0){
                array_push($new_cart, array(
                    "ID" => $productCode,
                    "Q" => $quantity ));
            }

            setcookie("items", json_encode($new_cart), time() + (86400 * 30 * 12), "/");
            header("Location:../user/AddShoppingCart");
             
            }
        
            $UItotal = $this->calculateTot();
            $this->view->UItotal = $UItotal;
            $this->view->display('Customer/ShoppingCart.php');
        
    }
    public function deleteShoppingCart()
    {
        $id = $_GET['id'];
        $value =  (!empty($_COOKIE["items"])) ? $_COOKIE["items"] : "[]";
        $value = json_decode($value);
        $new_cart = array();
        foreach ($value as $c) {
            if ($c->ID != $id) {
                array_push($new_cart, $c);
            }
        }

        setcookie("items", json_encode($new_cart), time() + (86400 * 30 * 12), "/");
        header("Location:../user/ADDShoppingCart");
    }

    public function ProductAction()
    {

        $this->view->display('Customer/productDetails.php');
    }


    public function AboutUSAction()
    {
        $this->view->display('Common/AboutUs.php');
    }

    public function privacyAction()
    {
        header("Location:https://www.freeprivacypolicy.com/live/172354e5-7e63-4feb-ba01-45bf5bd741b3");
        //$this->view->display('Common/privacy.php');
    }

    public function helpMessage($send_mail,$name,$email,$msg)
    {
        $subject = "HELP Inquiry ";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";   
        $headers .= '"From: Affiliox.com@gmail.com' . "\r\n";     
         $message = '<html><body>';
         $message .= '<table style="border-color: #666;" cellpadding="10">';
         $message .= "<tr><td>Name : $name</td></tr>";
         $message .= "<tr><td>Email : $email</td></tr>";
 
         $message .= "<tr><td>Message : $msg</td></tr>";
         $message .= "</table>";
         $message .= "</body></html>";
                 
        if (mail($send_mail,$subject,$message,$headers)) {
            return true;
        } else {
           return false;
        }
    }
    public function HelpAction()

    {   if(!empty($_POST['subject'])){
        $name =$_POST['firstname'];
        $email =$_POST['email'];
        $subject =$_POST['subject'];
        $send_mail ="affiliox.com@gmail.com";
        $result=$this->helpMessage($send_mail,$name,$email,$subject);
        if($result){
            $State=1;
            $UImsg = 'Email Sent Successfully, We will Get back to you ASAP! ';
            $this->view->UImsgNotice =$UImsg;
            $this->view->State = $State;    
            header('refresh:1; url=../User/Market');
            $this->view->display('Common/ContactUs.php');  
            exit();
         }else{
            $State=0;
            $UImsg = 'Error Occured While sending Email, Please try again later';
            $this->view->UImsgNotice= $UImsg;
            $this->view->State = $State;
            header('refresh:1; url=../User/Market');
            $this->view->display('Common/ContactUs.php');  
           
            exit();
         }

    }
        $this->view->display('Common/ContactUs.php');
    }


    public function AccountAction()
    {
        echo 'add method is called';
    }

    public function AccountAction(){
        $product= new Product();
        if (!empty($_GET['id'])) {
    }

    protected function before()
    {
        if (session_id() == '') {
            session_start();
        }
    }
}
