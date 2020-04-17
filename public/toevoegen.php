<?php
require_once("../private/initialize2.php");
if (!empty($_POST)) {
    if ($_SERVER["REQUEST_METHOD"] == "POST"){

$voornaam = $_POST['vnaam'];
$achternaam = $_POST['anaam'];
$email = $_POST['email'];
$telefoonnummer = $_POST['telnummer'];
$gebruikersnaam = $_POST['gebruikersnaam'];
$wachtwoord = $_POST['wachtwoord'];


$sql = "INSERT INTO gebruiker (Voornaam, Achternaam, Email,Telefoonnummer,Gebruikersnaam, Wachtwoord,Rol)
VALUES ('$voornaam','$achternaam','$email','$telefoonnummer','$gebruikersnaam','$wachtwoord','Admin')";

$gebruikerAanmaken = mysqli_query($db,$sql);
echo "mysqli_error($sql)" . "<br>";
}
}
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
.register{
    display: flex;
    justify-content: center;
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%">

    <a href="users.php" class="w3-bar-item w3-button">User</a>
    <a href="delete.php" class="w3-bar-item w3-button">Delete user</a>
    <a href="update.php" class="w3-bar-item w3-button">Update user</a>
    <a href="toevoegen.php" class="w3-bar-item w3-button">Toevoegen user</a>

</div>
<div style="margin-left:25%">

    <div class="w3-container w3-teal">
        <h1>Admin page</h1>
    </div>

    <img src="images/admin.png" class="admin">

    <div class="w3-container">

    </div>

</div>
<div class="register">

    <br><form method="post">
            <input type="hidden" name="formulier" value="registreren" />
            <input type="text" name="vnaam" placeholder="Voornaam" required="required" /> <br>
            <input type="text" name="anaam" placeholder="Achternaam" required="required" /> <br>
            <input type="email" name="email" placeholder="Email" required="required" /><br>
            <input type="tel" name="telnummer" placeholder="Telefoonnummer" required="required" /><br>
            <input type="text" name="gebruikersnaam" placeholder="Gebruikersnaam" required="required" /> <br>
            <input type="password" id="wachtwoord" name="wachtwoord" placeholder="Wachtwoord" required="required" /> <br>
        <button type="submit" class="btn btn-primary btn-block btn-large">toevoegen</button>

        <h1>Admin toevoegen</h1> <br>
