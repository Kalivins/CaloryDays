<?php
namespace Ksr\MyFridgeFood\Model;

require_once("model/BDD.php");

class User extends Bdd
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
                    $_SESSION['id'] = $user['id'];
                    $_SESSION['mail'] = $user['email'];
                    $_SESSION['prenom'] = $user['prenom'];
                    $_SESSION['nom'] = $user['nom'];
                    $_SESSION['age'] = $this->age($user['date_naissance']);
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
    public function age($date)
    {
        $age = date('Y') - date('Y', strtotime($date));
	if (date('md') < date('md', strtotime($date))) {
	    return $age - 1;
        }
        return $age;
        }

    public function deconnexion()
    {
        session_destroy();
        header("Refresh:2; url=http://localhost/MyFridgeFood/home");
    }
    public function checkUser(){
        $pdo = $this->dbConnect();
    }
    public function register()
    {
        $pdo = $this->dbConnect();

        $mdp = hash('sha256', $_POST['mdp']);

        $post = $pdo->prepare('INSERT INTO user (nom, prenom, pseudo, date_naissance, email, mdp) VALUES (:nom, :prenom, :pseudo, :date_naissance, :email, :mdp)');

        $post->bindParam(':nom', $_POST['nom']);
        $post->bindParam(':prenom', $_POST['prenom']);
        $post->bindParam(':pseudo', $_POST['pseudo']);
        $post->bindParam(':date_naissance', $_POST['date_naissance']);
        $post->bindParam(':email', $_POST['email']);
        $post->bindParam(':mdp', $mdp);
        $post->execute();
    }
}
