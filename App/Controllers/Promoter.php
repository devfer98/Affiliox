<?php

namespace App\Controllers;
use Core\View;
use App\Models\TransactionPromo;
use App\Models\PromoterProfile;
use App\Models\User;
use App\Models\Buyer;
use App\Models\Seller;


class Promoter extends \Core\Controller {


    public function promoterProfileAction() {

         $userID = $_SESSION['username'];
         $user = new PromoterProfile();
         $result = $user->getPromoterProfile($userID);
         $UImsg = $result;
         $this->view->UImsg=$UImsg;
         $this->view->display('Promoter/promoter-dashboard.php');
    }

    public function promoterProfileUpdateAction() {

        $userID = $_SESSION['username'];
        $user = new PromoterProfile();
        $result = $user->getPromoterProfile($userID);
        $UImsg = $result;
        $this->view->UImsg=$UImsg;
        $this->view->display('Promoter/update-promoter.php');
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



        // $UImsg = $result;
        // $this->view->UImsg=$UImsg;
        // $this->view->display('Promoter/payout-history.php');
        
    }
    


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

    public function staticPromoterAction() {
        $this->view->display('Promoter/promoter-statistics.php');
    }

    public function promoterTransAction() {
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

    public function promoterTransToDBAction(){
        
        $user = new TransactionPromo();
        $limit = 82.14;
        $ammount= $_POST['ammount'];
        $status = 1 ;
        $date = date("Y-m-d");
        $userID = $_SESSION["username"];
        
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