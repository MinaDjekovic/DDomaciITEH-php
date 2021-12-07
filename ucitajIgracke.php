<?php
require "broker.php";
include "igracka.php";
if (isset($_POST['cena'])) {
    $sortiraj = $_POST['cena'];
    if (!empty($sortiraj)) {
        $part1 = " ORDER BY cena $sortiraj";
    } else {
        $part1 = "";
    }
} else {
    $part1 = "";
}


if (isset($_POST['kategorija'])) {
    $kate = trim($_POST['kategorija']);
    if (!empty($kate)) {
        $part2 = "SELECT * FROM igracke WHERE `kategorija`='" . $kate . "'";
    } else {
        $part2 = "SELECT * FROM igracke";
    }
} else {
    $part2 = "SELECT * FROM igracke";
}


$sql = $part2 . $part1;
$sql1 = "SELECT COUNT(*) AS 'REDOVA' FROM igracke";
$result = Broker::getBroker()->izvrsiUpit($sql);
$result1 = Broker::getBroker()->izvrsiUpit($sql);
$row1 = $result1->fetch_object();
$br = 0;
$br1 = 0;
?>

<?php

//da bi smestili po tri igracke
while ($row = $result->fetch_object()) {
    $igracka = new Igracka($row->id, $row->kategorija, $row->naziv, $row->opis, $row->cena, $row->slika);
    $br++;
    $br1++;
    if ($br > 3) {
        $br = 1;
    }
    if ($br !== 1) {
?>

        <div class="col span-1-of-3">
            <img src="<?php echo $igracka->getSlika(); ?>" class="profil" alt="" id="sl">
            <br>
            <h4 id="naz"><?php echo $igracka->getNaziv(); ?></h4>
            <br>
            <p id="kateg"><i class="ion-ios-pricetags-outline"> </i><i> Kategorija: <?php echo $igracka->getKategorija(); ?></i></p>
            <br>
            <p id="opis"><?php echo $igracka->getOpis(); ?></p>
            <br>

            <p class="cena"><b>Cena: <?php echo $igracka->getCena(); ?> RSD</b></p>
            <br><br>
            <a href="#" id="izmeni" onclick="izmeniIgrackuu(<?php echo $igracka->getId(); ?>)">Izmeni</a>
            <a href="#" id="izbrisi" onclick="izbrisiIgrackuu(<?php echo $igracka->getId(); ?>)">Izbriši</a>


        </div>


        <style type="text/css">
            #result {
                width: 80%;
                margin-left: 10%;
            }

            #opis {
                text-align: justify;
                padding-left: 10px;
                padding-right: 10px;
                font-size: 80%;
            }

            .cena {
                padding-top: 5px;
                padding-left: 10px;
                color: #f04242;
                ;
                float: left;
                width: 200px;

            }

            #sl {
                padding-left: 15%;
                width: 350px;
                height: 350px;
            }

            #kateg {
                text-align: center;
                padding: auto;
                font-size: 90%;
                color: #f04242;
                ;
            }

            #naz {
                text-align: center;
                padding: auto;
                color: #f04242;

            }

            #izbrisi {
                float: left;
                text-decoration: none;
                display: block;
                padding: 5px 20px;
                margin-left: 10px;
                color: #fff;
                background-color: #e8373e;
                border-radius: 5px;
                transition: background-color 0.3s;
            }

            #izbrisi:hover {
                background-color: #ed3f3f;

            }

            #izmeni {
                float: right;
                text-decoration: none;
                display: block;
                padding: 5px 20px;
                margin-left: 10px;
                color: #fff;
                background-color: #e8373e;
                border-radius: 5px;
                transition: background-color 0.3s;
            }

            #izmeni:hover {
                background-color: #ed3f3f;

            }

            #funkc {
                width: 80%;
                margin-left: 10%;
                margin-bottom: 5%;
                padding-top: 50px;
            }

            #funkc select {
                color: #fff;
                width: 250px;
                height: 30px;
                font-size: 80%;
                background-color: #f04242;
                border-radius: 10px;
            }

            #kategsel {
                margin-left: 10%;

            }

            #ordersel {
                float: right;
                margin-right: 10%;
            }
        </style>


    <?php } else { ?>
        <div class="row">

            <div class="col span-1-of-3">
                <img src="<?php echo $row->slika; ?>" class="profil" alt="" id="sl">
                <br>
                <h4 id="naz"><?php echo $row->naziv ?></h4>
                <br>
                <p id="kateg"><i class="ion-ios-pricetags-outline"> </i><i> Kategorija: <?php echo $row->kategorija ?></i></p>
                <br>
                <p id="opis"><?php echo $row->opis ?></p>
                <br>

                <p class="cena"><b>Cena: <?php echo $row->cena; ?> RSD</b></p>
                <br><br>
                <a href="#" id="izmeni" onclick="izmeniIgrackuu(<?php echo $row->id; ?>)">Izmeni</a>
                <a href="#" id="izbrisi" onclick="izbrisiIgrackuu(<?php echo $row->id; ?>)">Izbriši</a>
            </div>

        <?php }
    if ($br == 3) {
        ?>
        </div>
<?php }
} ?>
<?php
if ($br != 3)
?>
</div>

?>
<?php
?>