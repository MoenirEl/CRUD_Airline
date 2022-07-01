<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/afrekenen.css">
</head>
<body>     
        <div id="bg" ></div>
    <div class="container" >
    <div class="white_space"></div>
        <div class="up_side"></div>
        <div class="white_space"></div>
        <div class="white_space_small"></div>
        <div class="midblok">

     <?php
    require_once "connectie/pdo.php";
    session_start();
    if (isset($_POST["verzenden"])) {
        $sql = "INSERT INTO reizen (naam,naarnaam,startDatum,manierVanReizen,Personen,reis,user) 
        VALUES (:naam,:naarnaam,:startDatum,:manierVanReizen,:Personen,:reis,:user)"; 

$stmt = $connect->prepare($sql);
$stmt->bindParam(":naam", $_POST['Van']);
$stmt->bindParam(":naarnaam", $_POST['Naar']);
$stmt->bindParam(":startDatum", $_POST['trip-start']);
$stmt->bindParam(":manierVanReizen", $_POST['manier']);
$stmt->bindParam(":Personen", $_POST['personen']);
$stmt->bindParam(":reis", $_POST['Reis']);
$stmt->bindParam(":user" , $_SESSION["id"]);
$stmt->execute();
$var = $_SESSION["id"];
$sql = "SELECT * FROM reizen where user = $var";
$stmt = $connect->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();
} elseif (isset($_POST['check'])) {
    
}

?>
<div class="text" >
        <?php foreach ($result as $re) {?>
            <?php echo "bedankt voor het reizen met spacery. u gaat van " 
            . $re['naam'] 
            . " naar " 
            . $re['naarnaam'] 
            . " u vertrekt op " 
            . $re['startDatum'] 
            . " en u heeft gekozen voor " 
            . $re['manierVanReizen'] 
            ." met " 
            . $re['Personen'] 
            ." person(en)"?>
<?php
}
?>

    
    </div>
    <div class="button">
        <button onclick="document.location='index.php'" >afrekenen</button>
    </div>
</div>
<div class="white_space_small"></div>
        <div class="white_space_small2"></div>
        <div class="bottom_side"></div>
        <div class="white_space_small2"> </div>
    </div>



    <script type="text/javascript" src="js/particles.min.js" ></script>
    <script type="text/javascript" src="js/custom.js" ></script>
</body>
</html>