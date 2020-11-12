<?php

namespace App\Models;


class User extends \Core\Connect{

                

            public function authenticate($username, $password) {
               
                $conn=static::connectDB();
                $flag=0;

                $stmt = $conn->prepare("SELECT * FROM buyer WHERE userID = ? AND password= ?");
                $stmt->bind_param("ss", $username, $password);
                if($stmt->execute()){

                    $result = $stmt->get_result();
        
                     if($result->num_rows === 0 ){
                        $flag=0;
                     }else{
                        $flag=1;
                        session_start();
                        $_SESSION["username"] = $username;
                        $_SESSION["type"] = 'buyer';
                        return $flag;
                        
                     }
                }
                $stmt = $conn->prepare("SELECT * FROM seller WHERE userID = ? AND password= ? AND accountStatus = ?");
                $accStats='Inactive';
                $stmt->bind_param("sss", $username, $password,$accStats);
                if($stmt->execute()){

                    $result = $stmt->get_result();
        
                     if($result->num_rows === 0 ){
                        $flag=0;
                     }else{
                        $flag=2;
                        session_start();
                        $_SESSION["username"] = $username;
                        $_SESSION["type"] = 'seller';
                        return $flag;
                     }
              }

              $stmt = $conn->prepare("SELECT * FROM promoter WHERE userID = ? AND password= ? AND accountStatus = ?");
              $accStats='Inactive';
              $stmt->bind_param("sss", $username, $password,$accStats);
              if($stmt->execute()){

                  $result = $stmt->get_result();
      
                   if($result->num_rows === 0 ){
                      $flag=0;
                   }else{
                      $flag=3;
                      session_start();
                      $_SESSION["username"] = $username;
                      $_SESSION["type"] = 'promoter';
                      return $flag;
                   }
            }


        
            }

    
    }


