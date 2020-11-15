<?php

namespace App\Controllers;
use Core\View;
use App\Models\Buyer;
use App\Models\Seller;
use App\Models\Promoter;

class Transaction extends \Core\Controller{

   
    public function promoterTransToDBAction(){
        
        $user = new Promoter();  
        $ammount    = $_POST['ammount'];
        $status = 1;	    
       // $res =$user->EmailCompair($email,$userID);
           if(isset($_POST['ammount'])){
                    $user->transPromo($ammount,$status);
                    header('Location:../Transaction/promoterTransSuccess');
            }
            else{
                $UImsg= 'Invalid ammount !';
                $this->view->UImsg = $UImsg;
                $this->view->display('Promoter/withdraw-earnings.php');   
                    
                echo "User already exist";
                
            }	
    }

    public function getAction(){
        echo "get method is called";
        $trans = new TransactionM();
        $transactions = $trans->getTrans($_GET['userID']);
        while ($myrow = $transactions->fetch_assoc()) {
            printf("%s %s %s %s %s\n", $myrow['transID'], $myrow['amount'], $myrow['status'], $myrow['date'], $myrow['userID'] );
        }
        // echo'<pre>';
        // echo htmlspecialchars(print_r($_GET, true));
        // echo'</pre>';
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