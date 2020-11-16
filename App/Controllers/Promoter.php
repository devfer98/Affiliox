<?php

namespace App\Controllers;
use Core\View;
use App\Models\TransactionPromo;
use App\Models\PromoterProfile;
use App\Models\User;
use App\Models\Buyer;
use App\Models\Seller;


class Promoter extends \Core\Controller {


    public function MarketAction(){
        $this->view->display('Promoter/market-place.php');    
     }
     
    public function accountIndexAction(){
        $this->view->display('Promoter/market-place.php');
        // $this->view->display('Common/market.php');
    }

    public function helpIndexAction(){
        $this->view->display('Common/SelllerReg.php');     
     }

    public function generateLinkAction() {
        $this->view->display('Promoter/generate-link.php');
    }

    public function promoterProfileAction() {

        $promodetails = new PromoterProfile();

        $promodetails->getPromoterProfile();
        $this->view->display('Promoter/promoter-dashboard.php');
    }

    public function editpromoterAction() {
        $this->view->display('Promoter/update-promoter.php');
    }

    public function staticPromoterAction() {
        $this->view->display('Promoter/promoter-statistics.php');
    }

    public function promoterTransAction() {
        $this->view->display('Promoter/withdraw-earnings.php');
    }

    public function transHistoryAction() {
        $promotrans = new TransactionPromo();

        $promotrans->getTransPromo();
        $this->view->display('Promoter/payout-history.php');
        
    }

    // public function listAllTransAction() {

    //     $promotrans = new TransactionPromo();

    //     $promotrans->getTransPromo();
    // }

    public function promoterFeedbackAction() {
        $this->view->display('Promoter/review-feedback.php');
    }

    public function promoterSupportAction() {
        $this->view->display('Promoter/support-center.php');
    }


    public function promoterTransToDBAction(){
        
        $user = new TransactionPromo();
        $ammount= $_POST['ammount'];
        $status = 1 ;
        $date = date("Y-m-d");
        $userID = $_SESSION["userID"];
        
        if($ammount= $_POST['ammount']) {
            $user->addTransPromo($ammount, $status, $userID, $date);
        header('Location:../Promoter/promoterTransSuccess');
        } else    {
            $UImsg= 'Invalid ammount please Try Again';
            $this->view->UImsg = $UImsg;
            $this->view->display('Promoter/withdraw-earnings.php');
        }             
    }


    public function promoterTransSuccessAction(){
        $this->view->display('Promoter/withdraw-earnings.php');
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