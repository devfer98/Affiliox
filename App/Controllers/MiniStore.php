<?php
namespace App\Controllers;
use Core\View;
// use App\Models;
use App\Models\MinistoreM;
use App\Models\Category;
use App\Models\Product;
use App\Models\Delivery;
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
        $this->view->display('Seller/miniStore.php');
    }

    // public function ministoreNotAction(){
    //     $this->view->display('Seller/miniStoreNotCreated.php');
    // }

    public function ViewAction(){
        $userID = $_SESSION['username'];
        $ministore = new MinistoreM();
        $result = $ministore->getMinistore($userID);
        $this->view->store = $result;
        $this->view->display('Seller/miniStoreView.php');  
    }

    public function ministoreViewAction(){
        $userID = $_SESSION['username'];
        $ministore = new MinistoreM();
        $result = $ministore->getMinistore($userID);
        $this->view->store = $result;
        $this->view->display('Seller/miniStoreView.php');  
    }

    public function updateAction(){
        $userID = $_SESSION['username'];
        $ministore = new MinistoreM();
        $result = $ministore->getMinistore($userID);
        $this->view->store = $result;
        $this->view->display('Seller/updateMiniStore.php'); 
    }

    public function editAction(){
        $ministore= new MinistoreM();
        $errorMssg = $ministore->edit($_SESSION['username'], $_POST['description'], $_POST['font'], $_POST['navColor'], $_POST['buttonColor'], $_FILES['logoImage'], $_FILES['sliderImages']);

        if($errorMssg=="" || $errorMssg=="Image not added"){
            header("Location:../Ministore/ministoreView");
        }else{
            $this->view->errorMssg=$errorMssg;
            $this->updateAction();
        }
    }

    public function addProductAction(){
        // $ministore= new MinistoreM();
        // $this->view->ministore = $ministore->getMinistore($_SESSION['username']);
        $category = new Category();
        $this->view->categories = $category->getCategories();
        $this->view->display('Seller/postProduct.php');
    }

    public function createProductAction(){
        $product= new Product();
        $delivery = new Delivery();
        // $ministore= new MinistoreM();
        // $ministore = $ministore->getMinistore($_SESSION['username']);
        // if(isset($ministore) and !empty($ministore) and $ministore->num_rows>0){
            // $row = $ministore->fetch_assoc();
        $product->add($_POST['proName'], $_POST['availQuantity'], $_POST['description'], "Active", $_POST['price'], $_POST['comRate'], $_SESSION['ministore'], $_POST['category'], $_FILES['mainImage'], $_FILES['otherImages']);
        $districts = array('Ampara','Anuradhapura','Badulla','Batticaloa','Colombo','Galle','Gampaha','Hambantota','Jaffna','Kalutara','Kandy','Kegalle','Kilinochchi','Kurunegala','Mannar','Matale','Matara','Monaragala','Mullaitivu','Nuwara Eliya','Polonnaruwa','Puttalam','Ratnapura','Trincomalee','Vavuniya');
        for ($x = 2; $x <= 26; $x++) {
            $delivery->add($product->lastProID, $_POST['price'.$x], $_POST['startDis'], $districts[$x-2], $_POST['period'.$x]);
        }
        $this->ministoreAction();

        // }
        // $delivery = new Delivery();
        // $districts = array("Colombo");
        // for ($x = 1; $x <= 3; $x++) {
        //     $delivery->add(Product::$lastProID, $_POST['price'.$x], $_POST['startDis'], $districts[$x], $_POST['proName'], $_POST['period'.$x]);
        // }
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
            $store= new MinistoreM();
            $ministore=$store-> getMinistore($_SESSION['username']);
            if($ministore->num_rows>0){
                if(!isset($_SESSION['ministore'])){
                    $row = $ministore->fetch_assoc();
                    $_SESSION["ministore"] = $row['name'];
                }
                // echo $_SESSION['ministore'];
                return true;
            }else{
                header("Location:../Seller/noMinistore");
            }
        } else {
            header("Location:../Login/index");
        }
   }

}