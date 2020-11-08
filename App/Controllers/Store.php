<?php
namespace App\Controllers;
use Core\View;
use App\Models;
class Store extends \Core\Controller {

    public function indexAction(){
        View::display('User/Interfaces/productDetails.html');
    }

    public function addAction(){
        echo 'Product add method is called';
        echo '<p>Query string parameters: <pre>' .
        htmlspecialchars(print_r($_GET, true)) . '</pre></p>';
    }

    public function viewAction(){

        $data=User::showData();
        View::display('User/Interfaces/productDetails.html',['data'=>$data]);
    }

}