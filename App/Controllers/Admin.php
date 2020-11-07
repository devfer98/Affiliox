<?php
namespace App\Controllers;
class Admin extends \Core\Controller {

    public function indexAction(){
        echo ' Admin Index method is called';
    }

    public function addAction(){
        echo 'Admin add method is called';
    }
}