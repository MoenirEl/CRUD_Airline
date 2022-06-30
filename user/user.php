<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="../CRUD_Space/index.php">home</a>
    <?php
    require_once "connectie/pdo.php";   
    session_start();
    if (isset($_SESSION['authority'])) {
        if ($_SESSION['authority'] == "admin" ) {
            echo "welkom terug " . $_SESSION["name"];
        } else{
            header("Location: index.php");
        }
    }
    else {
        header("Location: index.php");
    }

$sql = "SELECT * FROM users";
$stmt = $connect->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();
?>


    <div class="tablebox">


        <table>
            <tr>
                <th>gebruikersnaam: </th>
                <th>wachtwoord :</th>
                <th>mail: </th>
            </tr>

            <?php foreach ($result as $re) { ?>
                <tr>
                    <input type="hidden" naam="id" value="<?php echo $re['id'] ?>">
                    <td><?php echo $re["naam"]; ?></td>
                    <td><?php echo $re["kosten"]; ?></td>
                    <td><?php echo $re["startDatum"]; ?></td>
                    <td>
                        <a class="orange" href="connectie/edit.php?id=<?php echo $re["reisID"]; ?>">edit </a>
                    </td>
                </tr>
                <a class="red" href="connectie/delete.php?id=<?php echo $re["reisID"]; ?>">delete </a>
            <?php
            }
            ?>
        </table>
    </div>
</body>
</html>