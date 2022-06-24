<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/reizen.css">
    <link rel="stylesheet" href="css/footer.css">
</head>

<body>
    <div id="bg"> </div>
    <?php
    include_once "nav.php";
    ?>

    <div class="container">
        <div class="white_space"></div>
        <div class="up_side"></div>
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
                <select name="" >
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

        <?php
        include_once "includes/footer.php";
        ?>

    </div>
    <script type="text/javascript" src="js/particles.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>

</body>

</html>