<?php
namespace App\Controllers;
use Core\View;
class Seller extends \Core\Controller{

    public function indexAction(){
        echo 'Index method is called';
        View::display('Common/Account-Selectv2.html');
    }

    public function get(){
        echo "get method is called";

        echo'<pre>';
        echo htmlspecialchars(print_r($_GET, true));
        echo'</pre>';
    }

    public function addTransAction(){
       
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