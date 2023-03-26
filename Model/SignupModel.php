<?php
class signupmodel {
    private $db;
    
    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=web_project', 'root', '');
    }
    
    public function addUser($nom, $prenom, $email, $password, $category_formation, $name_uni, $type_user) {
        $query = "INSERT INTO users (nom, prenom, email, password, category_formation, name_uni, type_user) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$nom, $prenom, $email, $password, $category_formation, $name_uni, $type_user]);
    }
}
?>
