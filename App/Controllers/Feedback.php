<?php
namespace App\Controllers;
use Core\View;
use App\Models\TransactionM;
class Transaction extends \Core\Controller{

    public function indexAction(){
        echo 'Index method is called';
        View::display('Common/Account-Selectv2.html');
    }

    public function addPromoAction(){
        $trans = new TransactionM();
        $status = $trans->addTransPromo(1.0, ' ', ' ', 'dilshan98');
        if($status){
            echo "Success";
        }else{
            echo "Unsuccessful";
        }
    }

    public function getAction(){
        echo "get method is called";
        $trans = new TransactionM();
        $transactions = $trans->getTrans("dilshan98");
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


}