<?php

namespace App\Controllers;
use Core\View;
use App\Models\User;


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
        $this->view->display('Promoter/payout-history.php');
    }

    public function promoterFeedbackAction() {
        $this->view->display('Promoter/review-feedback.php');
    }

    public function promoterSupportAction() {
        $this->view->display('Promoter/support-center.php');
    }

    protected function before()

    {   
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