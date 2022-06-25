<?php 
include_once "pdo.php";
 
$sql = "SELECT * FROM admin WHERE username = :username AND password = :password";
$stmt = $connect->prepare($sql);
$stmt->bindParam(":username", $_POST['username']);
$stmt->bindParam(":password", $_POST['password']);
$stmt->execute();
$result = $stmt->fetch();

if($result == 0){
    $sql = "SELECT * FROM users WHERE username = :username AND password = :password";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":username", $_POST['username']);
    $stmt->bindParam(":password", $_POST['password']);
    $stmt->execute();
    $resultaat = $stmt->fetch();

    if($resultaat == 0){
        header("Location: incorrect.php");
    }

    if(count($resultaat) > 0){
        session_start();
        $_SESSION['id'] = $resultaat["gebruikerID"];
        $_SESSION['name'] = $resultaat["username"];
        header("Location: ../index.php");
    } else {
        echo "username or password not found";
    }
    
}

if(count($result) > 0){
    session_start();
    $_SESSION['id'] = $resultaat["gebruikerID"];
    $_SESSION['name'] = "admin";
    header("Location: ../index.php");
} else {
    echo "username or password not found";
}
