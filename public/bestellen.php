<?php
include("../private/shared/header.php");
require_once("../private/initialize2.php");
$message = "Let op! bij het bestellen moet u uw KlantenID invullen. Vult u die verkeerd in gaat de bestelling fout";
echo "<script type='text/javascript'>alert('$message');</script>";
?>
<link rel="stylesheet" type="text/css" href="stylesheet/styling.css">
Tickets bestellen
<form method="POST" action="bestellen.php">
    <table>
        <tr>
            <td><input type="hidden" name="formulier" value="bestellen"></td>
        </tr>
        <tr>
            <td>KlantID<br></td>
            <td><input type="text" name="gebruikersnaam"></td>
        </tr>
        <tr>
            <td>Datum</td>
            <td><input type="date" name="datum" >
            </td>
        </tr>
        <tr>
            <td>Aantal</td>
            <td><select name="aantal">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select></td>
        </tr>
        <tr>
            <td>Tickets</td>
            <td><select name="tickets">
                    <option value="Basic">Basic</option>
                    <option value="Premium">Premium</option>
                    <option value="VIP">VIP</option>
                </select></td>
        </tr>
    </table>
    <input type="submit" value="Bestellen" >
</form>
<?php
if (!empty($_POST)) {
if ($_POST['formulier'] == "bestellen") {
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$gebruikersnaams = $_POST['gebruikersnaam'];
$email = $_POST['datum'];
$aantal = $_POST['aantal'];
$ticket = $_POST['tickets'];
$sql = "INSERT INTO bestellingen (Datum,KlantID,Ticketsoort,Totaalprijs)
VALUES ('$email','$gebruikersnaams','$ticket','$aantal')";

if ($db->query($sql) === TRUE) {
    ?>

    <?php
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}
}
}
}


