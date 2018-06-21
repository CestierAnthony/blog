<?php
require_once('Manager.php');
class LogIn extends Manager
{
    public function logIn(){
        $db = $this->dbConnect();
        $pseudo ="jeanf";
        $req = $db->prepare('SELECT id, pass FROM membres WHERE pseudo = :pseudo');
        $req->execute(array( 'pseudo' => $pseudo));
        $resultat = $req->fetch();
        // Comparaison du pass envoyé via le formulaire avec la base
        $isPasswordCorrect = password_verify($_POST['pass'], $resultat['pass']);

        if (!$resultat){
        } else {

            if ($isPasswordCorrect) {
                session_start();
                $_SESSION['id'] = $resultat['id'];
                $_SESSION['pseudo'] = $pseudo;
                $_SESSION['message'] = null;
                header('Location: admin.php?action=postAdmin');
            } else {
                $_SESSION['message'] = "Mot de passe incorrect";
                header('Location: admin.php');
            }

        }
    }

    public function logOut(){
        session_start();
    $_SESSION = array();
    session_destroy();
    header('Location: index.php');
    }
}