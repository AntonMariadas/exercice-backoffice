<?php

class ProfilV {

    public function renderProfil($nom, $prenom, $adresse, $cp, $ville, $tel, $email) {
        echo '
        <h1>Mon profil</h1>
        <h2 class="id">'.$nom.'</h2>
        <h2 class="id">'.$prenom.'</h2>
        <h4>'.$adresse.'</h4>
        <h4>'.$cp.'</h4>
        <h4>'.$ville.'</h4>
        <h4>'.$email.'</h4>
        <h4 class="last">'.$tel.'</h4>

        <style>
        .last {
            margin-bottom: 40px;
        }

        .id {
            color: darkslateblue;
        </style>
        ';
    }

    public function renderModification($nom, $prenom, $adresse, $cp, $ville, $tel, $email) {
        echo '
        <h1>Modifier mon profil</h1>
        <div class="formulaire">
            <form action="" method="post">
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control form-control-sm" value="'.$nom.'" id="nom" name="nom">
                </div>
                <div class="form-group">
                    <label for="prenom">Prénom</label>
                    <input type="text" class="form-control form-control-sm" value="'.$prenom.'"id="prenom" name="prenom">
                </div>
                <div class="form-group">
                    <label for="adresse">Adresse</label>
                    <input type="text" class="form-control form-control-sm" value="'.$adresse.'"id="adresse" name="adresse">
                </div>
                <div class="form-group">
                    <label for="cp">Code postal</label>
                    <input type="text" class="form-control form-control-sm" value="'.$cp.'"id="cp" name="cp">
                </div>
                <div class="form-group">
                    <label for="ville">Ville</label>
                    <input type="text" class="form-control form-control-sm" value="'.$ville.'" id="ville" name="ville">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control form-control-sm" value="'.$email.'" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="tel">Tel</label>
                    <input type="text" class="form-control form-control-sm" value="'.$tel.'"id="tel" name="tel">
                </div>
                <div class="form-group">
                    <label for="mdp">Mot de passe</label>
                    <input type="password" class="form-control form-control-sm" placeholder="Choisissez un mot de passe..."id="mdp" name="mdp">
                </div>        
                <div class="envoyer">
                    <button type="submit" name="modification" class="btn btn-info">Modifier</button>
                </div>
            </form>
        </div>

        <style> 
        h1 {
            color:crimson;
            text-align:center;
        }

        h2, h4 {
            text-align:center;
        }

        .formulaire {
            width:70%;
            margin:auto;
        }

        .formulaire .envoyer {
            text-align:center;
            margin-bottom: 40px;
        }


        </style>
        ';
    }

    public function renderSupression() {
        echo '
        <h1>Supprimer mon profil</h1>
        <form action="" method="post">
        <div class="envoyer">
            <button type="submit" name="supprimer" class="btn btn-warning">Supprimer</button>
        </div>
        </form>

        <style>
        .envoyer {
            text-align:center;
        </style>
        ';
    }
    
}


        






