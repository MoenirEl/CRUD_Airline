<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/CRU.css">
</head>
<body>
  <?php
 require_once 'pdo.php';

if(isset($_POST["toevoegen"])){ 
    $sql = "INSERT INTO reizen (kosten,beschrijving,naam) VALUES (:kosten,:beschrijving,:naam)";

$stmt = $connect->prepare($sql);
$stmt->bindParam(":naam", $_POST['naam']);
$stmt->bindParam(":kosten", $_POST['kosten']);
$stmt->bindParam(":beschrijving", $_POST['beschrijving']);
$stmt->execute();
header("Location: ../admin.php");
}
?>

<form action="" method= "post">
    naam<input type="text" name="naam" id=""><br/>
    kosten<input type="text" name="kosten" id=""><br/>
    beschrijving<input type="text" name="beschrijving" id=""><br/>

    <input type="submit" name="toevoegen" value="submit">
    <a href="../admin.php">back</a>
</form>  
</body>
</html>
