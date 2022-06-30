<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono:ital@1&family=Trispace&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/googlefonts.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/nav.css">

</head>

<body>
    <nav>
        <img id="logo" src="img/YR.png" alt="">
        <a href="index.php">home</a>
        <?php 
            session_start();
            if (isset($_SESSION['name'])) {
                if ($_SESSION['authority'] == "admin" ) {
                    echo '<a href="adminkeuze.php">admin page</a>';
                }
            }
            else {
                echo '<a href="inloggen.php">login</a>';
            }
            
        ?>
        <a href="info.php">info</a>
        <a href="about.php">Over ons</a>
        <a href="contact.php">contact</a>
        <?php
        if (isset($_SESSION['name'])) {
            echo '<a href="connectie/sessionD.php">uitloggen</a>';
        }
        ?>
    </nav>


</body>

</html>