<?php

namespace App\Models;
class Product extends \Core\Connect {

    function __construct() {
    }

    public function add( $prodName, $availQuantity, $description, $price, $comRate, $name, $catID, $mainImage, $otherImages) {
        
        $conn=static::connectDB();
        $stmt = $conn->prepare("INSERT INTO product (prodName,availQuantity,description,status,price,overallRating,comRate,name,catID) VALUES ( ?, ?, ?, 'available', ?, 0.0, ?, ?, ?)");
        $stmt->bind_param("sisddsi", $prodName, $availQuantity, $description, $price, $comRate, $name, $catID);
        if ($stmt->execute()) {
            // echo "m working";
            $productID = mysqli_insert_id($conn);
            $stmt->close();
            if($this->addImages($productID, $mainImage, $otherImages)){
                return true;
            }else{
                return false;
            }
        }else{
            // echo 'm not working';
            echo $stmt->error;
            return false;
        }
    }

    public function addImages($productID, $mainImage, $otherImages) {
        
        $conn=static::connectDB();
        $target_dir = "images/upload/";
        $target_file = $target_dir . basename($mainImage['name']);

        // Select file type
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Valid file extensions
        $extensions_arr = array("jpg","jpeg","png","gif");

        // Check extension
        if( in_array($imageFileType,$extensions_arr) ){
        
            // Insert record
            $stmt = $conn->prepare("INSERT INTO productimage (productID, imageCode, status) VALUES ( ?, ?, 'main')");
            $stmt->bind_param("is", $productID, $mainImage['name']);
        
            if ($stmt->execute()) {
                $stmt->close();
                // Upload file
                move_uploaded_file($mainImage['tmp_name'],$target_dir.$mainImage['name']);
                return true;
            }else{
                // echo "m not working";
                echo $stmt->error;
                return false;
            }
        }
    }

   
}
    

