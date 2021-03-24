<?php

namespace App\Controllers;
use Core\View;
use App\Models\BuyerM;
use App\Models\Feedback;
use App\Models\Order as ModelsOrder;


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
      header("Location:../user/market");
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
         $userID = $_SESSION['username'];
         $data = new BuyerM();
         $data-> getBuyer($userID);
         $this->view->data= $data-> getBuyer($userID);
         $this->view->display('Customer/delivery.php');
      }

      public function checkoutAction()
      {  
         
         $district= $_POST['district'];
         $buy = new BuyerM;
         $value =  (!empty($_COOKIE["items"])) ? $_COOKIE["items"] : "[]";
         $value = json_decode($value, true);
         $UImsg = $buy->checkout($value,$district);
         $this->view->UItotal=$UImsg;    
         $this->view->display('Customer/Checkout.php');
      }



      public function paymentAction()
      {
         $district= $_POST['district'];
         $buy = new BuyerM;
         $value =  (!empty($_COOKIE["items"])) ? $_COOKIE["items"] : "[]";
         $value = json_decode($value, true);
         $UImsg = $buy->checkout($value,$district);
       
         $order = new ModelsOrder;
         $status = "Pending";
         $datetime = date("Y-m-d");
         $start_date = date_create($datetime);
         $datetime = date_format($start_date,"Y-m-d");
      
         date_add($start_date,date_interval_create_from_date_string($UImsg[5]. " Days" ));// longest peroid
         $deliveryDeadline = date_format($start_date,"Y-m-d");
         $deliveryAddress = $_POST['address'];
         $amount =$UImsg[2];
         $buyUserID=$_SESSION['username'];

         ///////////////////////////////////////////
         $proUserID=12345;   // promoter ckeck here from cookie find commision from products
         $totalCommission=300;

         ///////////////////////////////////////////
         $data= $order->addOrder($status,$amount,$datetime,$deliveryAddress, $deliveryDeadline ,$buyUserID ,$proUserID ,$totalCommission);
         
         // $url = 'https://sandbox.payhere.lk/pay/checkout';
         $data = array('merchant_id' => '1216939', 'return_url' => 'http://localhost/Buyer/CurrentOrders','cancel_url' => 'http://127.0.0.1/buyer/checkout' ,'notify_url' => 'http://127.0.0.1/user/market' ,'first_name' =>$_POST['first_name'] ,'last_name' => '' ,'address' => $_POST['address'] , 'phone' => $_POST['phone'],'city' => $_POST['city'] ,'email' => $_POST['email'],'country' => 'Srilanka','amount' => $_POST['amount'],'items' =>$data,'currency' =>'LKR' ,'order_id' =>$data );
         $this->view->data=$data;    
         $this->view->display('Customer/PG-confirm.php');   
         
         // $options = array(
         //    'https' => array(
         //       'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
         //       'method'  => 'POST',
         //       'content' => http_build_query($data)
         //    )
         // );
         // $context  = stream_context_create($options);
         // $result = file_get_contents($url, false, $context);
         // if ($result === FALSE) { /* Handle error */ }
         // var_dump($result);



         
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
   public function FailedOrderAction()
   {
      $this->view->display('Customer/OrderNotReceived.php');
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
      $entry = new Feedback();
      $result = $entry-> getFeedbacks($_SESSION['username']);
      $this->view->display('Customer/viewFeedbacks.php');

   }


   public function SubmitFeedbackAction()
   {
       if (isset($_POST['description'])) {
           $message = $_POST['description'];
           $rating = $_POST['rating'];
           $username = $_SESSION['username'];
           $prodID = 12345;
            if(empty($message)){
               $message="NULL";
            }

           $entry = new Feedback();
           $result = $entry->addFeedback($message, $rating, $username, $prodID);
           if ($result) {
               $State=1;
               $UImsg = 'Feedback Submitted Successfully';
               $this->view->UImsg =$UImsg;
               $this->view->State = $State;
               $this->view->display('Customer/feedback.php');
               header('Refresh: 4; URL=../Buyer/CompletedOrders');
           } else {
               $State=0;
               $UImsg = 'Error Occured While Submitting Please try again later';
               $this->view->$UImsg= $UImsg;
               $this->view->State = $State;
               $this->view->display('Customer/feedback.php');
           }
          
       } $this->view->display('Customer/feedback.php');
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
