<?php

class Check {

    public function checkNom($string) {
        if ((preg_match('#^[a-zA-Zéèêëîïôöàäâûü-]+$#', $string)) && (strlen($string) > 1)) {
            return true;
        }
        else {
            return false;
        }
    }

    public function checkAdresse($string) {
        if ((preg_match('#^[a-zA-Zéèêëîïôöàäâûü0-9 \'._-]+$#', $string)) && (strlen($string) > 4)) {
            return true;
        }
        else {
            return false;
        }
    }

    public function checkCp($number) {
        if ((preg_match('#^[0-9]+$#', $number)) && (strlen($number) == 5)) {
            return true;
        }
        else {
            return false;
        }
    }

    public function checkTel($number) {
        if ((preg_match('#^[0-9]+$#', $number)) && (strlen($number) == 10)) {
            return true;
        }
        else {
            return false;
        }
    }

    public function checkEmail($email) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        else {
            return false;
        }
    }

    public function checkMdp($mdp) {
        if (strlen($mdp) > 5) {
            return true;
        }
        else {
            return false;
        }
    }

    public function validate($nom, $prenom, $adresse, $cp, $ville, $tel, $email, $mdp) {
        if (($this->checkNom($nom)) && ($this->checkNom($prenom)) && ($this->checkAdresse($adresse)) && ($this->checkCp($cp)) && ($this->checkAdresse($ville)) && ($this->checkTel($tel)) && ($this->checkEmail($email)) && ($this->checkMdp($mdp))) {
            return true;
        }
        else {
            return false;
        }
    }
}