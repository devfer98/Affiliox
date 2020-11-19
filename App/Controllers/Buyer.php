<?php

namespace App\Controllers;
use Core\View;
use App\Models\BuyerM;
use App\Models\Feedback;

class Buyer extends \Core\Controller {
   public function IndexAction(){
      $this->view->display('Customer/index.php');
   }

     // Buyer Account Functions -----------------------------//
     public function AccountAction(){

         $userID=$_SESSION['username'];
         $user= new BuyerM();
         $result = $user->getBuyer($userID);
         $UImsg=$result;
         $this->view->UImsg=$UImsg;
         $this->view->display('Customer/accountView.php');

     
// $to_email = "lawthenuka@gmail.com";
// $subject = "Simple Email Test via PHP";
// $body = "Hi, This is test email send by PHP Script";
// $headers = "From: affiliox.xyz@gmail.com";

// if (mail($to_email, $subject, $body, $headers)) {
//     echo "Email successfully sent to $to_email...";
// } else {
//     echo "Email sending failed...";
// }

     }

     public function EditAccountAction(){

      $userID=$_SESSION['username'];
      $user= new BuyerM();
      $result = $user->getBuyer($userID);
      $UImsg=$result;
      $this->view->UImsg=$UImsg;
      $this->view->display('Customer/UpdateAccount.php');
   }

      // Buyer Market Functions -----------------------------//
     public function MarketAction(){
        $this->view->display('Customer/market.php');
     }

      // Buyer password reset Functions -----------------------------//
      public function PasswordResetAction(){
         $this->view->display('Customer/PassReset-afterLogin.php');
      }
      

      // Shopping cart  Functions -----------------------------//
     public function ShoppingCartAction(){
        $this->view->display('Customer/shoppingCart.php');
     }



      // Buyer Orders Functions -----------------------------//
     public function CurrentOrdersAction(){
        $this->view->display('Customer/currentOrders.php');
     }

     public function CompletedOrdersAction(){
      
      $this->view->display('Customer/CompletedOrders.php');
   }

   public function ContactSellerAction(){
      $this->view->display('Customer/contactSeller.php');
   }

   public function OrderSuccessAction(){
      $this->view->display('Customer/ConfirmReceived.php');
   }

      // Buyer Feedbacks Functions -----------------------------//
     public function FeedbackViewAction(){
        $this->view->display('Customer/viewFeedbacks.php');
     }
     

     public function SubmitFeedbackAction(){

      if(isset($_POST['description'])){
         $message=$_POST['description'];
         $rating =$_POST['rating'];
         $username = $_SESSION['username'];
         $prodID =12345;
         
         $entry =new Feedback();
         $result =$entry->addFeedback($message,$rating,$username,$prodID);
         if($result){
            $UImsg='Feedback Submitted Successfully';
            $this->view->UImsg ->$UImsg;
            $this->view->display('Customer/feedback.php');
            header('Refresh: 4; URL=../Buyer/CompletedOrders');
         }
         $UImsg='Error Occured While Submitting Please try again later';
         
         $this->view->display('Templete/Buyer_header.php');
         $this->view->$UImsg ->$UImsg;
         $this->view->display('Customer/feedback.php');
         
      }  
      $this->view->display('Customer/feedback.php');
   }
   
    


    protected function before()
    {      
       
        if(session_id() == '') {
            session_start();
        }
        if(isset($_SESSION['type']) && ($_SESSION['type'] == 'buyer') ){
            return true;
        }else{
            header("Location:../Login/index");
            
        }
    }

}