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
    require_once 'pdo.php';
    session_start();
    if (isset($_SESSION['authority'])) {
        if ($_SESSION['authority'] == "admin" ) {
        } else{
            header("Location: ../index.php");
        }
    }
    else {
        header("Location: index.php");
    }

    if (isset($_POST["toevoegen"])) {
        $sql = "INSERT INTO reizen (naam,kosten,StartDatum,eindDatum,manierVanReizen,klasse,Personen,reis,beschrijving) 
        VALUES (:naam,:kosten,:startDatum,:eindDatum,:manierVanReizen,:klasse,:Personen,:reis,:beschrijving)";

        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":naam", $_POST['naam']);
        $stmt->bindParam(":kosten", $_POST['kosten']);
        $stmt->bindParam(":startDatum", $_POST['startDatum']);
        $stmt->bindParam(":eindDatum", $_POST['eindDatum']);
        $stmt->bindParam(":manierVanReizen", $_POST['manierVanReizen']);
        $stmt->bindParam(":klasse", $_POST['klasse']);
        $stmt->bindParam(":Personen", $_POST['Personen']);
        $stmt->bindParam(":reis", $_POST['reis']);
        $stmt->bindParam(":beschrijving", $_POST['beschrijving']);
        $stmt->execute();
        header("Location: ../admin.php");
    }
    ?>

    <form action="" method="post">
        naam<input type="text" name="naam" id=""><br />
        kosten<input type="text" name="kosten" id=""><br />
        startDatum<input type="date" name="startDatum" id=""><br />
        eindDatum<input type="date" name="eindDatum" id=""><br />
        manierVanReizen<input type="text" name="manierVanReizen" id=""><br />
        klasse<input type="text" name="klasse" id=""><br />
        Personen<input type="text" name="Personen" id=""><br />
        reis<input type="text" name="reis" id=""><br />
        beschrijving<input type="text" name="beschrijving" id=""><br />

        <input type="submit" name="toevoegen" value="submit">
        <a href="../admin.php">back</a>
    </form>
</body>

</html>