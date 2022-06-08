<?php
    require_once 'pdo.php';

    if(isset($_POST['submitknop'])) {

        $stmt = $connect->prepare("INSERT INTO users (username, password, mail) VALUES (:username, :password, :mail)");
        $stmt->bindParam('username', $_POST['username']);
        $stmt->bindParam('password', $_POST['password']);
        $stmt->bindParam('mail', $_POST['mail']);
        $stmt->execute();

        header("Location: ../inloggen.php?message=gelukt");
    } else {
        header("Location: ../inloggen.php");
    }
?>