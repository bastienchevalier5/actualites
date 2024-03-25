<?php
class connect extends PDO {


    public static function getPdo(){
        $pdo = new connect("mysql:host=127.0.0.1;dbname=site_actualités;charset=utf8mb4;port=3306", "root");
        return $pdo;
    }
}


