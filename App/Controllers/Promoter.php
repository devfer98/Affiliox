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

        if(!empty($_POST['name'])){
         
            $user = new PromoterM();
            $ID =$_SESSION['username'];
            $name       =$_POST['name'];
            $aLine1	    =$_POST['aLine1'];
            $aLine2     =$_POST['aLine2'];	 
            $city       =$_POST['city'];      	
            $country    =$_POST['country'];	
            $status 	=$_POST['status'];
            $phoneNo    =$_POST['phoneNo'];
            if (($name) && ($aLine1) && ($aLine2) &&($city) && ($country) && ($status) && ($phoneNo)) {
           
            }else{
               
                $State=0;
                $this->view->State = $State;
                $UImsg= 'Empty Entries Detected, Please Try Again !';
                $this->view->UImsg = $UImsg;
                header('refresh:2 , URL =../Promoter/promoterProfile ');    
                $this->view->display('Promoter/update-promoter.php');
                exit;   
            }
 
            $data =$user->updatePromoter($ID, $name,$phoneNo, $country,$status, $city, $aLine1, $aLine2 );
   
            $UImsg= '<br>' . 'Successfully Updated!' . '<br><br>' . 'THANK YOU!' . '<br><br>';
            $this->view->UImsg = $UImsg;
            $State=1;
            $this->view->State = $State;
            header('refresh:2 , URL =../Promoter/promoterProfile ');
            $this->view->display('Promoter/update-promoter.php');
            
            exit();
                
         }

        $userID = $_SESSION['username'];
        $user = new PromoterM();
        $result = $user->getPromoterProfile($userID);
        $UImsg1 = $result;
        $this->view->UImsg1=$UImsg1;
        $this->view->display('Promoter/update-promoter.php');
    }
    
    public function helpMessage($send_mail,$name,$email,$msg,$prb)
    {
        $subject =  "Promoter Request : " .$prb;
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";   
        $headers .= '"From: Affiliox.com@gmail.com' . "\r\n";     
         $message = '<html><body>';
         $message .= '<table style="border-color: #666;" cellpadding="10">';
         $message .= "<tr><td>Name : $name</td></tr>";
         $message .= "<tr><td>Email : $email</td></tr>";
 
         $message .= "<tr><td>Message : $msg</td></tr>";
         $message .= "</table>";
         $message .= "</body></html>";
                 
        if (mail($send_mail,$subject,$message,$headers)) {
            

            return true;
            
        } else {
            
           return false;
        }
    }
   

    public function MarketAction(){

        if(isset($_POST['textdata'])){
            
            $email = "";
            $send_mail ="affiliox.com@gmail.com";
            $userID = $_SESSION['username'];
            $prb =$_POST['problem'];
            
            $msg =$_POST['textdata'];
            $user = new PromoterM();
            $result = $user->getPromoterProfile($userID);
            while ($row =$result->fetch_assoc()) {
                
                $email = $row['email'];
            }
            $this->helpMessage($send_mail,$userID,$email,$msg,$prb);
            
        }
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
        $total = 0;
        $result1 = $totalC->getTotalCommission($userID);
        while($row = $result1->fetch_assoc() ){
           
            $total =$row['total'];
            echo $total;
        }
        $tot = new TransactionPromo();
        $availableTot = $tot->availtot($total,$userID);
        echo $availableTot;
        $UImsg2 = $availableTot;
        $this->view->UImsg2=$UImsg2;
        $this->view->display('Promoter/withdraw-earnings.php');
    }


    public function promoterSupportAction() {
        $this->view->display('Promoter/support-center.php');
    }

    public function IndexAction(){

        $latest = new PromoterM();
        $featured = new PromoterM();
        $result1 = $latest->getMarketLatestProduct();
        $result2 = $featured->getMarketFeaturedProduct();

        if($result1 && $result2 == null) {
            $empty= "Still there are no Products in store!";
            $this->view->empty=$empty;
            $this->view->display('Common/index.php');
        } else {
            $UImsg1 = $result1;
            $UImsg2 = $result2;
            $this->view->UImsg1=$UImsg1;
            $this->view->UImsg2=$UImsg2;
            $this->view->display('Common/index.php');
        }
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
        
        $ammount= $_POST['ammount'];
        $status = 1 ;
        $total=0;
        $date = date("Y-m-d");
        $totalC = new PromoterM();
        $result1 = $totalC->getTotalCommission($userID);
        while($row = $result1->fetch_assoc() ){
            echo $total;
            $total =$row['total'];
        }
        $res = $user->addTransPromo($ammount, $status, $userID, $date,$total);
        if($res){
            header('Location:../Promoter/promoterTransSuccess');
           
        } else {
            header('Location:../Promoter/promoterTransFail');
            
        }        
        
        
    }


    public function promoterTransSuccessAction(){

        $userID = $_SESSION['username'];
        $totalC = new PromoterM();
        $total = 0;
        $result1 = $totalC->getTotalCommission($userID);
        while($row = $result1->fetch_assoc() ){
           
            $total =$row['total'];
            echo $total;
        }
        $tot = new TransactionPromo();
        $availableTot = $tot->availtot($total,$userID);
        echo $availableTot;
        $UImsg2 = $availableTot;
        $this->view->UImsg2=$UImsg2;
       
        $successmsg= 'Your payout will be sent to your Wallet!';
        $this->view->successmsg = $successmsg;
        $this->view->display('Promoter/withdraw-earnings.php');
    }

    public function promoterTransFailAction(){


        $userID = $_SESSION['username'];
        $totalC = new PromoterM();
        $total = 0;
        $result1 = $totalC->getTotalCommission($userID);
        while($row = $result1->fetch_assoc() ){
           
            $total =$row['total'];
            echo $total;
        }
        $tot = new TransactionPromo();
        $availableTot = $tot->availtot($total,$userID);
        echo $availableTot;
        $UImsg2 = $availableTot;
        $this->view->UImsg2=$UImsg2;

        $errmsg= 'Please enter a valid amount of transfer and try again.';
        $this->view->errmsg = $errmsg;
        $this->view->display('Promoter/withdraw-earnings.php');
    }

    public function transHistoryAction() {

        $userID = $_SESSION['username'];
        $user = new TransactionPromo();
        
        $result = $user->getTransPromo($userID);

        if($result == null) {
            
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