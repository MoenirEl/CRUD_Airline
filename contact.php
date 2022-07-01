<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/contact.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <?php session_start();
  require_once "connectie/pdo.php";
  if (isset($_POST["verzenden"])) {
    $sql = "INSERT INTO contact (naam,email,bericht) 
    VALUES (:naam,:email,:bericht)";

    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":naam", $_POST['naam']);
    $stmt->bindParam(":email", $_POST['email']);
    $stmt->bindParam(":bericht", $_POST['bericht']);
    $stmt->execute();
    header("Location: index.php");}
     ?>
  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Adres</div>
          <div class="text-one">Heyendaalseweg 98</div>
          <div class="text-two">6525 EE Nijmegen</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+1234567890</div>
          <div class="text-two">+0987654321</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">roy.ok@gmail.com</div>
          <div class="text-two">moenir.ok@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">contact ons!</div>
        <p> heb je vragen of gewoon wat chatten? contact ons!</p>
        <form action="" method="post">
          <div class="input-box">
            <input type="text" placeholder="typ hier je naam" name="naam">
          </div>
          <div class="input-box">
            <input type="text" placeholder="typ hier je email" name="email">
          </div>
          <div class="input-box message-box">
            <textarea placeholder="Stuur ons een berichtje!" name="bericht" id="" cols="50" rows="4"></textarea>
             </div>
             <button type="submit" name="verzenden" class="button ">verzend</button>
            </form>

  </div>
  </div>
  </div>

</body>


</html>