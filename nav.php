<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/nav.css">
</head>
<body>
    <nav>
        
        <a href="index.php">home</a>
        <?php 
            session_start();
            if (isset($_SESSION['name'])) {
                echo '<a href="admin.php">admin page</a>';
            } else {
                echo '<a href="inloggen.php">login</a>';
            }
        ?>
        <a href="info.php">info</a>
        <a href="about.php">about us</a> 
        <?php 
            session_start();
            if (isset($_SESSION['name'])) {
                echo '<a href="admin.php">admin page</a>';
            } else {
                echo '<a href="inloggen.php">login</a>';
            }
        ?>
    </nav>
  

</body>
</html>