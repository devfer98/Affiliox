<?php

namespace App\Controllers;

use App\Models\User as ModelsUser;
use App\Models\BuyerM as ModelsBuyerM;
use App\Models\Product as ModelsProduct;
use Core\View;

class User extends \Core\Controller
{

    public function indexAction()
    {
        $this->view->display('Common/index.php');
    }
    public function Error4()
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

        // return $UImsg;
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
            $value = json_decode($value, true);
            
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
    public function HelpAction()
    {
        $this->view->display('Common/ContactUs.php');
    }


    public function AccountAction()
    {
        echo 'add method is called';
    }

    public function FacebookAction()
    {
        echo 'add method is called';
    }

    protected function before()
    {
        if (session_id() == '') {
            session_start();
        }
    }
}
