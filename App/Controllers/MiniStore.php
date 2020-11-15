<?php
namespace App\Controllers;
use Core\View;
use App\Models;
class MiniStore extends \Core\Controller {

    public function indexAction(){
        View::display('User/Interfaces/productDetails.html');
    }

    public function addAction(){
        echo 'Product add method is called';
        echo '<p>Query string parameters: <pre>' .
        htmlspecialchars(print_r($_GET, true)) . '</pre></p>';
    }

    public function ministoreAction(){

        $this->view->display('Seller/miniStore.php');
        
    }

    public function ministoreViewAction(){

        $this->view->display('Seller/miniStoreView.php');
        
    }

    public function updateAction(){

        $this->view->display('Seller/updateMiniStore.php');
        
    }

    public function postProductAction(){

        $this->view->display('Seller/postProduct.php');
        
    }

    public function updateProductAction(){

        $this->view->display('Seller/updateProduct.php');
        
    }

    public function viewAction(){

        $data=User::showData();
        View::display('User/Interfaces/productDetails.html',['data'=>$data]);
    }

}