<?php
namespace App\Controllers;
use Core\View;
use App\Models\AdminM;
use App\Models\SellerM;
use App\Models\PromoterM;
use App\Models\BuyerM;
use App\Models\MinistoreM;
use App\Models\Feedback;

class Admin extends \Core\Controller {

    public function indexAction(){
        $this->view->display('Customer/market.php');
    }

    public function ApproveRegAction(){
        $seller= new SellerM();
        $this->view->pendSellers=$seller->getPending();
        $promoter= new PromoterM();
        $this->view->pendPromoters=$promoter->getPending();
        $this->view->display('Admin/VerifyUser.php');
    }

    public function ManageAccountAction(){
        $seller= new SellerM();
        $this->view->actSellers=$seller->getActive();
        $this->view->banSellers=$seller->getBanned();
        $promoter= new PromoterM();
        $this->view->actPromoters=$promoter->getActive();
        $this->view->banPromoters=$promoter->getBanned();
        $this->view->display('Admin/ManageAccount.php');

    }

    //public function ApprovesSellerAction(){
    //   $this->view->display('Admin/AddAdmin.php');
    //} 

    public function AddAdminsAction(){
        $this->view->display('Admin/AddAdmin.php');
    }

    public function AdminDashboardAction(){
        $Admin= new AdminM();
        $this->view->countAdmins=$Admin->getCount  ();
        $seller = new SellerM();
        $this->view->countSellers=$seller->getCount  ();
        $promoter= new PromoterM();
        $this->view->countPromoters=$promoter->getCount();
        $this->view->PromoteCount=$promoter->getPromoteCount();
        $this->view->ClickCount=$promoter->getClickCount();
        $Buyer= new BuyerM();
        $this->view->countBuyers=$Buyer->getCount   ();
        $Ministore= new MinistoreM();
        $this->view->countMinistores=$Ministore->getCount   ();
        $this->view->display('Admin/AdminDashboard.php');
        // $userID = $_SESSION['username'];
        // $user = new AdminM();
        // $result = $user->getAdminProfile($userID);
        // $UImsg = $result;
        // $this->view->UImsg=$UImsg;
    }

    public function AdminProfileAction(){
      $userID = $_SESSION['username'];
      $user = new AdminM();
      $result = $user->getAdmin($userID);
      $UImsg = $result;
      $this->view->UImsg = $UImsg;
      $this->view->display('Admin/AdminProfile.php');
    }

    public function AdminStatisticsAction(){
        $seller = new SellerM();
        $this->view->countSellers=$seller->getCount  ();
        $promoter= new PromoterM();
        $this->view->countPromoters=$promoter->getCount();
        $this->view->PromoteCount=$promoter->getPromoteCount();
        $this->view->ClickCount=$promoter->getClickCount();
        $Buyer= new BuyerM();
        $this->view->countBuyers=$Buyer->getCount   ();
        $Ministore= new MinistoreM();
        $this->view->countMinistores=$Ministore->getCount   ();
        $this->view->display('Admin/AdminStatistics.php');
    }

    public function EditAdminAction(){
        $userID = $_SESSION['username'];
        $user = new AdminM();
        $result = $user->getAdmin($userID);
        $UImsg = $result;
        $this->view->UImsg = $UImsg;
        $this->view->display('Admin/EditAdmin.php');
    }
    //     $id = $_GET['id'];
    //     $user = new AdminM();
    //     $result = $user->getAdmin($id);
    //     print_r($result);
    //     die;
    //      if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //          $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
    //          $data = [
    //             'userID' => $_GET['id'],
    //             'name' => trim($_POST['name']),
    //             'status' => trim($_POST['status']),
    //             'email' => trim($_POST['email']),
    //             'phoneNo' => trim($_POST['phoneNo']),
    //             'age' => trim($_POST['age']),
    //             'dob' => trim($_POST['dob']),
    //             'gender' => trim($_POST['gender']),
    //             'country' => trim($_POST['country']),
    //             'city' => trim($_POST['city']),
    //             'aLine1' => trim($_POST['aLine1']),
    //             'aLine2' => trim($_POST['aLine2']),
    //             'position' => trim($_POST['position'])
    //          ];

