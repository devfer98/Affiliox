<?php

namespace App\Controllers;
use Core\View;
use App\Models\TransactionPromo;
use App\Models\PromoterM;
use App\Models\User;
use App\Models\Buyer;
use App\Models\Seller;


class Promoter extends \Core\Controller {


    public function promoterProfileAction() {

         $userID = $_SESSION['username'];
         $user = new PromoterM();
         $result = $user->getPromoterProfile($userID);
         $UImsg = $result;
         $this->view->UImsg=$UImsg;
         $this->view->display('Promoter/promoter-dashboard.php');
    }

    public function promoterProfileUpdateAction() {

        $userID = $_SESSION['username'];
        $user = new PromoterM();
        $result = $user->getPromoterProfile($userID);
        $UImsg = $result;
        $this->view->UImsg=$UImsg;
        $this->view->display('Promoter/update-promoter.php');
    }
   

    public function MarketAction(){
        $user = new PromoterM();
        
        $result = $user->getProductDetails();

        if($result == null) {
            $empty= "Still there are no Products in store!";
            $this->view->empty=$empty;
            $this->view->display('Promoter/market-place.php');
        } else {
            $UImsg = $result;
            $this->view->UImsg=$UImsg;
            $this->view->display('Promoter/market-place.php');
        }
    }
     
    public function accountIndexAction(){
        $this->view->display('Promoter/market-place.php');
    }

    public function helpIndexAction(){
        $this->view->display('Common/SelllerReg.php');     
     }

    public function viewProductAction(){
        if (!empty($_GET['id'])) {

            $prodID = $_GET['id'];
            $userID = $_SESSION['username'];


            $prod = new promoterM;
            $UImsg = $prod->getproductFeatures($prodID);
            $this->view->UImsg = $UImsg;

            $user = new promoterM;
            $UImsg1 = $prod->getPromoterProfile($userID);
            $this->view->UImsg1 = $UImsg1;

            $this->view->display('Promoter/view-product.php');
           
        } else

        $this->view->display('Promoter/view-product.php');  
    }


    public function generateLinkAction() {
        if (!empty($_GET['id'])) {

            $prodID = $_GET['id'];
            $userID = $_SESSION['username'];

            $prod = new promoterM;
            $UImsg = $prod->getUniqueLink($prodID);
            $this->view->UImsg = $UImsg;

            $user = new promoterM;
            $UImsg1 = $user->getPromoterProfile($userID);
            $this->view->UImsg1 = $UImsg1;

            $this->view->display('Promoter/generate-link.php');
           
        } else
        
        $this->view->display('Promoter/generate-link.php');
    }

    public function linkAction() {
        $this->view->display('Promoter/old-link.php');
    }

    public function staticPromoterAction() {

        $userID = $_SESSION['username'];

        $user = new PromoterM();
        $result = $user->getStaticPromo($userID);
        $UImsg1 = $result;
        $this->view->UImsg1=$UImsg1;
       
        $totalC = new PromoterM();
        $result1 = $totalC->getTotalCommission($userID);
        $UImsg2 = $result1;
        $this->view->UImsg2=$UImsg2;

        $totalL = new PromoterM();
        $result2 = $totalL->getTotalLinks($userID);
        $UImsg3 = $result2;
        $this->view->UImsg3=$UImsg3;

        $this->view->display('Promoter/promoter-statistics.php');
    }

    public function promoterTransAction() {
        $userID = $_SESSION['username'];
        $totalC = new PromoterM();
        $result1 = $totalC->getTotalCommission($userID);
        $UImsg2 = $result1;
        $this->view->UImsg2=$UImsg2;
        $this->view->display('Promoter/withdraw-earnings.php');
    }

    public function promoterFeedbackAction() {
        $this->view->display('Promoter/review-feedback.php');
    }

    public function promoterSupportAction() {
        $this->view->display('Promoter/support-center.php');
    }

    public function IndexAction(){
        $this->view->display('Promoter/index.php');
     }

    public function aboutUsAction(){
        $this->view->display('Common/AboutUs.php');
    }

    public function contactUsAction(){
        $this->view->display('Common/ContactUs.php');
    }

    public function ProductAction(){
       $this->view->display('Customer/productDetails.php');
    }

    public function ShoppingCartAction(){
        $this->view->display('Customer/ShoppingCart.php');
    }

    public function promoterTransToDBAction(){
        $userID = $_SESSION["username"];

        

        $user = new TransactionPromo();
        $limit = 100;
        $ammount= $_POST['ammount'];
        $status = 1 ;
        $date = date("Y-m-d");
        
        $totalC = new PromoterM();
        $result1 = $totalC->getTotalCommission($userID);
        $UImsg2 = $result1;
        
        
        
        if($limit > $ammount && $ammount = $_POST['ammount'] ) {
            $user->addTransPromo($ammount, $status, $userID, $date);
            
            header('Location:../Promoter/promoterTransSuccess');
           
        } else    {
            $errmsg= 'Please enter the valid amount of transfer and try again.';
            $this->view->errmsg = $errmsg;
            $this->view->display('Promoter/withdraw-earnings.php');
        }        
        
        
    }


    public function promoterTransSuccessAction(){
        $successmsg= 'Your Transaction Process is Success!';
        $this->view->successmsg = $successmsg;
        $this->view->display('Promoter/withdraw-earnings.php');
    }

    public function transHistoryAction() {

        $userID = $_SESSION['username'];
        $user = new TransactionPromo();
        
        $result = $user->getTransPromo($userID);

        if($result == null) {
            // $empty = $result;
            $empty= "You have not yet made any transaction!";
            $this->view->empty=$empty;
            $this->view->display('Promoter/payout-history.php');
        } else {
            $UImsg = $result;
            $this->view->UImsg=$UImsg;
            $this->view->display('Promoter/payout-history.php');
        }

    }


    public function promoterLinkToDBAction() {
        $user = new PromoterM();
        $link= $_POST['link'];
        $date = date("Y-m-d");
        $userID = $_SESSION["username"];
        
        if($_POST['link'] ) {
            $user->addLinksPromo($link, $date, $userID);
            header('Location:../Promoter/linkSubmitSuccess');
            $this->view->display('Promoter/generate-link.php');

        } else    {
            $errmsg= 'Please Enter the Link to store.';
            $this->view->errmsg = $errmsg;
            $this->view->display('Promoter/generate-link.php');
        }      
    }

    public function linkSubmitSuccessAction(){
        $successmsg= '<br>' . 'This link will be added to your Promotional Links collection for later access.!' . '<br><br>' . 'THANK YOU!' . '<br><br>';
        $this->view->successmsg = $successmsg;
        $this->view->display('Promoter/generate-link.php');
    }


    public function linkHistoryAction() {

        $userID = $_SESSION['username'];
        $user = new PromoterM();
        
        $result = $user->getLinksPromo($userID);

        if($result == null) {
            $empty= "You have not yet post any Link!";
            $this->view->empty=$empty;
            $this->view->display('Promoter/old-link.php');
        } else {
            $UImsg = $result;
            $this->view->UImsg=$UImsg;
            $this->view->display('Promoter/old-link.php');
        }

    }


    protected function before() {   
        if(session_id() == '') {
            session_start();
        }
        if(isset($_SESSION['type']) && ($_SESSION['type'] == 'promoter') ){
            return true;
        }else{
            header("Location:../Login/index");
            
        }
    }

    

}