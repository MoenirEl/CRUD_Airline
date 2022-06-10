<?php
require_once'pdo.php';

$sql = "DELETE FROM planeten WHERE id=:ID;
";
$stmt = $connect ->prepare($sql);
$stmt->bindParam(':ID', $_GET['id']);
$stmt->execute();
header("Location: ../admin.php")
?>