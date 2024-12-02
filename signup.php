<?php
require_once 'db.php';
include('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $type = $_POST['type'];

    $stmt = $pdo->prepare("INSERT INTO Professors (name, email, password, type) VALUES (?, ?, ?, ?)");
    $stmt->execute([$name, $email, $password, $type]);

    echo "Inscription réussie ! <a href='signin.php'>Se connecter</a>";
}
?>

<form method="POST">
    <input type="text" name="name" placeholder="Nom" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Mot de passe" required>
    <select name="type">
        <option value="permanent">Permanent</option>
        <option value="vacataire">Vacataire</option>
    </select>
    <button type="submit">S'inscrire</button>
</form>
