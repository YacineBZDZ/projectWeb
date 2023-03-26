<?php
require_once("../Model/LoginModel.php");
class LoginController {
 
   public function login($email, $password) {
        // Vérifiez si l'utilisateur existe dans la base de données
        $userModel = new UserModel();
        $user = $userModel->getUserByEmail($email,$password);

        
        if ($user &&  $user['password'] == $password ) {
            // Redirigez l'utilisateur vers la page de profil
            header('Location: ../index.php');
            exit();

        }
        else if (!$user || !$password){
            // Si l'utilisateur n'existe pas, affichez un message d'erreur
            $_SESSION['error'] = 'L\'adresse email ou le mot de passe est incorrect.';
            return;
            }
             // Vérifiez si le mot de passe est correct
   
    }
}

?>
