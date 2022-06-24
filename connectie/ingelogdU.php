<?php 
include_once "pdo.php";
 
$sql = "SELECT * FROM admin WHERE username = :username AND password = :password";
$stmt = $connect->prepare($sql);
$stmt->bindParam(":username", $_POST['username']);
$stmt->bindParam(":password", $_POST['password']);
$stmt->execute();
$result = $stmt->fetch();

if($result == 0){
    header("Location: incorrect.php");
}

if(count($result) > 0){
    session_start();
    $_SESSION['id'] = '10987765';
    $_SESSION['name'] = 'admin';
    header("Location: ../index.php");
} else {
    echo "username or password not found";
}
