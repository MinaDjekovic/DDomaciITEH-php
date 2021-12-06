 <?php

    include "broker.php";
    include "igracka.php";
    if (isset($_POST['izbrisiDugme'])) {
        $idigracke = $_POST['idigracke'];
        $sql = "DELETE FROM igracke WHERE id=$idigracke";
        Broker::getBroker()->izvrsiUpit($sql);
        header('Location: igracke.php');
    }

    if (isset($_POST['id'])) {
        $id = $_POST['id'];

        $sql = "SELECT * FROM igracke WHERE id=$id";
        $result = Broker::getBroker()->izvrsiUpit($sql);
        $row = $result->fetch_object();
        $igracka = new Igracka($row->id, $row->kategorija, $row->naziv, $row->opis, $row->cena, $row->slika);
    }



    ?>
 <link rel="stylesheet" href="css/kontaktforma.css">
 <div class="form-style-6">
     <h2><b>Izbriši igračku</b></h2>

     <form action="izbrisiIgracke.php" method="post" style="background-image: url('<?php echo $igracka->getSlika() ?>'); background-size: cover; ">
         <input type="text" value="<?php echo $igracka->getId(); ?>" name="idigracke" hidden="hidden" />
         <input type="text" name="naziv" value="<?php echo $igracka->getNaziv(); ?>" readonly />
         <textarea name="opis" placeholder="Opis" readonly><?php echo $igracka->getOpis(); ?></textarea>
         <input type="text" value="<?php echo $igracka->getKategorija() ?>" readonly>
         <input type="text" name="cena" value="<?php echo $igracka->getCena(); ?>" readonly />

         <input type="submit" name="izbrisiDugme" value="Izbriši igračku" />
     </form>
 </div>