    //          $user = new AdminM();
    //          if($user->updateAdmin($data)){
    //              header('location:AdminProfile');
    //          } else {
    //              die('Something Went Wrong');
    //          }
    //      }
    //     $view = new View("Admin/EditAdmin");
    //     $view->assign('userID',$result['id']);
    //     $view->assign('name',$result['name']);
    //     $view->assign('status',$result['status']);
    //     $view->assign('email',$result['email']);
    //     $view->assign('phoneNo',$result['phoneNo']);
    //     $view->assign('age',$result['age']);
    //     $view->assign('dob',$result['dob']);
    //     $view->assign('country',$result['country']);
    //     $view->assign('city',$result['city']);
    //     $view->assign('aLine1',$result['aLine1']);
    //     $view->assign('aLine2',$result['aLine2']);
    //     $view->assign('position',$result['position']);


    public function ReviewFeedbackAction(){
        $entry = new Feedback();
        $result = $entry-> getFeedbacks($_SESSION['username']);
        $this->view->data= $result;
        $this->view->display('Admin/ReviewFeedback.php');
    }

    public function PendSellerAction(){
        $seller = new SellerM();
        $this->view->sellDetails = $seller->getSeller($_GET['id']);
        $this->view->display('Admin/SellerProfile.php');
    }

    public function PendPromoterAction(){
        $promoter= new PromoterM();
        $this->view->proDetails = $promoter->getPromoterProfile($_GET['id']);
        $this->view->display('Admin/PromoterProfile.php');
    }

    public function UpdateSellStatusAction(){
        $seller = new SellerM();
        $seller->updateStatus($_POST['username'], $_POST['status']);
        // header("Location:../Admin/ApproveReg");
        $this->ApproveRegAction();
    }

    public function UpdateProStatusAction(){
        $promoter = new PromoterM();
        $promoter->updateStatus($_POST['username'], $_POST['status']);
        // header("Location:../Admin/ApproveReg");
        $this->ApproveRegAction();
    }

    public function ActSellerAction(){
        $seller = new SellerM();
        $this->view->sellDetails = $seller->getSeller($_GET['id']);
        $this->view->display('Admin/SellerProfile.php');
    }

    public function ActPromoterAction(){
        $promoter= new PromoterM();
        $this->view->proDetails = $promoter->getPromoterProfile($_GET['id']);
        $this->view->display('Admin/PromoterProfile.php');
    }

    public function BanSellStatusAction(){
        $seller = new SellerM();
        $seller->banStatus($_POST['username'], $_POST['status']);
        // header("Location:../Admin/ManageAccount");
        $this->ManageAccountAction();
    }

    public function BanProStatusAction(){
        $promoter = new PromoterM();
        $promoter->banStatus($_POST['username'], $_POST['status']);
        // header("Location:../Admin/ManageAccount");
        $this->ManageAccountAction();
    }

    public function BanSellerAction(){
        $seller = new SellerM();
        $this->view->sellDetails = $seller->getSeller($_GET['id']);
        $this->view->display('Admin/SellerProfile.php');
    }

    public function BanPromoterAction(){
        $promoter= new PromoterM();
        $this->view->proDetails = $promoter->getPromoterProfile($_GET['id']);
        $this->view->display('Admin/PromoterProfile.php');
    }

    public function UnBanSellStatusAction(){
        $seller = new SellerM();
        $seller->UnbanStatus($_POST['username'], $_POST['status']);
        // header("Location:../Admin/ManageAccount");
        $this->ManageAccountAction();
    }

    public function UnBanProStatusAction(){
        $promoter = new PromoterM();
        $promoter->UnbanStatus($_POST['username'], $_POST['status']);
        // header("Location:../Admin/ManageAccount");
        $this->ManageAccountAction();
    }
    public function PasswordResetAction()
    {
 
       if (isset($_POST['current_password'])) {
     
          $current_pass= $_POST['current_password'];
          $md5_pass=md5($current_pass);
          $new_pass = $_POST['password'];
          $md5_new_pass=md5($new_pass);
          $username = $_SESSION['username'];
          $user = new AdminM();
          $result = $user->updatePassword($md5_pass,$md5_new_pass, $username);
          if ($result) {
             $State =1;
             $UImsg = 'Password Reset Successfull';
             $this->view->State=$State;
             $this->view->UImsg=$UImsg;
             $this->view->display('Admin/PasswordReset.php');
            
          }else{
              $State =0;
              $UImsg = 'Incorrect Password ,Please Try Again';
              $this->view->State=$State;
              $this->view->UImsg=$UImsg;
              $this->view->display('Admin/PasswordReset.php');
          }
 
       }else{
           $this->view->display('Admin/PasswordReset.php');
       }
    }

    protected function before()
    {      
       
        if(session_id() == '') {
            session_start();
        }
        if(isset($_SESSION['type']) && ($_SESSION['type'] == 'admin') ){
            return true;
        }else{
            header("Location:../Login/index");
            
        }
    }

}