<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>admin</title>
  <link rel="stylesheet" href="css/admin.css">
</head>

<body class="sky" >
    <a class="green" href="connectie/insert.php">insert  </a>
    <a class="blue" href="../CRUD_Space/index.php">home</a>
    <?php
require_once "connectie/pdo.php";

$sql = "SELECT * FROM reizen";
$stmt = $connect->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();
?>


<div class="tablebox">


    <table>
        <tr>
            <th>planeetnaam </th>
            <th>kosten </th>
            <th>startdatum </th>
            <th>einddatum </th>
            <th>manierVanReizen </th>
            <th>klasse </th>
            <th>Personen </th>
            <th>reis </th>
            <th>beschrijving </th>
        </tr>
        
        <?php foreach ($result as $re) { ?>
            <tr>
                <td><?php echo $re["naam"]; ?></td>
                <td><?php echo $re["kosten"]; ?></td>
                <td><?php echo $re["startDatum"]; ?></td>
                <td><?php echo $re["eindDatum"]; ?></td>
                <td><?php echo $re["manierVanReizen"]; ?></td>
                <td><?php echo $re["klasse"]; ?></td>
                <td><?php echo $re["Personen"]; ?></td>
                <td><?php echo $re["reis"]; ?></td>
                <td><?php echo $re["beschrijving"]; ?></td>
                <td>
                    <a class="orange"href="connectie/edit.php?id=<?php echo $re["reisID"]; ?>">edit  </a>
                    <a class="red" href="connectie/delete.php?id=<?php echo $re["reisID"]; ?>">delete  </a>
                </td>
            </tr>


        <?php
        }
        ?>
    </table>
</div>
  


</body>
</html>