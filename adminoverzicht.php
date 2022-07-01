<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="css/admin.css">
</head>

<body class="sky">
    <a class="blue" href="../CRUD_Space/index.php">home</a>
    <?php
require_once "connectie/pdo.php";
session_start();
echo "welkom terug " . $_SESSION["name"];

$sql = "SELECT * FROM users";
$stmt = $connect->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();
?>


    <div class="tablebox">


        <table>
            <tr>
                <th>Naam </th>
                <th>Wachtwoord </th>
                <th>Mail </th>
            </tr>

            <?php foreach ($result as $re) { ?>
                <tr>
                    <td><?php echo $re["username"]; ?></td>
                    <td><?php echo $re["password"]; ?></td>
                    <td><?php echo $re["mail"]; ?></td>
                    <td>
                        <a class="red" href="connectie/deleteuser.php?id=<?php echo $re["gebruikerID"]; ?>">delete </a>
                    </td>
                </tr>


            <?php
            }
            ?>
        </table>
    </div>


</body>

</html>