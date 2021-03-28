<?php

namespace App\Controllers;

use Core\View;
use App\Models;
use App\Models\MinistoreM;
use App\Models\Product as ModelsProduct;
use App\Models\Delivery as ModelsDelivery;

class Product extends \Core\Controller
{

    public function indexAction()
    {

        // View::display('User/Interfaces/productDetails.html');
    }

    public function addAction()
    {
        echo 'Product add method is called';
        echo '<p>Query string parameters: <pre>' .
            htmlspecialchars(print_r($_GET, true)) . '</pre></p>';
    }

    public function viewAction()
    {   


        if (!empty($_GET['id'])) {

            if(!empty($_GET['promid'])){
                $promoterID= $_GET['promid'];
                setcookie("promoter", json_encode($promoterID), time() + (86400 * 30), "/");

    
            }
            $prodID = $_GET['id'];
            $prod = new ModelsProduct;
            $delivery =new ModelsDelivery;

            $UIfeedbacks = $prod->feedbackDetails($prodID);
            $this->view->UIfeedbacks = $UIfeedbacks;
            
            $UIrelated=$prod->related($prodID);
            // $this->view->UImsg = $UIrelated;
            $UImsg0 = $prod->productDetails($UIrelated[0]);
            $this->view->UImsg0 = $UImsg0;
            $UImsg1 = $prod->productDetails($UIrelated[1]);
            $this->view->UImsg1 = $UImsg1;
            $UImsg2 = $prod->productDetails($UIrelated[2]);
            $this->view->UImsg2 = $UImsg2;

            $UImsg3=$delivery->deliverycharges($prodID);
            $this->view->UImsg3 = $UImsg3;
            

            $UImsg = $prod->productDetails($prodID);
            $this->view->UImsg = $UImsg;
            
            $this->view->display('Customer/productDetails.php');
        } else
             header("Location:../User/Market");
    }

    public function storeViewAction(){
        $ministore = new MinistoreM();
        if (!empty($_GET['id'])) {
            $result = $ministore->getStore($_GET['id']);
            $this->view->store = $result;
            $this->view->display('Seller/miniStoreCusView.php');  
        } else{
            header("Location:../");
        }
    }
}
