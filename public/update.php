<?php
include("../private/shared/header.php");
require_once("../private/initialize2.php");
?>
<style>
    .w3-container{
        text-align: center;
    }
    .admin{
        height: 100px;
        align-content: center;
        margin-left: 670px;
    }
    .tabel{
        display: flex;
    }


</style>

<html>
<title>Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>



<div >

    <div class="w3-container w3-teal">
        <h1>Admin page</h1>
    </div>

    <img src="images/admin.png" class="admin">

    <div class="w3-container">

    </div>

</div>

</body>
</html>
<?php
$sql = "SELECT * FROM klanten ";
$klantenOphalen = mysqli_query($db, $sql);


while($klanten = mysqli_fetch_assoc($klantenOphalen)):?>
    <div class="tabel">
        <table class="klanten" border="1">
            <tr>
                <td>KlantId</td>
                <td>Voornaam</td>
                <td>Achternaam</td>
                <td>Email</td>
                <td>Telefoonnummer</td>
                <td>Gebruikersnaam</td>
                <td>Wachtwoord</td>
            </tr>
            <tr>
                <td><?php echo $klanten["klantID"];?></td>
                <td><?php echo $klanten["Voornaam"];?></td>
                <td><?php echo $klanten["Achternaam"];?></td>
                <td><?php echo $klanten["Email"];?></td>
                <td><?php echo $klanten["Telefoonnummer"];?></td>
                <td><?php echo $klanten["Gebruikersnaam"];?></td>
                <td><?php echo $klanten["Wachtwoord"];?></td>

            </tr>
        </table>
    </div>

    <br>
<?php endwhile;?>
