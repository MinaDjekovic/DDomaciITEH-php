<?php
include "broker.php";
if (isset($_POST['dugme'])) {
    $naziv = $_POST['naziv'];
    $opis = $_POST['opis'];
    $cena = $_POST['cena'];
    $slika = $_POST['slika'];
    $kategorijaa = $_POST['kategorijaa'];

    $targetfolder = "images/";
    $targetfolder = $targetfolder . basename($_FILES['file']['name']);
    $putanja = "images/" . basename($_FILES['file']['name']);

    $sql = "INSERT INTO igracke (kategorija, naziv, opis, slika, cena) VALUES ('" . $kategorijaa . "','" . $naziv . "','" . $opis . "','" . $putanja . "','" . $cena . "')";

    $ok = 1;

    $file_type = $_FILES['file']['type'];

    // pomeranje slike 
    if ($file_type == "image/jpeg") {

        if (move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder)) {
            Broker::getBroker()->izvrsiUpit($sql);
            header('Location: igracke.php');
        }
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Toysland</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="images/favicon.ico.png" rel="shortcut icon" type="image/x-icon" />
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/kontaktforma.css">
</head>

<body>

    <div class="container">

        <!-- <header class="header1"> -->

        <nav class="meni1">
            <!-- <h1><i>TOYSLAND</i></h1> -->
            <h1></h1>
        </nav>

        <!-- </header> -->
        <div class="form-style-6">
            <h2>
                <ul>
                    <li id="kartice"><a href="index.php"><b>Početna</b></a></li>
                    <li id="kartice"><a href="igracke.php "><b>Igračke</b></a></li>
                    <li id="kartice"><a href="dodaj.php"><b>Dodaj</b></a></li>
                    <li id="kartice"><a href="kontakt.php"><b>Kontakt</b></a></li>
                </ul>
            </h2>
            <h2><b>Dodaj igračku</b></h2>

            <form action="dodaj.php" method="post" enctype="multipart/form-data">
                <input type="text" name="naziv" placeholder="Naziv igračke" />
                <textarea name="opis" placeholder="Opis"></textarea>
                <select name="kategorijaa" id="kategorijaa">
                    <option value="">Izaberi kategoriju</option>
                    <option value="Dečaci">Dečaci</option>
                    <option value="Devojčice">Devojčice</option>
                </select>
                <input type="number" name="cena" placeholder="Cena" />
                <input type="file" name="file">
                <input type="submit" name="dugme" value="Dodaj igračku" />
            </form>
        </div>


    </div>
</body>

</html>