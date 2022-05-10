<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>admin</title>
  <link rel="stylesheet" href="main.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
</head>

<body>

    <p>dit is de admin page.</p>
    <?php
require_once "../connectie/pdo.php";

$sql = "SELECT * FROM planeten";
$stmt = $connect->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();
?>
<table>
    <tr>
        <th>planeetnaam </th>
        <th>Prijs </th>
        <th>beschrijving </th>
    </tr>
    <?php
    foreach ($result as $re) { ?>
        <tr>
            <td><?php echo $re["naam"]; ?></td>
            <td><?php echo $re["prijs"]; ?></td>
            <td><?php echo $re["beschrijving"]; ?></td>
            <td>
                <a href="../connectie/edit.php?id=<?php echo $re["ID"]; ?>">edit  </a>
                <a href="../connectie/delete.php?id=<?php echo $re["ID"]; ?>">delete  </a>
            </td>
        </tr>

    <?php
    }
    ?>
    <a href="../connectie/insert.php?id=<?php echo $re["ID"]; ?>">insert  </a>
    <a href="../mainpages/index.php">home</a>
</table>
  
</body>
</html>