<?php
include('view/ProfilV.php');
require_once('model/User.php');

class ProfilC {

    public $nom;
    public $prenom;
    public $adresse;
    public $cp;
    public $ville;
    public $tel;
    public $email;
    public $mdp;
    public $id;

    public function view() {
        $db = Database::pdo();
        $profil = new User($db);
        $profilV = new ProfilV();
        if (isset($_GET['id'])) {
            $this->id = htmlspecialchars($_GET['id']);
        }
        $user = $profil->display($this->id);

        $this->nom = $user->nom;
        $this->prenom = $user->prenom;
        $this->adresse = $user->adresse;
        $this->cp = $user->cp;
        $this->ville = $user->ville;
        $this->tel = $user->tel;
        $this->email = $user->email;

        $profilV->renderProfil($this->nom, $this->prenom, $this->adresse, $this->cp, $this->ville, $this->tel, $this->email);
        $profilV->renderModification($this->nom, $this->prenom, $this->adresse, $this->cp, $this->ville, $this->tel, $this->email);
        $profilV->renderSupression();
    }

    public function modifProfil() {
        if (isset($_POST['modification'])) {
            $this->nom = $_POST['nom'];
            $this->prenom = $_POST['prenom'];
            $this->adresse = $_POST['adresse'];
            $this->cp = $_POST['cp'];
            $this->ville = $_POST['ville'];
            $this->tel = $_POST['tel'];
            $this->email = $_POST['email'];
            $this->mdp = md5($_POST['mdp']);

            if (isset($_GET['id'])) {
                $this->id = htmlspecialchars($_GET['id']);
            }

            $db = Database::pdo();
            $profil = new User($db);
            $profil->update($this->nom, $this->prenom, $this->adresse, $this->cp, $this->ville, $this->tel, $this->email, $this->mdp, $this->id);
            exit;
        }
    }

    public function suppProfil() {
        if (isset($_POST['supprimer'])) {
            $db = Database::pdo();
            $profil = new User($db);
            if (isset($_GET['id'])) {
                $this->id = htmlspecialchars($_GET['id']);
            }
            $profil->delete($this->id);
        }
    }
}