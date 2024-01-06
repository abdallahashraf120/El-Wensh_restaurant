<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    try {
        require_once "config.php";

        $query = "SELECT * FROM users WHERE username = :username AND password = :password";
        $stmt = $PDO->prepare($query);
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":password", $password);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
           
            $_SESSION['username'] = $user['username'];
            header("Location:./index.html");
            exit();
        } else {
            header("Location:./login.php?error=wrong username or password");
            exit();
        }
        $PDO = null;
        $stmt = null;
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
}
?>