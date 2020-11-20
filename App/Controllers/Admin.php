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