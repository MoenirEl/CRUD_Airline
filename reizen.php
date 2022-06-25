<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/reizen.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/footer.css">
</head>

<body>
    <div id="bg"> </div>
    <?php
    include_once "nav.php";
    ?>

    <div class="container">
        <div class="white_space"></div>
        <div class="up_side">
            <!-- values van home page -->
        </div>
        <div class="white_space"></div>
        <div class="white_space_small"></div>
        <div class="left_side"></div>
        <div class="right_side">
            <div class="col-3">
                <form action="#">
                    <input type="date" id="start" name="trip-start" value="2022-06-23" min="2022-06-31" max="2023-10-25">
                </form>
            </div>
            <div class="col-3 zupper">
                <form action="#">
                    <label for="">personen</label>
                    <select name="">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                </form>
            </div>
            <div class="col-3"></div>
            <!-- ophalen van beschrijving -->
        </div>
        <div class="white_space_small"></div>
        <div class="white_space_small2"></div>

        <div class="bottom_side">
            <div class="row_3 ruimteschip">
                <h1 class="HR" >ruimteschip</h1>
                <label class="labelR1" for=""> klasse 3</label>
                <button class="ruimteB moveR">499 Euro</button>

                <label class="labelR2" for=""> klasse 2</label>
                <button class="ruimteB moveR2">549 Euro</button>

                <label class="labelR3" for=""> klasse 1</label>
                <button class="ruimteB moveR3">599 Euro</button>

            </div>
            <div class="row_3 wormhole">
                <h1 class="HW">Wormgat</h1>
                <button class="wormportB moveW">899 Euro</button>
                <button class="afrekenen">afrekenen</button>
            </div>
            <div class="row_3 teleport">
                <h1 class="HT">Teleportatie</h1>
                <button class="wormportB moveT ">999 Euro</button>


            </div>
        </div>
        <div class="white_space_small2"></div>
        <?php
        include_once "includes/footer.php";
        ?>

    </div>
    <script type="text/javascript" src="js/particles.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>

</body>

</html>