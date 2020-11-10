<?php

namespace App\Models;


class User extends \Core\Connect{

                
    
            // public function save()
            // {   
            //     $stmt = $mysqli->prepare("INSERT INTO buyer (userID, name, email, password, phoneNo, age, dob, gender, country, city, line1, line2) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            //     $stmt->bind_param("sss", $_POST['name'], $_POST['age']);
            //     $stmt->execute();
            //     $stmt->close();
            // }

            public function authenticate($username, $password) {

                $conn=static::connectDB();
               
                $stmt = $conn->prepare("SELECT * FROM buyer WHERE userID = ? AND password= ?");
                $stmt->bind_param("ss", $username, $password);
                if($stmt->execute()){

                    $result = $stmt->get_result();
        
                     if($result->num_rows === 0 ){
                        //not found in this table
                     }else{
                        //login msg as buyer
                     }
                }
                // $stmt = $conn->prepare("SELECT FROM seller (userID, password) VALUES (?, ?)");
                // $stmt->bind_param("ss", $username, $password);
                // if($stmt->execute()){

                //     $stmt->store_result();
        
                //      if($stmt->num_rows > 0 ){
                //         echo 'success';
                //          return true;
                //      }
                // }
                // $stmt = $conn->prepare("SELECT FROM promoter (userID, password) VALUES (?, ?)");
                // $stmt->bind_param("ss", $username, $password);
                // if($stmt->execute()){

                //     $stmt->store_result();
        
                //      if($stmt->num_rows > 0 ){
                //          echo 'success';
                //          return true;
                //      }
                         
                // }
           
                // $stmt = $conn->prepare("SELECT FROM admin (userID, password) VALUES (?, ?)");
                // $stmt->bind_param("ss", $username, $password);
                // if($stmt->execute()){
                //     $stmt->store_result();
                //      if($stmt->num_rows > 0 ){
                //          echo 'success';
                //          return true;
                //      }       
                // }
           
        
            }

    
    }


