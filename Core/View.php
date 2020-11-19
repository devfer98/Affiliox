<?php
namespace Core;

Class View{
    // public $UImsga;
    public function display($view){
        if(session_id() == '') {
            session_start();
        }

        if(isset($_SESSION['type']) && ($_SESSION['type'] == 'buyer') ){
<<<<<<< HEAD
            $header="../App/Views/Templete/Buyer_Header.php";
            $footer="../App/Views/Templete/Buyer_Footer.php";
        }elseif (isset($_SESSION['type']) && ($_SESSION['type'] == 'seller') ) {
            // $header="../App/Views/Templete/sellerHeader.php";
            // $footer="../App/Views/Templete/sellerFooter.php";
=======

            $header="../App/Views/Templete/Buyer_header.php";
            $footer="../App/Views/Templete/Buyer_footer.php";
        }elseif (isset($_SESSION['type']) && ($_SESSION['type'] == 'selller') ) {
            // $header="../App/Views/Templete/Seller_Header.php";
            // $footer="../App/Views/Templete/Seller_Footer.php";
>>>>>>> 5a17fd2d5208fe3cbb4c720906bcca3a192a0cee
        }elseif (isset($_SESSION['type']) && ($_SESSION['type'] == 'promoter') ) {
            // $header="../App/Views/Templete/Promoter_Header.php";
            // $footer="../App/Views/Templete/Promoter_Footer.php";
        }elseif (isset($_SESSION['type']) && ($_SESSION['type'] == 'admin') ) {
<<<<<<< HEAD
            // $header="../App/Views/Templete/admin_Header.php";
            // $footer="../App/Views/Templete/admin_Footer.php";
        }else{
            $header="../App/Views/Templete/User_Header.php";
            $footer="../App/Views/Templete/User_Footer.php";
=======
            $header="../App/Views/Templete/Admin_header.php";
            $footer="../App/Views/Templete/Admin_footer.php";
        }else{
    
            $header="../App/Views/Templete/User_header.php";
            $footer="../App/Views/Templete/User_footer.php";
>>>>>>> 5a17fd2d5208fe3cbb4c720906bcca3a192a0cee
        }
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