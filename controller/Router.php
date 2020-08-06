<?php 
include('InscriptionC.php');
include('AuthentificationC.php');
include('Logout.php');
include('ProfilC.php');


class Router {

    public static function route($page) {

        switch($page) {
            case 'inscription':
                $route = new InscriptionC();
                $route->view();
                $route->inscription();
            break;

            case 'login':
                $route = new AuthentificationC();
                $route->view();
                $route->authentification();
            break;

            case 'deconnexion':
                $route = new logout();
                $route->deconnexion();
            break;

            case 'profil':
                $route = new ProfilC();
                $route->view();
                $route->modifProfil();
                $route->suppProfil();
            break;

            // default:
            // $route = new InscriptionC();
            // $route->view();
            // $route->inscription();
        }
    }
}