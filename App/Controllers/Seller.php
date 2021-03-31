<?php

namespace App\Controllers;
use Core\View;
use App\Models\User;
use App\Models\Feedback;
use App\Models\Order;
use App\Models\MinistoreM;
use App\Models\sellerM;
use App\Models\TransactionPromo;

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

        $this->view->display('Customer/market.php');
        
    }

    public function statisticsAction(){
        $ministore= new MinistoreM();
        $this->view->totalSold=$ministore->totalSold($_SESSION['username']);
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
        $transaction= new TransactionPromo;
        $this->view->salesAmount=$transaction->getSalesAmount($_SESSION['username']);
        $this->view->display('Seller/sellerTransactions.php');   
    }

    public function addtransactionAction(){
        $transaction= new TransactionPromo;
        $sales=$transaction->getSalesAmount($_SESSION['username']);
        $saleAmount;
        if(isset($this->sales) and !empty($this->sales)){
            while($row = $this->sales->fetch_assoc()){
                $saleAmount=$row["salesAmount"];
            }
        }else{
            $saleAmount=0.0;
        }
        if($_POST['amount']<=$saleAmount){
            $date = date("Y-m-d");
            $transaction->addTransPromo(number_format((float)$_POST['amount'], 2, '.', ''), 0, $_SESSION['username'], $date);
            $this->transactionAction();
        }else{
            $this->view->errorMssg="Entered amount is Invalid";
            $this->view->display('Seller/sellerTransactions.php');
        }
           
    }

    public function transactionHisAction(){
        $transaction= new TransactionPromo;
        $this->view->TransHis=$transaction->getTransPromo($_SESSION['username']);
        $this->view->display('Seller/sellerTransHis.php');  
    }

    public function orderAction(){
        $userID = $_SESSION['username'];
        $order= new Order();
        $this->view->orderPend=$order->getSellOrders($userID, "Pending", "Pending");
        $this->view->orderDispatched=$order->getSellOrders($userID, "Dispatched", "Pending");
        $this->view->orderSuccess=$order->getSellOrders($userID, "Dispatched", "Received");
        $this->view->orderUnSuccess=$order->getSellOrders($userID, "Dispatched", "Not Received");
        $this->view->display('Seller/viewOrders.php');    
    }

    public function orderProAction(){
        $order= new Order();
        if (!empty($_GET['id'])) {
            $result=$order->viewOrder($_GET['id']);
            if ($result->num_rows>0){
                $this->view->orderPros=$order->viewOrderPros($_GET['id']);
                $this->view->order=$result;
                $this->view->display('Seller/viewOrderPros.php');
            }else{ 
                $this->view->display('Common/E404.php');
            }
        }else{
            $this->view->display('Common/E404.php');
        }  
    }

    public function orderDispatchAction(){
        $order= new Order();
        $errorMssg=$order->orderDispatch($_POST['orderID'], $_POST['productID']);
        header("Location:../Seller/orderPro?id=".$_POST['orderID']);
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