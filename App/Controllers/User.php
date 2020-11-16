<?php
namespace App\Controllers;
use Core\View;
class User extends \Core\Controller{

    public function indexAction(){
       $this->view->display('Common/index.php');
    }

    public function addAction(){
        echo 'add method is called';
    }

    public function get(){
        echo "get method is called";
        echo'<pre>';
        echo htmlspecialchars(print_r($_GET, true));
        echo'</pre>';
    }

    public function HomeAction(){
        echo 'add method is called';
    }
    public function AboutUSAction(){
        echo 'add method is called';
    }
    public function HelpAction(){
        echo 'add method is called';
    }
    public function AccountAction(){
        echo 'add method is called';
    }

    public function FacebookAction(){
        echo 'add method is called';
    }

    protected function before()
    {   
        if(session_id() == '') {
            session_start();
        }

    }


}