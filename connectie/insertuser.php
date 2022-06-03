<?php
require_once 'pdo.php';



$stmt = $conn->prepare("INSERT INTO producten (naam, voorraad, prijs, img) VALUES (:naam, :voorraad, :prijs, :img)");

$stmt->execute(array(':naam' => $_POST['naam'], ':voorraad' => $_POST['voorraad'], ':prijs' => $_POST['prijs'], ':img' => $_POST['img']));



header('Location: admin.php');
?>

<form action="" method="post">
    username: <input type="text" name="naam" id=""value=" <?php echo $data [':username']; ?>"><br />
    password: <input type="text" name="prijs" id="" value="<?php echo $data [':password']; ?> " ><br />
    e-mail: <input type="text" name="beschrijving" id=""value=" <?php echo $data [':mail']; ?>"><br />

    <input type="submit" name="aanpassen" value="submit">
    <a href="../admin.php">back</a>
</form>