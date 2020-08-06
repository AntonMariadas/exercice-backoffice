<?php

class InscriptionV {

    public function render() {

    echo '
        <h1>Inscription</h1>
        <div class="formulaire">
            <form action="" method="post">
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control form-control-sm" placeholder="Entrez votre nom..." id="nom" name="nom" required>
                </div>
                <div class="form-group">
                    <label for="prenom">Prénom</label>
                    <input type="text" class="form-control form-control-sm" placeholder="Entrez votre prénom..."id="prenom" name="prenom" required>
                </div>
                <div class="form-group">
                    <label for="adresse">Adresse</label>
                    <input type="text" class="form-control form-control-sm" placeholder="Entrez votre adresse..."id="adresse" name="adresse" required>
                </div>
                <div class="form-group">
                    <label for="cp">Code postal</label>
                    <input type="text" class="form-control form-control-sm" placeholder="Entrez votre code postal..."id="cp" name="cp" required>
                </div>
                <div class="form-group">
                    <label for="ville">Ville</label>
                    <input type="text" class="form-control form-control-sm" placeholder="Entrez votre ville..." id="ville" name="ville" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control form-control-sm" placeholder="Entrez votre email..." id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="tel">Tel</label>
                    <input type="tel" class="form-control form-control-sm" placeholder="Entrez votre n° de telephone..."id="tel" name="tel" required>
                </div>
                <div class="form-group">
                    <label for="mdp">Mot de passe</label>
                    <input type="password" class="form-control form-control-sm" placeholder="Choisissez un mot de passe..."id="mdp" name="mdp" required>
                </div>        
                <div class="envoyer">
                    <button type="submit" name="inscription" class="btn btn-primary">Envoyer</button>
                </div>
            </form>
        </div>
        <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        
        .formulaire {
            max-width: 70%;
            height: auto;
            margin: auto;
        }
        
        h1 {
            text-align: center;
        }
        
        .envoyer {
            text-align: center;
        }        
        </style>
        ';
    }

    public function message() {
        echo '<script> alert("Opération réussie!") </script>';
    }
}
