<?php

namespace App\Controllers;
use Core\View;
use App\Models\User;
use App\Models\Feedback;
use App\Models\MinistoreM;
use App\Models\sellerM;

class Seller extends \Core\Controller {

    public function accountIndexAction(){
        $this->view->display('Seller/sellerProfile.php');
        // $this->view->display('Common/market.php');
    }

    public function helpIndexAction(){

        $this->view->display('Common/SelllerReg.php');
        
    }
     
    public function profileAction(){

        $userID = $_SESSION['username'];
        $seller = new SellerM();
        $result = $seller->getSeller($userID);
        $this->view->sellerUser = $result;
        $this->view->display('Seller/sellerProfile.php');
        
    }

    public function profileEditAction(){
        $userID = $_SESSION['username'];
        $seller = new SellerM();
        $result = $seller->getSeller($userID);
        $this->view->sellerUser = $result;
        $this->view->display('Seller/editSeller.php');
        
    }

    public function passEditAction(){

        $this->view->display('Seller/sellerPass.php');
        
    }

    public function noMinistoreAction(){
        $ministore= new MinistoreM();
        if($ministore-> isMinistore($_SESSION['username'])==0){
            $this->view->display('Seller/ministoreNotCreated.php');
        }else{
            header("Location:../Ministore/ministore");
        }
    }

    public function addMinistoreAction(){
        $ministore= new MinistoreM();
        if($ministore-> isMinistore($_SESSION['username'])==0){
            $this->view->display('Seller/createMinistore.php');
        }else{
            header("Location:../Ministore/ministore");
        }
    }

    public function createMinistoreAction(){
        $ministore= new MinistoreM();
        $errorMssg = $ministore->add($_SESSION['username'], $_POST['storeName'], $_POST['description'], $_POST['font'], $_POST['navColor'], $_POST['buttonColor'], $_FILES['logoImage'], $_FILES['sliderImages']);

        if($errorMssg==""){
            header("Location:../Ministore/ministore");
            // $this->ministoreAction();
        }else{
            $this->view->errorMssg=$errorMssg;
            $this->addMinistoreAction();
        }
    }

    public function marketAction(){

        $this->view->display('Common/market.php');
        
    }

    public function statisticsAction(){

        $this->view->display('Seller/sellerStatistics.php');
        
    }

    public function feedbackAction(){
        $feedback= new Feedback();
        $this->view->buyerFeedbacks=$feedback-> getFeedSell($_SESSION['username']);
        $this->view->display('Seller/sellerFeedback.php');
    }

    public function addReplyAction(){
        $feedback= new Feedback(); 
        $feedback->addReply($_POST['feedbackID'], $_POST['reply']);
        // $this->feedbackAction();
        header("Location:../Seller/feedback");
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
        if(session_id() == '') {
            session_start();
        }
        if(isset($_SESSION['type']) && ($_SESSION['type'] == 'seller') && isset($_SESSION['username'])){
            return true;
        }else{
            header("Location:../Login/index");
            
        }
    }

}