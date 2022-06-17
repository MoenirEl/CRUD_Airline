<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>admin</title>
  <link rel="stylesheet" href="css/admin.css">
  </script>
</head>

<body class="sky" >

    <p>dit is de admin page.</p>
    <?php
require_once "connectie/pdo.php";

$sql = "SELECT * FROM planeten";
$stmt = $connect->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();
?>


<div class="tablebox">
        <div class="kleinebox">
<a class="green" href="connectie/insert.php">insert  </a>
    <a class="blue" href="../CRUD_Space/index.php">home</a>

<table>
    <tr>
        <th>planeetnaam </th>
        <th>Prijs </th>
        <th>beschrijving </th>
    </tr>
    
    <?php foreach ($result as $re) { ?>
        <tr>
            <td><?php echo $re["naam"]; ?></td>
            <td><?php echo $re["prijs"]; ?></td>
            <td><?php echo $re["beschrijving"]; ?></td>
            <td>
                <a  class="orange"href="connectie/edit.php?id=<?php echo $re["ID"]; ?>">edit  </a>
                <a class="red" href="connectie/delete.php?id=<?php echo $re["ID"]; ?>">delete  </a>
            </td>
        </tr>

    <?php
    }
    ?>
    
</table>
  
</body>
</html>