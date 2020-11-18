<?php

namespace App\Controllers;
use Core\View;
use App\Models\Buyer;
use App\Models\Seller;
use App\Models\Promoter;


class Transaction extends \Core\Controller{
    
   
    public function promoToDBAction(){

        $user = new Promoter();
        
          
    }

    public function getAction(){
        
    }
    
    protected function before()
    {
        echo 'Login ? ';
    }

    protected function after()
    {
        echo ' Bye ? ';
    }

    public function promoterTransSuccessAction(){
        $this->view->display('Promoter/payout-history.php');
    }

}