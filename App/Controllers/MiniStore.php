<?php
namespace App\Controllers;
use Core\View;
// use App\Models;
use App\Models\MinistoreM;
use App\Models\Category;
use App\Models\Product;
class MiniStore extends \Core\Controller {

    // public function indexAction(){
    //     $this->view->display('User/Interfaces/productDetails.html');
    // }

    // public function addAction(){
    //     echo 'Product add method is called';
    //     echo '<p>Query string parameters: <pre>' .
    //     htmlspecialchars(print_r($_GET, true)) . '</pre></p>';
    // }

    public function ministoreAction(){
        // $ministore= new MinistoreM();
        // if($ministore-> isMinistore($_GET['id'])==0){
        //     $this->view->display('Seller/miniStoreNotCreated.php');
        // }else{
        $this->view->display('Seller/miniStore.php');
        // }
    }

    public function ministoreNotAction(){
        $this->view->display('Seller/miniStoreNotCreated.php');
    }

    public function ministoreViewAction(){

        $this->view->display('Seller/miniStoreView.php');
        
    }

    public function updateAction(){

        $this->view->display('Seller/updateMiniStore.php');
        
    }

    public function addProductAction(){
        // $ministore= new MinistoreM();
        // $this->view->ministore = $ministore->getMinistore($_SESSION['username']);
        $category= new Category();
        $this->view->categories = $category->getCategories();
        $this->view->display('Seller/postProduct.php');
    }

    public function createProductAction(){
        $product= new Product();
        $ministore= new MinistoreM();
        $ministore = $ministore->getMinistore($_SESSION['username']);
        if(isset($ministore) and !empty($ministore) and $ministore->num_rows>0){
            $row = $ministore->fetch_assoc();
            $product->add($_POST['proName'], $_POST['availQuantity'], $_POST['description'], $_POST['price'], $_POST['comRate'], $row['name'], $_POST['category'], $_FILES['mainImage'], $_FILES['otherImages']);
            $this->addProductAction();
        }
    }

    public function updateProductAction(){
        $this->view->display('Seller/updateProduct.php');
    }

    // public function viewAction(){

    //     $data=User::showData();
    //     View::display('User/Interfaces/productDetails.html',['data'=>$data]);
    // }

    protected function before(){

        if (session_id() == '') {
            session_start();
        }
        if (isset($_SESSION['type']) && ($_SESSION['type'] == 'seller') && isset($_SESSION['username'])) {
            $ministore= new MinistoreM();
            if($ministore-> isMinistore($_SESSION['username'])==1){
                return true;
            }else{
                header("Location:../Seller/noMinistore");
            }
        } else {
            header("Location:../Login/index");
        }
   }

}