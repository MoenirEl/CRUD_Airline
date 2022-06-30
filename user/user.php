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

$sql = "SELECT * FROM users WHERE gebruikerID = :ID";
$stmt = $connect->prepare($sql);
$stmt->execute([':ID' => $_SESSION['id']]);
$result = $stmt->fetchAll();
?>


    <div class="tablebox">


        <table>
            <?php foreach ($result as $re) { ?>
                <ul>
                    <li>gebruikersnaam: <?php echo $re["username"]; ?></li>
                    <li>mail: <?php echo $re["mail"]; ?></li>
                    <li>
                        <a class="orange" href="useredit.php?id=<?php echo $re["gebruikerID"]; ?>">edit </a>
                    </li>
                </ul>
                <a class="red" href="boeking.php?id=<?php echo $re["gebruikerID"]; ?>">boeking </a>
            <?php
            }
            ?>
        </table>
    </div>
</body>
</html>