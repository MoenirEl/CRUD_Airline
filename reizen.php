<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boeking</title>
    <link rel="stylesheet" href="css/reizen.css">
    <link rel="stylesheet" href="css/footer.css">
</head>

<body>
    <div id="bg"> </div>
    <?php
    include_once "includes/nav.php";
    include_once "connectie/pdo.php";
    ?>

    <div class="container">
        <div class="white_space"></div>
        <div class="up_side">
            <p>u heeft de reis van</p><?php echo $_POST['Van'];?>
            <p>naar</p><?php echo $_POST['Naar'];?>
            <p>met</p><?php echo $_POST['Reis'];?>
            <p>geselecteerd.</p>
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
                <form action="boeking.php" id="boekingform" method="post">
                    <label for="">personen</label>
                    <select name="personen">
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
            

        </div>
        <div class="white_space_small"></div>
        <div class="white_space_small2"></div>




            </div>
        </div>
        <div class="white_space_small2"></div>
        <?php
        include_once "includes/footer.php";
        ?>

    </div>
    <script type="text/javascript" src="js/particles.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
    <script src="js/boeking.js"></script>

</body>

</html>
                <!-- <div class="routeblok">
                    <div class="routeform">
                        <label for="Reis">reis</label>
                        <select name="Reis" id="Reis">
                            <option selected></option>
                            <option value="retourreis">Retourreis</option>
                            <option value="enkele reis">Enkele reis</option>
                        </select>
                    </div>
                </div>
                <div class="reisvan">
                    <div class="reisvanform">
                        <label for="van">Vertrek van</label>
                        <select name="Van" id="Van">
                            <option selected></option>
                            <?php foreach ($result as $re) { ?>
                                <option name="vertrek"><?php echo $re["naam"]; ?></option>
                            <?php } ?>
                        </select>
                    </div>

                </div>
                <div class="reisnaar">
                    <div class="reisnaarform">
                        <label for="Naar">Aankomst op</label>
                        <select name="Naar" id="Naar">
                            <option selected></option>
                            <?php foreach ($result as $re) { ?>
                                <option name="aankomst"><?php echo $re["naam"]; ?></option>
                            <?php } ?>
                        </select> -->
                    </div>