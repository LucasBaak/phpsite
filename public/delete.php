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
        justify-content: center;
    }

</style>

<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%">

    <a href="users.php" class="w3-bar-item w3-button">User</a>
    <a href="delete.php" class="w3-bar-item w3-button">Delete user</a>
    <a href="update.php" class="w3-bar-item w3-button">Update user</a>
</div>

<div style="margin-left:25%">

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
            <td><?php echo $klanten["klantID"];?></td>
        </tr>
        <tr>
            <td>Voornaam</td>
            <td><?php echo $klanten["Voornaam"];?></td>
        </tr>
        <tr>
            <td>Achternaam</td>
            <td><?php echo $klanten["Achternaam"];?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo $klanten["Email"];?></td>
        </tr>
        <tr>
            <td>Telefoonnummer</td>
            <td><?php echo $klanten["Telefoonnummer"];?></td>
        </tr>
        <tr>
            <td>Gebruikersnaam</td>
            <td><?php echo $klanten["Gebruikersnaam"];?></td>
        </tr>
        <tr>
            <td>Wachtwoord</td>
            <td><?php echo $klanten["Wachtwoord"];?></td>
        </tr>
        <tr>
            <td>Delete user</td>
            <td><a href="verwijderen.php">Delete</a> </td>
        </tr>
    </table>
</div>

    <br>
<?php endwhile;?>
