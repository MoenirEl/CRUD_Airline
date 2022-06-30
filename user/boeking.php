<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="../index.php">home</a>
    <?php
    require_once "../connectie/pdo.php";   
    session_start();
    if (isset($_SESSION['authority'])) {
        if ($_SESSION['authority'] == "user" || $_SESSION['authority'] == "user") {
            echo "hallo daar " . $_SESSION["name"];
        } else{
            header("Location: index.php");
        }
    }
    else {
        header("Location: index.php");
    }
    $sql = "SELECT * FROM boekingen WHERE gebruikerID = :ID";
    $stmt = $connect->prepare($sql);
    $stmt->execute([':ID' => $_SESSION['id']]);
    $result = $stmt->fetchAll();
    
    foreach ($result as $re) {
        echo $re["boekingID"];
        echo $re["gebruikerID"];
        echo $re["reisID"];
    }

    ?>



</body>
</html>