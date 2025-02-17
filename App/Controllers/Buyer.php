<?php

namespace App\Controllers;
use Core\View;
use App\Models\BuyerM;
use App\Models\Feedback;
use App\Models\Order as ModelsOrder;
use App\Models\Product;
use App\Models\SellerM;
use App\Models\User;

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
      if(!empty($_POST['fullname'])){
         
         $user = new BuyerM();
         $ID =$_SESSION['username'];
         $name       =$_POST['fullname'];
         $aLine1	    =$_POST['aline1'];
         $aLine2     =$_POST['aline2'];	 
         $city       =$_POST['city'];      	
         $country    =$_POST['country'];	
         $gender 	=$_POST['gender'];
         $status 	=$_POST['status'];
         $email  	=$_POST['email'];
         $phoneNo    =$_POST['phn-no'];
         if (($name) && ($aLine1) && ($aLine2) &&($city) && ($country) && ($gender) && ($status) && ($email) && ($phoneNo)) {
        
         }else{
            
             $State=0;
             $this->view->State = $State;
             $UImsg= 'Empty Entries Detected, Please Try Again !';
             $this->view->UImsg = $UImsg;
             header('refresh:1 , URL =../Buyer/Account ');
             $this->view->display('Customer/UpdateAccount.php');
             exit;   
         }
 
 
         if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
           
             $State=0;
             $this->view->State = $State;
             $UImsg= 'Email format invalid, Please Try Again !';
             $this->view->UImsg = $UImsg;
             $this->view->display('Customer/UpdateAccount.php');
             exit;  
         }

 
         $res =$user->EmailCompair4buyer($email,$ID);
             if($res==true){
                   
                     $data =$user->updateBuyer($ID, $name, $email, $phoneNo, $country,$gender,$status, $city, $aLine1, $aLine2 );
                     
                     $UImsg= 'Successfully Updated';
                     $this->view->UImsg = $UImsg;
                     $State=1;
                     $this->view->State = $State;
                     header('refresh:1 , URL =../Buyer/Account ');
                     $this->view->display('Customer/UpdateAccount.php');
                     // header('Location:../ /BuyerSuccess');
                     exit();
             }else{
                 
                 $State=0;
                 $this->view->State = $State;
                 $UImsg= "Emaill-Address Already Taken Please Try Again";
                 $this->view->UImsg = $UImsg;
                 $this->view->display('Customer/UpdateAccount.php'); 
                 exit();
                     
                 
                 
             }	
      }
      
      $userID = $_SESSION['username'];
      $user = new BuyerM();
      $result = $user->getBuyer($userID);
      $UImsg = $result;
      $this->view->UImsg2 = $UImsg;
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
         $pass=$_POST['con-password'];

         $md5_new_pass=md5($new_pass);
         $username = $_SESSION['username'];

         if($pass != $new_pass){
            $State =0;
            $UImsg = 'Incorrect Password ,Please Try Again';
            $this->view->State=$State;
            $this->view->UImsg=$UImsg;
            $this->view->display('Customer/PassReset-afterLogin.php');
            exit();
         }
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
         $State=1;
         $district= $_POST['district'];
         $array2=array('Ampara', 'Anuradhapura', 'Badulla', 'Batticaloa', 'Colombo','Galle','Gampaha','Hambantota','Jaffna','Kalutara','Kandy','Kegalle','Kilinochchi','Kurunegala','Mannar','Matale','Matara','Monaragala','Mullaitivu','Nuwara Eliya','Polonnaruwa','Puttalam','Ratnapura','Trincomalee','Vavuniya');
         if (!in_array($district,$array2)){
         $State=0;  
         echo "hi";
         $UImsg2= "Invalid District Entered ,Please Insert a Correct District";
         $this->view->UImsgNotice=$UImsg2;    
         $this->view->State = $State;   
         }


         $buy = new BuyerM;
         $value =  (!empty($_COOKIE["items"])) ? $_COOKIE["items"] : "[]";
         $value = json_decode($value, true);
         $UImsg = $buy->checkout($value,$district);
         $this->view->UItotal=$UImsg;  
         if($State==0)  {
            header('refresh:1 , URL =../User/ADDShoppingCart ');
         }
         $this->view->display('Customer/Checkout.php');
      }



      public function paymentAction()
      {  
         $custom_1 =$_POST['custom_1'];  
         $district= $_POST['district'];
         $buy = new BuyerM;
         $value =  (!empty($_COOKIE["items"])) ? $_COOKIE["items"] : "[]";
         $value = json_decode($value, true);
         $UImsg = $buy->checkout($value,$district);   // details with product with delivery    
         $order = new ModelsOrder;
         $status = "Pending";
         $datetime = date("Y-m-d"); 
         $start_date = date_create($datetime);
         $datetime = date_format($start_date,"Y-m-d");
         date_add($start_date,date_interval_create_from_date_string($UImsg[5]. " Days" ));// longest peroid taken 
         $deliveryDeadline = date_format($start_date,"Y-m-d");
         $deliveryAddress = $_POST['address'];
         $amount =$UImsg[2];
         $buyUserID=$_SESSION['username'];
         $subtractProduct = new Product;
         $subtractProduct =$subtractProduct->subProducts($value);  // subtract available quantity from products in order

         if($subtractProduct == 0){   //if quantity <=0
            $State =0;
            $UImsg5 = 'Insufficient Product Quantity , Please try Again Later';
            $this->view->State=$State;
            $this->view->UImsgNotice=$UImsg5;
            header('refresh:2 , URL =../User/ADDShoppingCart ');
            $this->view->display('Customer/PG-confirm.php');
         }

         ///////////////////////////////////////////     promoter code from cookie
         if(!empty($_COOKIE["promoter"])){
            $value =  (!empty($_COOKIE["promoter"])) ? $_COOKIE["promoter"] : "[]";
            $value = json_decode($value,true);
            $proUserID=$value;
            
            $value2 =  (!empty($_COOKIE["items"])) ? $_COOKIE["items"] : "[]";
            $value2 = json_decode($value2, true);
            
            $totalcommision = new BuyerM;
            $totalCommission = $totalcommision->orderCommision($value2); // generate total commision for the order

         }else{   //if no promoter cookie found
            $proUserID=NULL;
            $totalCommission=NULL;

         }

         $data= $order->addOrder($status,$amount,$datetime,$deliveryAddress, $deliveryDeadline ,$buyUserID ,$proUserID ,$totalCommission);
         // add order as pending to database
         $data = array('merchant_id' => '1216939', 'return_url' => 'http://localhost/Buyer/PGreply','cancel_url' => 'http://127.0.0.1/buyer/checkout' ,'notify_url' => 'http://127.0.0.1/user/market' ,'first_name' =>$_POST['first_name'] ,'last_name' => '' ,'address' => $_POST['address'] , 'phone' => $_POST['phone'],'city' => $_POST['city'] ,'email' => $_POST['email'],'country' => 'Srilanka','amount' => $_POST['amount'],'items' =>$data,'currency' =>'LKR' ,'order_id' =>$data ,'custom_1' =>$custom_1);
         $this->view->data=$data;    
         $this->view->display('Customer/PG-confirm.php');   

         
      }

   // Buyer Orders Functions -----------------------------//

   public function PGreply()

   {
      $order = new ModelsOrder;
      $data= $order->getOrderID();
      $this->view->data=$data;    
      $this->view->display('Customer/PG reply.php');  
      
   }
   
   public function CurrentOrdersAction()
   {   $MSG ="";
       $State=1;

       //payment gateway  responce codes
       // status_code =  2    - payment successfull
       // status_code = -2    - payment failed
       // status_code = -1    - payment cancelled

       if (isset($_POST['status_code'])) {
           if ($_POST['status_code']==2) {      // successfull
                                                             
              $order = new ModelsOrder;
              $data= $_SESSION['custom_1'] ;
              $order_ID = $_POST['order_id'];
              $order->updateDelivery($data,$order_ID);      //update to prodinorder table
              $order-> Ordersuccess($order_ID);             //change order state from pending to success
              setcookie("items", "", time() - 3600, "/");   // delete cookies
              setcookie("promoter", "", time() - 3600, "/");
              $MSG = "Payment Successfull , Seller will Dispatch the products Soon";
              
           }elseif ($_POST['status_code']==-2) { // failed
               $order = new ModelsOrder;
               $order_ID = $_POST['order_id'];
               $order-> OrderFailled($order_ID); // delete the order 
               $data= $_SESSION['custom_1'] ;
               $order2 = new Product;
               $order2->addFailedproducts($data); //add the subtrated products back to the db
               $MSG = "Payment Failled , Please try again";
               $State=0;
           }

         
       }   
       $orders = new ModelsOrder;
       $orders2 = new ModelsOrder;
       $orders = $orders->getSuccessOrders($_SESSION['username']);   // view current successfull orders
       $orders2 = $orders2->getOrderproducts($_SESSION['username']); // get product details for the order
          $this->view->orders=$orders;   // UI messages
          $this->view->details=$orders2;  
          $this->view->State=$State;
          $this->view->UImsgNotice=$MSG;
          $this->view->display('Customer/currentOrders.php');
   }  
   public function CompletedOrdersAction()
   {

      if(!empty($_POST['rating'])){
         
         $prodID =$_POST['ProdID'];
         $msg=$_POST['description'];
         $rating =$_POST['rating'];
         $ID= $_SESSION['username'];

         $orders3 = new ModelsOrder;
         $orders3 = $orders3->productReceived($_POST['ProdID'],$_POST['OrderID']);
         $entry = new Feedback();
         $result = $entry->addFeedback($msg,$rating, $ID, $prodID);
         $entry->addRating($prodID);
         
      }
      $orders = new ModelsOrder;
      $orders2 = new ModelsOrder;
      $orders = $orders->getCompletedOrders($_SESSION['username']);
      $orders2 = $orders2->getReceivedproducts($_SESSION['username']);
      $this->view->orders=$orders; 
      $this->view->details=$orders2;  
      $this->view->display('Customer/CompletedOrders2.php');
   }

   public function FailedOrderAction()
   {
      $this->view->display('Customer/OrderNotReceived.php');
   }
   
   public function sellerMessage($seller_mail,$orderID,$username,$email,$prodName,$quantity,$msg)
   {
       $subject = "Buyer Inquiry : $orderID ";
       $headers = "MIME-Version: 1.0" . "\r\n";
       $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";   
       $headers .= '"From: Affiliox.com@gmail.com' . "\r\n";     
        $message = '<html><body>';
        $message .= '<table style="border-color: #666;" cellpadding="10">';
        $message .= "<tr style='font-size:20px'><td><strong>Order ID : $orderID</strong> </td></tr>";
        $message .= "<tr><td>username : $username</td></tr>";
        $message .= "<tr><td>Buyer Email : $email</td></tr>";
        $message .= "<tr><td>Product name  : $prodName  </td> <td> Quantity :$quantity</td></tr>";

        $message .= "<tr><td>Message : $msg</td></tr>";
        $message .= "</table>";
        $message .= "<p>User has initiated a conversation from Affiliox platform please conftinue the coversation forward in this platform and sort out any issues.</p>";
        $message .= "</body></html>";
                
       if (mail($seller_mail,$subject,$message,$headers)) {
           return true;
       } else {
          return false;
       }
   }
   public function ContactSellerAction()

   {  
      
      if(!empty($_POST['description'])){
      $msg =$_POST['description'];
      $prodName =$_POST['prodName'];
      $email="";
      $seller_mail="";
      $storeName=$_POST['storename'];
      $prdID=$_POST['ProdID'];
      $orderID=$_POST['OrderID'];
      $quantity =$_POST['quantity'];
      $username =$_SESSION['username'];
      $emailobj=new BuyerM;
      $emailobj =$emailobj->getBuyer($username);
      while ($row = $emailobj->fetch_assoc()) {
          $email=$row['email'];
          }
      $sellerEmail=new SellerM;
      $sellerEmail=$sellerEmail->getsellerEmail($storeName);
      while ($row = $sellerEmail->fetch_assoc()) {
         $seller_mail= $row['email'];
          }

      $seller_mail="thenuka.ops@gmail.com";
      
      $result= $this->sellerMessage($seller_mail,$orderID,$username,$email,$prodName,$quantity,$msg);
      if($result){

         
         $State=1;
         $UImsg = 'Email Sent Successfully,Seller will attend to your request ASAP!';
         $this->view->UImsgNotice =$UImsg;
         $this->view->State = $State;
         header('refresh:2; url=../Buyer/CurrentOrders');
         $this->view->display('Customer/contactSeller.php');
      
         exit();
      }else{
          $State=0;
          $UImsg = 'Error Occured While sending Email, Please try again later';
          $this->view->UImsgNotice= $UImsg;
          $this->view->State = $State;
          $this->view->display('Customer/contactSeller.php');
          header('refresh:2; url=../Buyer/CurrentOrders');

          exit();
      } 

   }

      if (!empty($_POST['ProdID'])) {

          $prdID=$_POST['ProdID'];
          $orderID=$_POST['OrderID'];

          $orders = new ModelsOrder;
          $orders = $orders->productReceivedConfirmation($prdID, $orderID);
          $this->view->order=$orders;

          $this->view->display('Customer/contactSeller.php');
      }else{
         header("Location:../Buyer/CurrentOrders");
      }
   }

   public function OrderSuccessAction()
   {
      $prdID=$_POST['ProdID'];
      $orderID=$_POST['OrderID'];
      $orders = new ModelsOrder;
      $orders = $orders->productReceivedConfirmation($prdID,$orderID);
      $this->view->order=$orders;
      $this->view->display('Customer/ConfirmReceived.php');
   }

   // Buyer Feedbacks Functions -----------------------------//
   public function FeedbackViewAction()
   {


      $entry = new Feedback();
      $result = $entry-> getFeedbacks($_SESSION['username']);
      $this->view->data= $result;

      $this->view->display('Customer/viewFeedbacks.php');
      
   }


   public function SubmitFeedbackAction()
   {  
      if(isset($_POST['ProdID'])){
                
          }else{
            header("Location:../Buyer/CompletedOrders");
         }


       if (isset($_POST['rating'])) {
            
         if(empty($_POST['description'])){
            $message=NULL;
         }else{
             $message = $_POST['description'];
         }
           $rating = $_POST['rating'];
           $username = $_SESSION['username'];
           $prodID = $_POST['ProdID'];

           $entry = new Feedback();
           $result = $entry->addFeedback($message, $rating, $username, $prodID);

           $entry->addRating($prodID);
           if ($result) {
               $State=1;
               $UImsg = 'Feedback Submitted Successfully';
               $this->view->UImsgNotice =$UImsg;
               $this->view->State = $State;
               header('refresh:1; url=../Buyer/CompletedOrders');
               $this->view->display('Customer/feedback.php');
               exit();
               
           } else {
               $State=0;
               $UImsg = 'Error Occured While Submitting Please try again later';
               $this->view->UImsgNotice= $UImsg;
               $this->view->State = $State;
               $this->view->display('Customer/feedback.php');
               exit();
           }
          
       } 
       
       $orders = new ModelsOrder;
       $orders = $orders->productReceivedConfirmation($_POST['ProdID'],$_POST['OrderID']);
       $this->view->orders=$orders;
       $this->view->display('Customer/feedback.php');
   }
   // Buyer Feedbacks Functions -----------------------------//
   public function HelpAction()
   {
      $this->view->display('Common/ContactUs.php');
   }

   public function PG_reply()
   {

      $this->view->display('Common/PG reply.php');
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
