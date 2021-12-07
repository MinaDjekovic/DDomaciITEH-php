<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Toysland</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="images/favicon.ico.png" rel="shortcut icon" type="image/x-icon" />
    <link rel="stylesheet" href="css/grid.css">
    <script src="functions.js" type="text/javascript"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
</head>

<body>

    <div class="container">



        <nav class="meni1">
            <!-- <h1><i>TOYSLAND</i></h1> -->
            <h2></h2>
            <h2></h2>
            <ul id="navigacija2">
                <li id="kartice"><a href="index.php"><b>Početna</b></a></li>
                <li id="kartice"><a href="igracke.php "><b>Igračke</b></a></li>
                <li id="kartice"><a href="dodaj.php"><b>Dodaj</b></a></li>
                <li id="kartice"><a href="kontakt.php"><b>Kontakt</b></a></li>
            </ul>
        </nav>





        <div class="igracke">
            <select name="kategorija" id="kategorija" onchange="igrackeAjaxx()">
                <option value="">Izaberi kategoriju</option>
                <option value="Dečaci">Dečaci</option>
                <option value="Devojčice">Devojčice</option>
            </select>
            <select name="cena" id="cena" onchange="igrackeAjaxx()">
                <option value="">Cena</option>
                <option value="ASC">Rastući redosled</option>
                <option value="DESC">Opadajući redosled</option>
            </select>

            <div id="igracke" name="igracke">
                <?php include "ucitajIgracke.php"; ?>
            </div>


        </div>


</body>

</html>