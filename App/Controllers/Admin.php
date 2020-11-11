<?php
namespace App\Controllers;
class Admin extends \Core\Controller {

    public function indexAction(){
        $this->view->display('Customer/CompletedOrders.html');
    }

    public function addAction(){
        echo 'Admin add method is called';
    }
}