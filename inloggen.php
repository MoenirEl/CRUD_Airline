<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>

  <link rel="stylesheet" href="css/login.css">
</head>

<body>
  <?php
  $melding = '';
  if (isset($_GET['message'])) {
    $message = $_GET['message'];

    if ($message === 'gelukt') {
      $melding = 'Uw gebruiker is aangemaakt';
    }
  }
  ?>

  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">


        <img src="img/login-foto.jpg" alt="">
        <div class="text">
          <span class="text-1">Every flight is a <br> new adventure</span>
          <span class="text-2">Let's get flying</span>
        </div>
      </div>
      <div class="back">
        <img class="backImg" src="img/login-foto.jpg" alt="">
        <div class="text">
          <span class="text-1">Complete miles of journey <br> with one step</span>
          <span class="text-2">Let's get started</span>
        </div>
      </div>
    </div>
    <div class="forms">
      <div class="form-content">
        <div class="login-form">
          <div class="title">Login <?php echo $melding; ?></div>
          <form action="connectie/ingelogd.php" method="post">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" name="username" placeholder="Typ je gebruikersnaam" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="text" name="password" placeholder="Typ je wachtwoord" required>
              </div>
              <div class="text"><a href="#">Wachtwoord vergeten?</a></div>
              <div class="button input-box">
                <input type="submit" value="Login">
              </div>
              <div class="text sign-up-text">Geen account? <label for="flip">Schrijf je nu in!</label></div>
              <div class="text back-to-home"><a href="index.php">Terug?</a></div>
            </div>
          </form>
        </div>
        <div class="signup-form">
          <div class="title">Signup</div>
          <form action="connectie/insertuser.php" method="post">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" name="username" placeholder="Typ je gebruikersnaam" required><br />
              </div>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" name="password" placeholder="Typ je wachtwoord" required><br />
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="email" name="mail" placeholder="Typ je Email" required><br />
              </div>
              <div class="button input-box">
                <input type="submit" value="Verzend" name="submitknop">
              </div>
              <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label></div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php
  session_start();
  if (isset($_SESSION['name'])) {
    //echo "gelukt";
  } else {
    //echo 'niet gelukt';
  }

  ?>
</body>

</html>