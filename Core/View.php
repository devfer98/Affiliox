<?php
namespace Core;

Class View{

    public function display($view){
        $file = "../App/Views/$view";
        if(is_readable($file)){
            require $file;
        }else {
            echo "$file not Found";
        }
    }
}