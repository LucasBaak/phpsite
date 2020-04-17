<?php
include("../private/shared/header.php");
require_once("../private/initialize2.php"); ?>
  <h3>U bent succesvol ingelogd!</h3>

<p>Kies hier uw volgende stap is: </p>

<div id="knoppen">
    <form method="POST" action="bestellen.php">
        <button class="bestellen" >Tickets bestellen</button>
    </form>
    <br>
    <form method="POST" action="programma.php">
        <button class="programma" >Bekijk het programma</button>
    </form>
    <br>
    <form method="POST" action="home.php">
        <button class="home" >Naar de homepagina</button>
    </form>
</div>
<h2> Uw Gegevens:</h2>
<?php
session_start();
$sql = "SELECT * FROM klanten ";
$klantenOphalen = mysqli_query($db, $sql);
$sql .= "WHERE Email ='" . $_SESSION['login_user'] . "';";
$klantenOphalen = mysqli_query($db, $sql);
$klant = mysqli_fetch_assoc($klantenOphalen);
echo "<table border='2px'><tr>";
foreach ($klant as $key => $value){
    echo "<td>" . $key . "</td>";


}
echo "</tr><tr>";
foreach ($klant as $key => $value){
    echo "<td>" . $value . "</td>";

}
?>
</tr>
</table>

<style>


.bestellen,.programma,.home{
    border: none;
}
</style>
<link rel="stylesheet" type="text/css" href="stylesheet/styling.css">

