<?php
include("../private/shared/header.php");
require_once("../private/initialize2.php");
$sql = "SELECT * FROM bestellingen ";
$bestellingenOphalen = mysqli_query($db, $sql);


while($bestelling = mysqli_fetch_assoc($bestellingenOphalen)):?>
<div class="tabel">
    <table class="bestelling" border="1">
        <tr>
            <td>KlantId</td>
            <td>Datum bestelling </td>
            <td>Naam</td>
            <td>Ticketsoort</td>
            <td>Aantal</td>

        </tr>
        <tr>
            <td><?php echo $bestelling["BestellingID"];?></td>
            <td><?php echo $bestelling["Datum"];?></td>
            <td><?php echo $bestelling["KlantID"];?></td>
            <td><?php echo $bestelling["Ticketsoort"];?></td>
            <td><?php echo $bestelling["Totaalprijs"];?></td>

        </tr>
        <?php endwhile;?>
