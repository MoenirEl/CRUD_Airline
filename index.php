<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/footer.css">


    <link rel="stylesheet" href="./dist/tavo-calendar.css" />
    <title>HoofdpaginaS</title>
</head>

<body>

    <video src="vid/background.mp4" muted loop autoplay id="vidSpace"></video>
    <?php
    include_once "nav.php";
    ?>

    <div class="container">
        <div class="textbox">
            <h1  id="paarstext" >heb je ooit over nagedacht om naar de ruimte te gaan?</h1>
        </div>
        <div class="uniblok">

            <div class="routeblok">
                <form action="#">
                    <label for="van">reis</label>
                    <select name="Van" id="van">
                        <option value="retourreis">Retourreis</option>
                        <option value="enkele reis">Enkele reis</option>
                        <option value="meerdere planten">Meerdere planten</option>
                    </select>
                </form>
            </div>
            <div class="reisvan">
                <form id="keuze1" action="#">
                    <label for="van">Vertrek van</label>
                    <select name="Van" id="van">
                        <option value="1">Aarde</option>
                        <option value="2">Mercurius</option>
                        <option value="3">Venus</option>
                        <option value="4">Mars</option>
                        <option value="5">Jupiter</option>
                        <option value="6">Saturnus</option>
                        <option value="7">Uranus</option>
                        <option value="8">Neptunus</option>
                    </select>

                </form>
            </div>
            <div class="reisnaar">
                <form action="#">
                    <label for="van">Aankomst op</label>
                    <select name="Van" id="van">
                        <option value="1">Aarde</option>
                        <option value="2">Mercurius</option>
                        <option value="3">Venus</option>
                        <option value="4">Mars</option>
                        <option value="5">Jupiter</option>
                        <option value="6">Saturnus</option>
                        <option value="7">Uranus</option>
                        <option value="8">Neptunus</option>
                    </select>
                    <input type="submit" value="Submit" />
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

    <script src="js/index.js"></script>

</body>

</html>
<script src="js/main.js"></script>