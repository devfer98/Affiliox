<?php

class Transaction {

    function __construct() {
        include ("connect.php");
    }
    
    public function addTransSell() {

    }

    public function addTransPromo($transID, $ammount, $status, $date, $userID) {
    	$addBuyer = "insert into transaction values ('".$userID."', '".$ammount."', '".$status."', '".$date."', '".$userID."')";
                
        mysqli_query($conn,$addBuyer)or die (mysqli_error($conn));
    }

    public function getTrans($userID) {
    	$query = "select userID from transaction WHERE userID = '".$userID."'";
        $buyer = mysqli_query($conn,$query);

        return $promoter;
    }
    
}
