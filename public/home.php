<?php
include("../private/shared/header.php");
require_once ("../private/initialize2.php");
?>
<style>
    #artikel{
        height: 500px;
        width: 300px;
        float: left;
        align-content: center;
    }
    .elstak{
        height: 250px;
        width: 350px;
        float: left;
        padding-left: 100px;
    }
    h3{
        color: red;
        padding-left: 110px;
    }
    p{
        padding-left: 110px;
    }

</style>
<link rel="stylesheet" type="text/css" href="stylesheet/styling.css">
<body>
<div id="artikel">
    <h3>BREAKING NEWS</h3>
    <p>Dj Paul Elstak is te bewonderen op ons festival!
    De 54e jarige Hagenees is op zaterdag avond te zien. Meer info bij het <a href="programma.php">programma!</a></p>

    <img class="elstak" src="images/Paul-Elstak.jpg">
</div>
<div class="slideshow-container">

    <div class="mySlides fade">
        <div class="numbertext"></div>
        <img src="images/festival.jpg" style="width:50%;  margin-left: 150px">
        <div class="text"></div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext"></div>
        <img src="images/festival4.jpg" style=" width:50%; margin-left: 150px ">
        <div class="text"></div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext"></div>
        <img src="images/festival5.jpg" style="width:50%; margin-left: 150px">
        <div class="text"></div>
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
</div>
<script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        setTimeout(showSlides, 4000); // Change image every 4 seconds
    }
</script>
<br>
</body>
