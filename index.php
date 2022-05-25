<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/index.css">

    <link rel="stylesheet" href="./dist/tavo-calendar.css" />
    <title>Document</title>


    <title>HoofdpaginaS</title>

</head>

<body class="space">
    <?php
    include_once "nav.php";
    ?>


    <div class="container">
        <div class="routeblok">
            <form action="#">
                <label for="van">reis</label>
                <select name="Van" id="van">
                    <option value="aarde">Retourreis</option>
                    <option value="Mercurius">Enkele reis</option>
                    <option value="Venus">Meerdere planten</option>
                </select>
                
            </form>
        </div>
        <div class="reisvan">
            <form action="#">
                <label for="van">Van</label>
                <select name="Van" id="van">
                    <option value="aarde">Aarde</option>
                    <option value="Mercurius">Mercurius</option>
                    <option value="Venus">Venus</option>
                    <option value="Mars">Mars</option>
                    <option value="Jupiter">Jupiter</option>
                    <option value="Saturnus">Saturnus</option>
                    <option value="Uranus">Uranus</option>
                    <option value="Neptunus">Neptunus</option>
                </select>
                
            </form>
        </div>
        <div class="reisnaar">
            <form action="#">
                <label for="van">naar</label>
                <select name="Van" id="van">
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
    <script src="https://cdn.jsdelivr.net/npm/moment@latest/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/moment@latest/min/moment-with-locales.min.js"></script>
    <script src="./dist/tavo-calendar.js"></script>