<?php
require_once('model/User.php');
require_once('model/Database.php');

class Logout {

    public function deconnexion() {
        $db = Database::pdo();
        $user = new User($db);
        $user->deconnection();
    }
}