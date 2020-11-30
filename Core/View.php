<?php
namespace Core;

Class View{
    public function display($view){
        if(session_id() == '') {
            session_start();
            
        }

        if(isset($_SESSION['type']) && ($_SESSION['type'] == 'buyer') ){

            $header="../App/Views/Templete/Buyer_header.php";
            $footer="../App/Views/Templete/Buyer_footer.php";
        }elseif (isset($_SESSION['type']) && ($_SESSION['type'] == 'seller') ) {
            $header="../App/Views/Templete/sellerHeader.php";
            $footer="../App/Views/Templete/sellerFooter.php";
        }elseif (isset($_SESSION['type']) && ($_SESSION['type'] == 'promoter') ) {
            $header="../App/Views/Templete/Promoter_Header.php";
            $footer="../App/Views/Templete/Promoter_Footer.php";
        }elseif (isset($_SESSION['type']) && ($_SESSION['type'] == 'admin') ) {
            $header="../App/Views/Templete/Admin_header.php";
            $footer="../App/Views/Templete/Admin_footer.php";
        }elseif (!isset($_SESSION['type']) || ($_SESSION['type'] == '')){
    
            $header="../App/Views/Templete/User_header.php";
            $footer="../App/Views/Templete/User_footer.php";
        }

        $file = "../App/Views/$view";
        if(is_readable($file)){
            if($view!="Seller/miniStoreView.php"){
                include $header;
                // require $header;
                require $file;
                include $footer;
                // require $footer;
            }else{
                require $file;
            }
        }else {

            echo "$file not Found";

        }

    }
}