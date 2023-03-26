<?php
class UserModel {
    private $dblog;

    public function __construct() {
        // Initialisez la connexion à la base de données
        $this->dblog = new PDO('mysql:host=localhost;dbname=web_project;charset=utf8mb4', 'root', '');
        $this->dblog->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function getUserByEmail($email,$password) {
        // Récupérez l'utilisateur par email
        $stmt = $this->dblog->prepare('SELECT * FROM users WHERE email = ? ');
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            // Vérifiez si le mot de passe correspond
            if ($user['password'] == $password) {
                return $user ;
            }
        }

        return null;
    }
}


?>
        