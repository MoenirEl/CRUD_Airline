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
                <form action="#">
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



        </div>





  



    <?php
    include_once "includes/footer.php";
    ?>


<!--<button id="Off" onclick="myFunction()">Pause</button>
</div>-->





           

</body>

</html>
<script src="main.js"></script>