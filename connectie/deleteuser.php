<?php
require_once 'pdo.php';
session_start();
    if (isset($_SESSION['authority'])) {
        if ($_SESSION['authority'] == "admin" ) {
        } else{
            header("Location: index.php");
        }
    }
    else {
        header("Location: ../index.php");
    }

$sql = "DELETE FROM users WHERE gebruikerID=:ID";
$stmt = $connect ->prepare($sql);
$stmt->bindParam(':ID', $_GET['id']);
$stmt->execute();
header("Location: ../adminoverzicht.php");
?>