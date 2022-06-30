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

    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/nav.css">

    <title>HoofdpaginaS</title>
</head>

<body>

    <div id="bg"> </div>
    <?php
    include_once "includes/nav.php";
    require_once "connectie/pdo.php";
    $sql = "SELECT * FROM reizen";
    $stmt = $connect->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    ?>


    <div class="container">
        <div class="up_space" ></div>
        <div class="textbox">
            <h1 id="wittext">heeft u ooit over nagedacht om naar de ruimte te gaan?</h1>
        </div>
            <div class="uniblok">
                <div class="text_box" >
                    <h3 id="midtext" >Hier kan je overal naar toe gaan waar je van droomde. Van venus naar saturnus jouw keuze! waar wacht je op? als je meer wilt weten ga naar info en als je wilt boeken login!</h3>
                </div>
                <?php if (isset($_SESSION['authority'])) {
                        if ($_SESSION['authority'] == "admin" || $_SESSION['authority'] == "user") {
                            echo '<form action="reizen.php" method="post" id="indexform"> 
                         <button  type="submit"  id="indexformbutton">boeken</button>  </form>  ';
                        }
                    } else {
                        echo '<form action="inloggen.php" method="post" id="indexform"> 
                        <button type="submit" id="indexformbutton">inloggen</button>
                        </form>';
                    } ?>               
    </div>
    </div>
    <div class="onderblok">
        <div class="col-2">
            <div id="login">
                <h1 class="login_welkom">meer weten?</h1>
                <button onclick="document.location='info.php'" class="button login buttonknop2"> info</button>
            </div>
        </div>
        <div class="col-2">
            <div class="contact">
                <h1 class="contact_welkom">Heb je vragen? contact ons!</h1>
                <button onclick="document.location='contact.php'" class="button contactknop buttonknop">contact ons!</button>
            </div>
        </div>
    </div>
    </div>
        <?php
        include_once "includes/footer.php";
        ?>

    <script src="js/index.js"></script>
    <script type="text/javascript" src="js/particles.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
</body>

</html>