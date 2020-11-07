<?php
namespace App\Controllers;
use Core\View;
class User extends \Core\Controller{

    public function indexAction(){
        echo 'Index method is called';
        View::display('User/Interfaces/feedback.html');
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

    
    protected function before()
    {
        echo 'Login ? ';
    }

    protected function after()
    {
        echo ' Bye ? ';
    }


}