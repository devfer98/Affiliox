<?php

namespace App\Models;


class User extends \Core\Connect
{



   public function authenticate($username, $password)
   {

      $conn = static::connectDB();
      $flag = 0;

      $stmt = $conn->prepare("SELECT * FROM buyer WHERE userID = ? AND password= ?");
      $stmt->bind_param("ss", $username, $password);
      if ($stmt->execute()) {

         $result = $stmt->get_result();

         if ($result->num_rows === 0) {
            $flag = 0;
         } else {
            $flag = 1;
            session_start();
            $_SESSION["username"] = $username;
            $_SESSION["type"] = 'buyer';
            return $flag;
         }
      }
      $stmt = $conn->prepare("SELECT * FROM seller WHERE userID = ? AND password= ? AND accountStatus = ?");
      $accStats = 'Active';
      $stmt->bind_param("sss", $username, $password, $accStats);
      if ($stmt->execute()) {

         $result = $stmt->get_result();

         if ($result->num_rows === 0) {
            $flag = 0;
         } else {
            $flag = 2;
            session_start();
            $_SESSION["username"] = $username;
            $_SESSION["type"] = 'seller';
            return $flag;
         }
      }

      $stmt = $conn->prepare("SELECT * FROM promoter WHERE userID = ? AND password= ? AND accountStatus = ?");
      $accStats = 'Active';
      $stmt->bind_param("sss", $username, $password, $accStats);
      if ($stmt->execute()) {

         $result = $stmt->get_result();

         if ($result->num_rows === 0) {
            $flag = 0;
         } else {
            $flag = 3;
            session_start();
            $_SESSION["username"] = $username;
            $_SESSION["type"] = 'promoter';
            return $flag;
         }
      }

      $stmt = $conn->prepare("SELECT * FROM admin WHERE userID = ? AND password= ?");

      $stmt->bind_param("ss", $username, $password);
      if ($stmt->execute()) {

         $result = $stmt->get_result();

         if ($result->num_rows === 0) {
            $flag = 0;
         } else {
            $flag = 4;
            session_start();
            $_SESSION["username"] = $username;
            $_SESSION["type"] = 'admin';
            return $flag;
         }
      }
   }

   function PW_EmailCompair($input)
   {

      $conn = static::connectDB();

      $stmt0 = $conn->prepare('select * from promoter where email = ?');
      $stmt1 = $conn->prepare('select * from buyer where email = ?');
      $stmt2 = $conn->prepare('select * from seller where email = ?');
      $stmt3 = $conn->prepare('select * from admin where email = ?');
      $stmt0->bind_param("s", $input);
      $stmt1->bind_param("s", $input);
      $stmt2->bind_param("s", $input);
      $stmt3->bind_param("s", $input);
      if ($stmt1->execute()) {
         $result = $stmt1->get_result();
         if ($result->num_rows == 1) {
            while ($row = $result->fetch_assoc()) {
               //row
            }
            return true;
         } else {
            return false;
         }
      }
   }

   function Emailcompair($input,$pass)
   {
      
      $conn = static::connectDB();
      $accstatus = 'Active';
      $flag=0;
      $stmt0 = $conn->prepare("UPDATE promoter SET password=? WHERE email=?  AND accountStatus=?");
      $stmt1 = $conn->prepare("UPDATE buyer SET password=? WHERE email=?");
      $stmt2 = $conn->prepare("UPDATE seller SET password=? WHERE email=?  AND accountStatus=?");
      $stmt3 = $conn->prepare("UPDATE admin SET password=? WHERE email=?");

      $stmt0->bind_param("sss",$pass ,$input,$accstatus);
      $stmt1->bind_param("ss",$pass ,$input);
      $stmt2->bind_param("sss",$pass ,$input,$accstatus);
      $stmt3->bind_param("ss",$pass ,$input);

      $stmt0->execute();
      $stmt1->execute();
      $stmt2->execute();
      $stmt3->execute();

      if ($stmt1->error) {
         $flag=1;
         echo "FAILURE!!! " . $stmt1->error;
       }else   
      if ($stmt0->error) {
            $flag=1;
            echo "FAILURE!!! " . $stmt0->error;
          }
      if ($stmt2->error) {
            $flag=1;
            echo "FAILURE!!! " . $stmt2->error;
          }
      if ($stmt3->error) {
            $flag=1;
            echo "FAILURE!!! " . $stmt3->error;
          }
      if($flag==0){
         return true;
      }else
         return false;

   }

   public function listProducts($name)

   {

       $conn = static::connectDB();

       if($name == 'AllProducts'){
         
         $stmt0 = $conn->prepare("SELECT product.* ,GROUP_CONCAT(productimage.imageCode ORDER BY productimage.imageCode) AS images FROM product LEFT JOIN productimage ON product.productID = productimage.productID GROUP BY productimage.productID");
         
       }else{
         //   $name = '%'.$name.'%';
            
         //  $stmt0 = $conn->prepare("SELECT * FROM product  WHERE prodName REGEXP ? ");
          // $stmt0 = $conn->prepare("SELECT p.prodName , p.description,p.price GROUP_CONCAT(i.imageCode ORDER BY i.imageCode ) AS images FROM products p LEFT JOIN images i ON p.productID = i.productID   WHERE prodName REGEXP ? GROUP BY p.productName ");
            $stmt0 = $conn->prepare("SELECT product.* ,GROUP_CONCAT(productimage.imageCode ORDER BY productimage.imageCode) AS images FROM product LEFT JOIN productimage ON product.productID = productimage.productID where product.prodName REGEXP ? GROUP BY productimage.productID ");
           //echo $stmt0 ->error;die; 
           $stmt0->bind_param("s",  $name);
           
         }
       
      //  $stmt0->execute();
       if ($stmt0->execute()) {
           $result = $stmt0->get_result();
           
           if ($result->num_rows >0) {
              
               return $result;
               // while($row = $result->fetch_assoc()){

               //  echo  $row['description'];
          //   }
           }
       }
   }
}