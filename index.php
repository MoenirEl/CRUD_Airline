<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/index.css">
    <title>Document</title>
</head>
<body class="space" >
    <?php
    include_once "nav.php";
    ?>
    <div>
        
    </div>
    <div class="Van" >
        <form action="#">
            <label for="van">Van</label>
            <select name="Van" id="van" >
                <option value="aarde">Aarde</option>
                <option value="Mercurius">Mercurius</option>
                <option value="Venus">Venus</option>
                <option value="Mars">Mars</option>
                <option value="Jupiter">Jupiter</option>
                <option value="Saturnus">Saturnus</option>
                <option value="Uranus">Uranus</option>
                <option value="Neptunus">Neptunus</option>
            </select>
            <input type="submit" value="Submit" />
        </form>
    </div>
  
    
</body>
</html>