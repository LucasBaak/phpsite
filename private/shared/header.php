<!DOCTYPE html>
<html>
<title>Festival</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
header{
    height: 100px;
    background-color: #f1f1f1;

}
.button {
    display: inline-block;
    padding: 15px 25px;
    font-size: 20px;
    cursor: pointer;
    text-align: center;
    text-decoration: none;
    outline: none;
    color: #fff;
    background-color: #4CAF50;
    border: none;
    border-radius: 15px;
    box-shadow: 0 9px #999;
    float: right;
    margin-right: 15px;
    margin-top: 10px;
}

.button:hover {background-color: #3e8e41}

.button:active {
    background-color: #3e8e41;
    box-shadow: 0 5px #666;
    transform: translateY(4px);
}
.titel{
    text-align: center;
    margin-left: 650px;
    font-size: 35px;
}
</style>
<body>
<div id="header"><header>
        <div class="w3-sidebar w3-bar-block w3-animate-left" style="display:none;z-index:5" id="mySidebar">
            <button class="w3-bar-item w3-button w3-large" onclick="w3_close()">Sluiten &times;</button>
            <a href="home.php" class="w3-bar-item w3-button">Home</a>
            <a href="inloggen.php" class="w3-bar-item w3-button">Inloggen</a>
            <a href="register.php" class="w3-bar-item w3-button">Registreren</a>
            <a href="gegevens.php" class="w3-bar-item w3-button">Gegevens</a>
            <a href="programma.php" class="w3-bar-item w3-button">Programma</a>
            <a href="admin.php" class="w3-bar-item w3-button">Beheer</a>

        </div>
        <form method="POST" action="inloggen.php">
            <button class="button" >Inloggen</button>
        </form>
        <!-- Page Content -->
        <div>
            <button class="w3-button w3-lightgrey w3-xxlarge" onclick="w3_open()">&#9776;</button>
            <b class="titel">Festival Weekend 19-06-2020!</b>

        </div>
        <script>
            function w3_open() {
                document.getElementById("mySidebar").style.display = "block";
                document.getElementById("myOverlay").style.display = "block";
            }

            function w3_close() {
                document.getElementById("mySidebar").style.display = "none";
                document.getElementById("myOverlay").style.display = "none";
            }
        </script>
    </header></div>




</body>
</html>
