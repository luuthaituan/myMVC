<?php

namespace App\Models;

use PDO;


class Post
{

    /*
     Get all the posts as an associative array
     */
    public static function getAll()
    {
        $host = 'localhost';
        $dbname = 'mvc';
        $username = 'root';
        $password = 'Tuan@8999';
    
        try {
            $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",
                          $username, $password);

            $stmt = $db->query('SELECT * FROM posts');
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $results;
            
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
