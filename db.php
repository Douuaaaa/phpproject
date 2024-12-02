<?php
// Paramètres de connexion
$host = 'localhost'; // Serveur
$dbname = 'nom_de_votre_base_de_donnees'; // Nom de la base de données
$username = 'root'; // Nom d'utilisateur MySQL (par défaut pour XAMPP)
$password = ''; // Mot de passe MySQL (vide par défaut pour XAMPP)

try {
    // Création de la connexion PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // En cas d'erreur, afficher un message
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
?>
