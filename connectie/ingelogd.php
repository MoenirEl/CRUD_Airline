<?php 
include_once "connectie/pdo.php";
 
$sql = "SELECT * FROM admin WHERE username = :username AND password = :password";
$stmt = $connect->prepare($sql);
$stmt->bindParam(":username", $_POST['username']);
$stmt->bindParam(":password", $_POST['password']);
$stmt->execute();
$result = $stmt->fetch();

if($result == 0){
    header("Location: ../index.php");
}
?>
<a class="nav-link hover1" href="index.php">go back</a>
<?php
include_once "odp.php";
 
$sql = "SELECT * FROM admin WHERE username = :username AND password = :password";
$stmt = $connect->prepare($sql);
$stmt->bindParam(":username", $_POST['username']);
$stmt->bindParam(":password", $_POST['password']);
$stmt->execute();
$result = $stmt->fetch();

if(count($result) > 0){
    session_name("admin");
    session_start();
    header("Location: ../index.php");
} else {
    echo "username or password not found";
}

?>