<?php
namespace App\Controllers;
use Core\View;
class Seller extends \Core\Controller{

    public function indexAction(){
        echo 'Index method is called';
        View::display('Common/Account-Selectv2.html');
    }

    public function addAction(){
        echo 'Seller add method is called';
        
        $status = $this->Seller->addSeller('dilshan98', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ');
    }

    public function get(){
        echo "get method is called";
        // $this->\Models\Seller->getSeller();

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