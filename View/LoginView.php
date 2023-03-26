<?php
    // Chargez les classes du modèle et du contrôleur
    require_once '../Model/LoginModel.php';
    require_once '../Controller/Logincontroller.php'; 

    // Initialisez le contrôleur
    $controller = new LoginController();

    // Si le formulaire est soumis, vérifiez les identifiants de connexion
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $controller->login($_POST['email'], $_POST['password']);
    }

    // Affichez la vue de connexion
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <link rel="stylesheet"  href="includes/css/stylelog.css">
</head>
<body>
    <div class="container">
        <div class="card">
            <h1>Connexion</h1>
            <form action="" method="post">
                <label for="email">Adresse email:</label>
                <input type="email" id="email" name="email" placeholder="Entrez votre email" required>
                <label for="password">Mot de passe:</label>
                <input type="password" id="password" name="password" placeholder="Entrez votre mot de passe" required>
                <input type="submit" class="btn" value="Se connecter">
                <?php if (isset($_SESSION['error'])): ?>
                    <p class="error"><?php echo $_SESSION['error']; ?></p>
                    <?php unset($_SESSION['error']); ?>
                <?php endif; ?>
            </form>
            <p class="register">Vous n'avez pas de compte? <a href="../View/SignupView.php">Inscrivez-vous maintenant</a></p>
        </div>
    </div>
</body>
</html>
