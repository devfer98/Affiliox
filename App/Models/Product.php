<?php

namespace App\Models;
class Product extends \Core\Connect {

    function __construct() {
    }

    public function add( $prodName, $availQuantity, $description, $price, $comRate, $name, $catID) {
        
        $conn=static::connectDB();
        $stmt = $conn->prepare("INSERT INTO product (prodName,availQuantity,description,status,price,overallRating,comRate,name,catID) VALUES ( ?, ?, ?, 'available', ?, 0.0, ?, ?, ?)");
        $stmt->bind_param("sisddsi", $prodName, $availQuantity, $description, $price, $comRate, $name, $catID);
        if ($stmt->execute()) {
            echo "m working";
            $stmt->close();
            return true;
        }else{
            echo 'm not working';
            echo $stmt->error;
            return false;
        }
    }

    public function addImage( $prodName, $availQuantity, $description, $price, $comRate, $name, $catID) {
        
        $conn=static::connectDB();
        $stmt = $conn->prepare("INSERT INTO product (prodName,availQuantity,description,status,price,overallRating,comRate,name,catID) VALUES ( ?, ?, ?, 'available', ?, 0.0, ?, ?, ?)");
        $stmt->bind_param("sisddsi", $prodName, $availQuantity, $description, $price, $comRate, $name, $catID);
        if ($stmt->execute()) {
            echo "m working";
            $stmt->close();
            return true;
        }else{
            echo 'm not working';
            echo $stmt->error;
            return false;
        }
    }

   
}
    

