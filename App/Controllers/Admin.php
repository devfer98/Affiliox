<?php
namespace App\Controllers;
use Core\View;
use App\Models\AdminM;
use App\Models\SellerM;
use App\Models\PromoterM;

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
        $promoter= new PromoterM();
        $this->view->actPromoters=$promoter->getActive();
        $this->view->display('Admin/ManageAccount.php');
    }

    public function ApprovesSellerAction(){
        $this->view->display('Admin/AddAdmin.php');
    } 

    public function AddAdminsAction(){
        $this->view->display('Admin/AddAdmin.php');
    }

    public function AdminDashboardAction(){
        // $userID = $_SESSION['username'];
        // $user = new AdminM();
        // $result = $user->getAdminProfile($userID);
        // $UImsg = $result;
        // $this->view->UImsg=$UImsg;
        $this->view->display('Admin/AdminDashboard.php');
    }

    public function AdminProfileAction(){
        $this->view->display('Admin/AdminProfile.php');
    }

    public function AdminStatisticsAction(){
        $this->view->display('Admin/AdminStatistics.php');
    }

    public function EditAdminAction(){
        $this->view->display('Admin/EditAdmin.php');
    }

    public function ReviewFeedbackAction(){
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