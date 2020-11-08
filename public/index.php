<?php
//Controller files
// require '../App/Controllers/User.php';
// autoload controller files

spl_autoload_register(function($class){
    $root=dirname(__DIR__);
    $file=$root . '/' . str_replace('\\','/',$class) . '.php';
    if(Is_readable($file)){
        require $file;
    }
});

//Route File
// require '../Core/Router.php';

$newrouter = new Core\Router();

// echo 'Requested URL = "' . $_SERVER['QUERY_STRING'] . '"';

//Match URL

// $newrouter->add('', ['controller'=>'Home', 'action'=>'index']);
// $newrouter->add('pord', ['controller' => 'Prod', 'action' => 'index']);
// $newrouter->add('posts', ['controller' => 'Posts', 'action' => 'index']);
// $newrouter->add('posts/new', ['controller' => 'Posts', 'action' => 'new']);

$newrouter->add('{controller}/{action}');

// $newrouter->add('user/{controller}/{action}');
// $newrouter->add('user/{controller}/{id:\d+}/{action}');

// $newrouter->add('seller/{controller}/{action}');
// $newrouter->add('seller/{controller}/{id:\d+}/{action}');

// $newrouter->add('promoter/{controller}/{action}');
// $newrouter->add('promoter/{controller}/{id:\d+}/{action}');

// $newrouter->add('admin/{controller}/{action}');
// $newrouter->add('admin/{controller}/{id:\d+}/{action}');


echo'<pre>';
echo htmlspecialchars(print_r($newrouter->getRoutes(), true));
echo'</pre>';


$url=$_SERVER['QUERY_STRING'];
$newrouter->deliver($url);














// All routes
// echo '<pre>';
// var_dump($newrouter->getRoutes());
// echo '</pre>';

// New entry
