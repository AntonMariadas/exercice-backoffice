<?php
require_once('model/User.php');
require_once('model/Database.php');
include('view/AuthentificationV.php');


class AuthentificationC {

    public $email;
    public $mdp;

    public function authentification() {
        if (isset($_POST['login'])) {
            $this->email = htmlspecialchars($_POST['email']);
            $this->mdp = md5($_POST['mdp']);
        
            $db = Database::pdo();
            $profil = new User($db);
            $user = $profil->login($this->email);

            if (isset($user->email)) {
                if ($user->mdp == $this->mdp) {
                    $_SESSION['id'] = $user->id_user;
                    header("location: index.php?page=profil&id=".$_SESSION['id']);
                    exit;
                } else {
                    return false;
                }
            }
        }
    }

    public function view() {
        $authentificationV = new AuthentificationV();
        $authentificationV->render();
    }
}