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


    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/about.css">

    <link rel="stylesheet" href="./dist/tavo-calendar.css" />
    <title>Document</title>


    <title>HoofdpaginaS</title>

</head>
<?php
require_once "connectie/pdo.php";
if (isset($_POST["verzenden"])) {
    $sql = "INSERT INTO reviews (bericht) 
    VALUES (:bericht)";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":bericht", $_POST['bericht']);
    $stmt->execute();
}
?>
<div id="bg"> </div>

<body>
    <?php
    include "includes/nav.php";
    ?>


    <div class="container">
        <div class="ruimte">
            <div class="wrapper">
                <div class="contact">
                    <div class="image">
                        <img src="img/Eclipse.jpg" alt="travel" />
                    </div>
                    <div class="content">
                        <h2>Over ons</h2>
                        <p>Waarom hebben we dit bedrijf eigenlijk gemaakt? simpel we wouden dat mensen die ooit over nagedacht hadden "wat het zal zijn in de ruimte" een kans te geven om het te ervaren. Roy en Moenir hebben alles gedaan om het waar te maken en nu is het eindelijk tijd om jullie te laten zien wat we hebben bereikt. </p>
                        <p>Wat komt er in de toekomst? In de verre toekomst hopen we dat we verder kunnen gaan dan mensen ooit kunnen druven dromen. We hebben het dan over een anderen universums om dit mogelijk te maken zijn wel elke dag bezig om zo veel mogelijk dingen te verbeteren. Stap voor stap komen we naar ons goal. </p>
                    </div>
                    <form action="" method="post">
                        <div>
                            <textarea name="bericht" placeholder="laat ons weten wat we kunnen verbeteren!" id="reviews" cols="30" rows="10"></textarea>
                            <button type="submit" name="verzenden">verzend</button>
                        </div>
                    </form>
                <div class="reveiwes">
                    <?php
                    $sql = "SELECT * FROM reviews";
                    $stmt = $connect->prepare($sql);
                    $stmt->execute();
                    $result = $stmt->fetchAll();
                    foreach ($result as $re) { ?>
                        <div class="blok">
                            <?php echo $re['bericht']; ?>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                </div>

            </div>

        </div>

    </div>

    <?php
    include_once "includes/footer.php";
    ?>

    <script type="text/javascript" src="js/particles.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>

</body>


</html>