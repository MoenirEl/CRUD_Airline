<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/CRU.css">
</head>

<body>
    <?php
    require_once "pdo.php";
    session_start();
    if (isset($_SESSION['name'])) {
        if ($_SESSION['name'] == "admin" ) {
        } else{
            header("Location: index.php");
        }
    }
    else {
        header("Location: index.php");
    }


    $stmt = $connect->prepare("SELECT * FROM reizen WHERE reisID = :ID");
    $stmt->execute([':ID' => $_GET['id']]);
    $data = $stmt->fetch();

    if (isset($_POST["aanpassen"])) {
        $sql = "UPDATE reizen SET 
        naam = :naam,
        kosten = :kosten,
        beschrijving =:beschrijving 
        WHERE reisID = :ID";

        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":naam", $_POST['naam']);
        $stmt->bindParam(":kosten", $_POST['kosten']);
        $stmt->bindParam(":beschrijving", $_POST['beschrijving']);
        $stmt->bindParam(":ID", $data['id']);
        $stmt->execute();
        $stmt->debugDumpParams();
        $data = $stmt->fetch();
        header("Location: ../admin.php");
    }
    ?>

    <form action="edit.php" method="post">
        naam<input type="text" name="naam" value=" <?php echo $data['naam']; ?>"><br />
        kosten<input type="text" name="kosten" value="<?php echo $data['kosten']; ?> "><br />
        beschrijving<input type="text" name="beschrijving" value=" <?php echo $data['beschrijving']; ?>"><br />

        <input type="submit" name="aanpassen" value="submit">
        <a href="../admin.php">back</a>
    </form>
</body>

</html>