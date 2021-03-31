<?php
namespace Core;
class Router
{

    protected $routes = [];
    protected $params  = [];

    public function add($route, $params = [])
    {
        // $this->routes[$route] = $params;  
        //route to reg-ex

        $route = preg_replace('/\//', '\\/', $route); //forward slashes
        $route = preg_replace('/\{([a-z]+)\}/', '(?P<\1>[a-z-]+)', $route); //variables
        $route = preg_replace('/\{([a-z]+):([^\}]+)\}/', '(?P<\1>\2)', $route); //id values
        $route = '/^' . $route . '$/i'; //start and end
         $this->routes[$route] = $params;
    }

    public function getRoutes()
    {
        return $this->routes;
    }

    public function match($url)

    {
        $url= $this->removeQuery($url);
        
        foreach ($this->routes as $route => $params) {
            if(preg_match($route,$url,$matches)){
                foreach ($matches as $key => $value) {
                    if(is_string($key)){
                    $params[$key]=$value;
                    }
                }
                $this->params=$params;
                return true;
            }
        }
        return false;
    }

    protected function removeQuery($url){
        if($url != ''){
            $set=explode('&',$url,3);
            if(strpos($set[0], '=') === false){
                    $url =$set[0];
            }else{

                $url = '';
            }    
      }
        return $url;
    }


    public function deliver($url)
    {
        if($this->match($url)){
            
        $controller=$this->params['controller'];
        $controller="App\Controllers\\$controller";
        if(class_exists($controller)){
            $con_object=new $controller;

            $action=$this->params['action'];
            if(is_callable([$con_object,$action])){
                $con_object->$action();
            }else{
                        
            include '../app/views/Common/E404.php';
            header('refresh:3; url=../');

            }
        }else {

            include '../app/views/Common/E404.php';
            header('refresh:3; url=../');

        }
    }else{
        include '../app/views/Common/E404.php';
        header('refresh:3; url=../');
        
        
    }
    }


    public function getParam()
    {
        return $this->params;
    }
}

