<?php

namespace App\Controllers;
use Core\View;
use App\Models\User;


class Seller extends \Core\Controller {

    public function accountIndexAction(){
        $this->view->display('Seller/sellerProfile.php');
        // $this->view->display('Common/market.php');
    }

    public function helpIndexAction(){

        $this->view->display('Common/SelllerReg.php');
        
    }
     
    public function profileAction(){

        $this->view->display('Seller/sellerProfile.php');
        
    }

    public function profileEditAction(){

        $this->view->display('Seller/editSeller.php');
        
    }

    public function statisticsAction(){

        $this->view->display('Seller/sellerStatistics.php');
        
    }

    public function feedbackAction(){

        $this->view->display('Seller/sellerFeedback.php');
        
    }

    public function transactionAction(){

        $this->view->display('Seller/sellerTransactions.php');
        
    }

    public function transactionHisAction(){

        $this->view->display('Seller/sellerTransHis.php');
        
    }

    public function orderAction(){

        $this->view->display('Seller/viewOrders.php');
        
    }

    public function orderProAction(){

        $this->view->display('Seller/viewOrderPros.php');
        
    }

    public function supportAction(){

        $this->view->display('Seller/sellerSupport.php');
        
    }

    protected function before()
    {   
    //     if(session_id() == '') {
    //         session_start();
    //     }
    //     if(isset($_SESSION['type']) && ($_SESSION['type'] == 'seller') ){
    //         return true;
    //     }else{
    //         header("Location:../Login/index");
            
    //     }
    }

}