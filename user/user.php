<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/user.css">
</head>

<body>
    <div id="bg"></div>


    <?php
    require_once "../connectie/pdo.php";
    session_start();
    $sql = "SELECT * FROM users WHERE gebruikerID = :ID";
    $stmt = $connect->prepare($sql);
    $stmt->execute([':ID' => $_SESSION['id']]);
    $result = $stmt->fetchAll();
    ?>
    <div class="container">
        <div class="white_space"></div>
        <div class="up_side"></div>
        <div class="white_space"></div>
        <div class="white_space_small"></div>
        <div class="midblok">
            <div class="welkom">
                <?php
                if (isset($_SESSION['authority'])) {
                    if ($_SESSION['authority'] == "user" || $_SESSION['authority'] == "user") {
                        echo "welkom " . $_SESSION["name"];
                    } else {
                        header("Location: index.php");
                    }
                } ?>
            </div>


            <?php foreach ($result as $re) { ?>
                <form action="../index.php">
                    <label for="">gebruikersnaam:</label>
                    <input type="text" name="username" value=" <?php echo $re["username"]; ?>">
                    <label for="">mail:</label>
                    <input type="text" name="mail" value=" <?php echo $re["mail"]; ?>">

                    <label for="">wachtwoord:</label>

                    <input type="text" name="wachtwoord" value=" ">
                    <button type="submit">bevestigen</button>
                </form>

            <?php
            }
            ?>
        </div>
        <div class="white_space_small"></div>

        <div class="bottom_side">
            <?php
            $sql = "SELECT startDatum, manierVanReizen, Personen, reis, naam, naarnaam, reisID FROM reizen WHERE user = $_SESSION[id]";
            $stmt = $connect->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
            foreach ($result as $re) { ?>
                <div class="blok">
                    <?php echo $re['reis']; ?><br>
                    <?php echo "Van " . $re['naam'];?><br>
                    <?php echo "Naar " .$re['naarnaam'];?><br>
                    <?php echo "datum " . $re['startDatum'] ;?><br>
                    <?php echo $re['Personen']. " person(en)" ?><br>
                    <?php echo "Hoe " . $re['manierVanReizen'];?><br>
                    <a class="red" href="../connectie/delete.php?id=<?php echo $re["reisID"]; ?>">delete </a>
                </div>
            <?php
            }
            ?>
        </div>


    </div>
    <script type="text/javascript" src="../js/particles.min.js"></script>
    <script type="text/javascript" src="../js/custom.js"></script>
</body>

</html>

<!-- <a class="orange" href="useredit.php?id=<?php echo $re["gebruikerID"]; ?>">edit </a> -->