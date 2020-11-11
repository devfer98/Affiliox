<?php

namespace App\Controllers;
use Core\View;
use App\Models\User;


class BuyerCon extends \Core\Controller {

    public function accountIndexAction(){
        $this->view->display('Common/market.php');

    }

    public function helpIndexAction(){

        $this->view->display('Common/SelllerReg.php');
        
     }



    protected function before()
    {   
        if(session_id() == '') {
            session_start();
        }
        if(isset($_SESSION['type']) && ($_SESSION['type'] == 'buyer') ){
            return true;
        }else{
            header("Location:../Login/view");
            
        }
    }

}