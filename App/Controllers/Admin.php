<?php
namespace App\Controllers;
use Core\View;
class Admin extends \Core\Controller {

    public function indexAction(){
        $this->view->display('Customer/market.php');
    }

    public function ApproveRegAction(){
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