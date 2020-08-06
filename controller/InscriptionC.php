<?php
include('Check.php');
require_once('model/Database.php');
require_once('model/User.php');
include('view/InscriptionV.php');


class InscriptionC {

    public $nom;
    public $prenom;
    public $adresse;
    public $cp;
    public $ville;
    public $tel;
    public $email;
    public $mdp;

    public function inscription() {
        if (isset($_POST['inscription'])) {
            $this->nom = $_POST['nom'];
            $this->prenom = $_POST['prenom'];
            $this->adresse = $_POST['adresse'];
            $this->cp = $_POST['cp'];
            $this->ville = $_POST['ville'];
            $this->tel = $_POST['tel'];
            $this->email = $_POST['email'];
            $this->mdp = md5($_POST['mdp']);

            $db = Database::pdo();
            $data = new Check();
            $user = new User($db);
            $inscriptionV = new InscriptionV();

            $verification = $data->validate($this->nom, $this->prenom, $this->adresse, $this->cp, $this->ville, $this->tel, $this->email, $this->mdp);
            if ($verification) {
                $user->register($this->nom, $this->prenom, $this->adresse, $this->cp, $this->ville, $this->tel, $this->email, $this->mdp);
                $inscriptionV->message();
            } else {
                return false;
            }
        }
    }

    public function view() {
        $inscriptionV = new InscriptionV();
        $inscriptionV->render();
    }
}