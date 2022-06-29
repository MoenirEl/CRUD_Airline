<?php 
    require_once "connectie/pdo.php";
    $stmt = $connect->prepare("SELECT * FROM reizen WHERE reisID = :ID");
    $stmt->execute([':ID' => $_GET['id']]);
    $data = $stmt->fetch(); 

    echo $data['naam']; 
    echo $_POST['personen'];
    ?>