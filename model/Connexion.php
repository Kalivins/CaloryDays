<?php
namespace Ksr\MyFridgeFood\Model;

require_once("model/BDD.php");

class Connexion extends Bdd
{
    public function connexion()
    {
        $pdo = $this->dbConnect();
        $connec = $pdo->query('SELECT * FROM user');
        $connexion_user = $connec->fetchAll();

        if (isset($_POST['mail']) || isset($_POST['mdp'])) {
            $bool = false;
            $mdp_hash = hash('sha256', $_POST['mdp']);
            foreach ($connexion_user as $user) {
                if ($_POST['mail'] == $user["email"] && $mdp_hash == $user['mdp']) {
                    $_SESSION['mail'] = $user['email'];
                    $_SESSION['prenom'] = $user['prenom'];
                    $_SESSION['nom'] = $user['nom'];
                    $_SESSION['date_naissance'] = $user['date_naissance'];
                    $_SESSION['result'] = true;
                    break;
                } else {
                    $_SESSION['result'] = false;
                }
            }
        } else {
            return 'Veuillez remplir les champs';
        }
    }

    public function deconnexion()
    {
        session_destroy();
        header("Refresh:2; url=http://localhost/MyFridgeFood/home");
    }
}

?>