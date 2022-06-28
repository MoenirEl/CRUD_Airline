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


    <link rel="stylesheet" href="./dist/tavo-calendar.css" />
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
        <div class="textbox">
            <h1  id="wittext" >heeft u ooit over nagedacht om naar de ruimte te gaan?</h1>
        </div>
            <form action="reizen.php" method="post">
        <div class="uniblok">
                   

                <div class="routeblok">
                    <div class="routeform" >
                        <label for="Reis">reis</label>
                        <select name="Reis" id="Reis">
                            <option selected></option>
                            <option value="retourreis">Retourreis</option>
                            <option value="enkele reis">Enkele reis</option>
                        </select>
                    </div>
                </div>
                <div class="reisvan">
                    <div class="reisvanform" >
                        <label for="van">Vertrek van</label>
                        <select name="Van" id="Van">
                            <option selected></option>
                            <?php foreach ($result as $re) { ?>
                                <option name="vertrek" ><?php echo $re["naam"]; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        
                    </div>
                    <div class="reisnaar">
                        <div class="reisnaarform" >
                            <label for="Naar">Aankomst op</label>
                            <select name="Naar" id="Naar">
                                <option selected></option>
                                <?php foreach ($result as $re) { ?>
                                    <option name="aankomst" ><?php echo $re["naam"]; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </form>
                            <button  type="submit"  id="indexformbutton" >verzend</button>
            </div>
        </div>

        </div>

        <div class="onderblok">
        <div class="col-2">
            <div id="login">
                <h1 class="login_welkom">Log in of register </h1>
                <button onclick="document.location='inloggen.php'" class="button login buttonknop2"> log in of register</button>
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
    <div id="footer">

        <?php
        include_once "includes/footer.php";
        ?>
    </div>
    <script src="js/index.js"></script>
    <script type="text/javascript" src="js/particles.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
</body>
</html>