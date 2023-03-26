<?php

require_once('../Model/SignupModel.php');
require_once('../View/SignupView.php');

if(isset($_POST['submit'])) {
    $signupmodel = new signupmodel();
    $signupmodel->addUser($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['password'], $_POST['category_formation'], $_POST['name_uni'], $_POST['type_user']);
    
    $signupview= new signupview();
    $signupview->showMessage('Les données ont été enregistrées avec succès !');
} else {
    $signupview= new signupview();
    $signupview->showForm();   
}
?>
