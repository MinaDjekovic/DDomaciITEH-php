<?php 
include "broker.php";
if(isset($_POST['kontakt'])){
    $ime=$_POST['name'];
    $email=$_POST['email'];
    $text=$_POST['message'];
    
    if(strpos($email, '@') == true)
    {
    $sql="INSERT INTO kontakt (name, email, message) VALUES ('".$ime."','".$email."','".$text."')";
    Broker::getBroker()->izvrsiUpit($sql);
    header("Location: index.php");  
    }
    else
    {
        echo '<script type="text/javascript">alert("Pogresan unos mejla"); window.location.href = "index.php"; </script>';
    }
    // header("Location: index.php");  
    
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
    <h2><b>Kontakt forma</b></h2>
    <p><h3>Odgovor dobijate u najkraćem mogućem roku</h3></p>
<form action="kontakt.php" method="post">
<input type="text" name="name" placeholder="Vaše ime" />
<input   name="email" placeholder="Email adresa" />
<textarea name="message" placeholder="Unesite poruku"></textarea>
<input type="submit" name="kontakt" value="Pošalji poruku" />
</form>
</div>



</div>
</body>
</html>
