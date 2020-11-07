<?php
namespace core;
abstract class Controller
{
    public function __call($name,$args){

        $method =$name.'Action';
        if(method_exists($this,$method)){
            if($this->before() !== false){
                call_user_func_array([$this,$method], $args);
                $this->after();

            }
        }else{
            echo "$method not found in controller" .get_class ($this);
        }
    }

    protected function before()
    {
     //Logged in?
    }

    protected function after()
    {
        
    }


}