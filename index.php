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
    include_once "nav.php";
    require_once "connectie/pdo.php";
    $sql = "SELECT * FROM reizen";
    $stmt = $connect->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    ?>
      

    <div class="container">
        <div class="textbox">
            <h1  id="wittext" >heb je ooit over nagedacht om naar de ruimte te gaan?</h1>
        </div>
        <div class="uniblok">
        
            <div class="routeblok">
                <form action="#">
                    <label for="van">reis</label>
                    <select name="Van" id="van">
                        <option name="retourreis">Retourreis</option>
                        <option name="enkele reis">Enkele reis</option>
                        <option name="meerdere planten">Meerdere planeten</option>
                    </select>
                </form>
            </div>
            <div class="reisvan">

                <form id="keuze1" action="#">
                    <label for="van">Vertrek van</label>
                    <select name="Van" id="van">
                    <?php foreach ($result as $re) { ?>
                        <option name="vertrek" ><?php echo $re["naam"]; ?></option>
                    <?php } ?>
                    </select>

                </form>
            </div>
            <div class="reisnaar">
                
                <form action="#" method="post">
                    <label for="van">Aankomst op</label>
                    <select name="Van" id="van">
                    <?php foreach ($result as $re) { ?>
                        <option name="aankomst" ><?php echo $re["naam"]; ?></option>
                    <?php } ?>
                    </select>
                    <input  type="submit" value="verzend" />     
                </form>
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

    <script type="text/javascript" src="js/particles.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
</body>
</html>