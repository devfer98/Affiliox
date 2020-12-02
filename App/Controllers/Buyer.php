<?php

namespace App\Controllers;
use Core\View;
use App\Models\BuyerM;
use App\Models\Feedback;

class Buyer extends \Core\Controller
{
   public function IndexAction()
   {
      $this->view->display('Customer/index.php');
   }

   // Buyer Account Functions -----------------------------//
   public function AccountAction()
   {

      $userID = $_SESSION['username'];
      $user = new BuyerM();
      $result = $user->getBuyer($userID);
      $UImsg = $result;
      $this->view->UImsg = $UImsg;
      $this->view->display('Customer/accountView.php');
   }

   public function EditAccountAction()
   {

      $userID = $_SESSION['username'];
      $user = new BuyerM();
      $result = $user->getBuyer($userID);
      $UImsg = $result;
      $this->view->UImsg = $UImsg;
      $this->view->display('Customer/UpdateAccount.php');
   }

   // Buyer Market Functions -----------------------------//
   public function MarketAction()
   {
      $this->view->display('Customer/market.php');
   }

   // Buyer password reset Functions -----------------------------//
   public function PasswordResetAction()
   {

      if (isset($_POST['current_password'])) {
    
         $current_pass= $_POST['current_password'];
         $md5_pass=md5($current_pass);
         $new_pass = $_POST['password'];
         $md5_new_pass=md5($new_pass);
         $username = $_SESSION['username'];
         $user = new BuyerM();
         $result = $user->updatePassword($md5_pass,$md5_new_pass, $username);
         if ($result) {
            $State =1;
            $UImsg = 'Password Reset Successfull';
            $this->view->State=$State;
            $this->view->UImsg=$UImsg;
            $this->view->display('Customer/PassReset-afterLogin.php');
           
         }else{
             $State =0;
             $UImsg = 'Incorrect Password ,Please Try Again';
             $this->view->State=$State;
             $this->view->UImsg=$UImsg;
             $this->view->display('Customer/PassReset-afterLogin.php');
         }

      }else{
          $this->view->display('Customer/PassReset-afterLogin.php');
      }
   }


   // Product view  Functions -----------------------------//
   public function ProductAction()
   {
      $this->view->display('Customer/productDetails.php');
   }


   // Shopping cart  Functions -----------------------------//
   public function ShoppingCartAction()
   {
      $this->view->display('Customer/shoppingCart.php');
   }

      // Delivery  Functions -----------------------------//
      public function DeliveryAction()
      {
         $this->view->display('Customer/delivery.php');
      }

   // Buyer Orders Functions -----------------------------//
   public function CurrentOrdersAction()
   {
      $this->view->display('Customer/currentOrders.php');
   }

   public function CompletedOrdersAction()
   {

      $this->view->display('Customer/CompletedOrders.php');
   }

   public function ContactSellerAction()
   {
      $this->view->display('Customer/contactSeller.php');
   }

   public function OrderSuccessAction()
   {
      $this->view->display('Customer/ConfirmReceived.php');
   }

   // Buyer Feedbacks Functions -----------------------------//
   public function FeedbackViewAction()
   {
      $this->view->display('Customer/viewFeedbacks.php');
   }


   public function SubmitFeedbackAction()
   {

      if (isset($_POST['description'])) {
         $message = $_POST['description'];
         $rating = $_POST['rating'];
         $username = $_SESSION['username'];
         $prodID = 12345;

         $entry = new Feedback();
         $result = $entry->addFeedback($message, $rating, $username, $prodID);
         if ($result) {
            $UImsg = 'Feedback Submitted Successfully';
            $this->view->UImsg->$UImsg;
            $this->view->display('Customer/feedback.php');
            header('Refresh: 4; URL=../Buyer/CompletedOrders');
         }
         $UImsg = 'Error Occured While Submitting Please try again later';

         $this->view->display('Templete/Buyer_header.php');
         $this->view->$UImsg->$UImsg;
         $this->view->display('Customer/feedback.php');
      }
      $this->view->display('Customer/feedback.php');
   }


   // Buyer Feedbacks Functions -----------------------------//
   public function HelpAction()
   {
      $this->view->display('Common/ContactUs.php');
   }

   protected function before()
   {

      if (session_id() == '') {
         session_start();
      }
      if (isset($_SESSION['type']) && ($_SESSION['type'] == 'buyer')) {
         return true;
      } else {
         header("Location:../Login/index");
      }
   }
}
