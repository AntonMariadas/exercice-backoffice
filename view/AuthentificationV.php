<?php

class AuthentificationV {

    public function render() {

        echo '
        <h1>Authentification</h1>
        <form action="" method="post">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" placeholder="Enter email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="pwd">Mot de passe</label>
            <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="mdp" required>
        </div>
        <div class="envoyer">
        <button type="submit" class="btn btn-success" name="login">Envoyer</button>
        </div>
        </form>

        <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        form {
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
}
