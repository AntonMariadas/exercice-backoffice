<?php

class User {

    public $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function register($nom, $prenom, $adresse, $cp, $ville, $tel, $email, $mdp) {
        $sql = $this->db->prepare('INSERT INTO user(nom, prenom, adresse, cp, ville, tel, email, mdp) VALUES (?,?,?,?,?,?,?,?)');
        $result = $sql->execute(array($nom, $prenom, $adresse, $cp, $ville, $tel, $email, $mdp));
        if ($result) {
            $this->db = null;
            return true;
        }
        else {
            return false;
        }
    }

    public function update($nom, $prenom, $adresse, $cp, $ville, $tel, $email, $mdp, $id) {
        $sql = $this->db->prepare('UPDATE user SET nom=?, prenom=?, adresse=?, cp=?, ville=?, tel=?, email=?, mdp=? WHERE id_user=?');
        $result = $sql->execute(array($nom, $prenom, $adresse, $cp, $ville, $tel, $email, $mdp, $id));
        if ($result) {
            $this->db = null;
            return true;
        }
        else {
            return false;
        }
    }

    public function delete($id) {
        $sql = $this->db->prepare('DELETE FROM user WHERE id_user=?');
        $result = $sql->execute(array($id));
        if ($result) {
            $this->db = null;
            return true;
        }
        else {
            return false;
        }
    }

    public function login($email) {
        $sql = $this->db->prepare("SELECT * FROM user WHERE email=?");
        $sql->execute(array($email));
        $user = $sql->fetch(PDO::FETCH_OBJ);
        $this->db = null;
        return $user;
    }

    public function deconnection() {
        $_SESSION = array();
        session_destroy();
        $this->db = null;
        header("Location: index.php?page=inscription");
        exit;
    }

    public function display($id) {
        $sql = $this->db->prepare("SELECT * FROM user WHERE id_user=?");
        $sql->execute(array($id));
        $user = $sql->fetch(PDO::FETCH_OBJ);
        $this->db = null;
        return $user;
    }

}