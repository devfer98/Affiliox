<?php

namespace App\Models;
use PDO;

class User extends \Core\Connect{

        public static function showData()
        {
            try{

                $db = static::getDB();
                $stmt =$db->query('SELECT * FROM test10 ');
                $result =$stmt->fetchALL(PDO::FETCH_ASSOC);
                return $result;

            }  catch (PDOException $e){
                echo $e->getMessage();
            }
        }
    }

