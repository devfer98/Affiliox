<?php
namespace Core;

Class View{

    public function display($view){
        
        if(session_id() == '') {
            session_start();
        }

        if(isset($_SESSION['type']) && ($_SESSION['type'] == 'buyer') ){
            $header="../App/Views/Templete/Buyer_Header.php";
            $footer="../App/Views/Templete/Buyer_Footer.php";
        }elseif (isset($_SESSION['type']) && ($_SESSION['type'] == 'selller') ) {
            // $header="../App/Views/Templete/Seller_Header.php";
            // $footer="../App/Views/Templete/Seller_Footer.php";
        }elseif (isset($_SESSION['type']) && ($_SESSION['type'] == 'promoter') ) {
            // $header="../App/Views/Templete/Promoter_Header.php";
            // $footer="../App/Views/Templete/Promoter_Footer.php";
        }elseif (isset($_SESSION['type']) && ($_SESSION['type'] == 'admin') ) {
            // $header="../App/Views/Templete/admin_Header.php";
            // $footer="../App/Views/Templete/admin_Footer.php";
        }else
            $header="../App/Views/Templete/User_Header.php";
            $footer="../App/Views/Templete/User_Footer.php";

        $file = "../App/Views/$view";
        if(is_readable($file)){
            include $header;
            // require $header;
            require $file;
            include $footer;
            // require $footer;

        }else {

            echo "$file not Found";

        }

    }
}