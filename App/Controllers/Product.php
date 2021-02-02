<?php

namespace App\Controllers;

use Core\View;
use App\Models;
use App\Models\Product as ModelsProduct;

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
            $prodID = $_GET['id'];
            $prod = new ModelsProduct;


            $UIfeedbacks = $prod->feedbackDetails($prodID);
            $this->view->UIfeedbacks = $UIfeedbacks;

            $UIrelated=$prod->related($prodID);
            $this->view->UImsg = $UIrelated;

            $UImsg = $prod->productDetails($prodID);
            $this->view->UImsg = $UImsg;
            
            $this->view->display('Customer/productDetails.php');
        } else
             header("Location:../User/Market");
    }
}
