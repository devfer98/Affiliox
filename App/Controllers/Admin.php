<?php
namespace App\Controllers;
use Core\View;
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

    public function ApprovesSellerAction(){
        $this->view->display('Admin/AddAdmin.php');
    }

    public function AddAdminsAction(){
        $this->view->display('Admin/AddAdmin.html');
    }

    public function AdminDashboardAction(){
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

    public function ManageAccountAction(){
        $this->view->display('Admin/ManageAccount.php');
    }

    public function ReviewFeedbackAction(){
        $this->view->display('Admin/ReviewFeedback.php');
    }

    public function PendPromoterAction(){
        $this->view->display('Admin/PendPromoter.php');
    }

    public function PendSellerAction(){
        $this->view->display('Admin/PendSeller.php');
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