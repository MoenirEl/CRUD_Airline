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
        <a href="index.php">Home</a>
        <?php
        session_start();
        ?>
        <a href="info.php">Info</a>
        <a href="about.php">Over ons</a>
        <a href="contact.php">Contact</a>

        <div class="dropdown">
            <button class="mijnaccount"><img src="img/user.png"></button>
            <div class="dropdown-content ">
                <?php
                if (isset($_SESSION['name'])) {
                    if ($_SESSION['authority'] == "admin") {
                        echo '<a href="adminkeuze.php">Admin page</a>';
                    }
                } else {
                    echo '<a href="inloggen.php">Login</a>';
                } 
                if (isset($_SESSION['name'])) {
                    echo '<a href="/CRUD_Space/user/user.php">Mijn account</a>';
                    echo '<a href="connectie/sessionD.php">Uitloggen</a>';
                }
                ?>
                

            </div>
        </div>

    </nav>


</body>

</html>