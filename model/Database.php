<?php

class Database {

    public static function pdo() {

        try {
            $db = new PDO('mysql:host=localhost;dbname=exercice;charset=utf8','root','root');
            return $db;
        }
        catch(PDOException $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }   
}
