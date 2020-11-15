<?php
namespace App\Controllers;
use Core\View;
class Admin extends \Core\Controller {

    public function indexAction(){
        $this->view->display('Customer/market.php');
    }

    public function addAction(){
        echo 'Admin add method is called';
    }
}