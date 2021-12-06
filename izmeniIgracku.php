 <?php

    include "broker.php";
    include "igracka.php";
    if (isset($_POST['izmeniIgracku'])) {
        $idigracke = $_POST['idigracke'];
        $naziv = $_POST['naziv'];
        $opis = $_POST['opis'];
        $cena = $_POST['cena'];
        $kategorijaa = $_POST['kategorijaa'];


        $sql = "UPDATE igracke SET naziv='" . $naziv . "',kategorija='" . $kategorijaa . "',opis='" . $opis . "',cena='" . $cena . "' WHERE id='" . $idigracke . "'";
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
     <h2><b>Izmeni igračku</b></h2>

     <form action="izmeniIgracku.php" method="post" style="background-image: url('<?php echo $igracka->getSlika()  ?>'); background-size: cover; ">
         <input type="text" value="<?php echo $igracka->getId() ?>" name="idigracke" hidden="hidden" />
         <input type="text" name="naziv" value="<?php echo $igracka->getNaziv(); ?>" />
         <textarea name="opis" placeholder="Opis"><?php echo $igracka->getOpis(); ?></textarea>
         <select name="kategorijaa" id="kategorijaa">
             <option value="">Izaberi kategoriju</option>
             <option <?php if ($igracka->getKategorija() == "Dečaci") {
                            echo "selected";
                        } ?> value="Dečaci">Dečaci</option>
             <option <?php if ($igracka->getKategorija() == "Devojčice") {
                            echo "selected";
                        } ?> value="Devojčice">Devojčice</option>
         </select>
         <input type="text" name="cena" value="<?php echo $igracka->getCena(); ?>" />

         <input type="submit" name="izmeniIgracku" value="Izmeni igračku" />
     </form>
 </div>