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

    



}