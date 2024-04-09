<?php
include("php/conexion.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyPixelArt's</title>
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/stylo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <header id="menu" class="menuFlotante">
        <button id="color1" class="color" style="background-color: #000000;"></button>
        <button id="color2" class="color" style="background-color: #1d2b53;"></button>
        <button id="color3" class="color" style="background-color: #7e2553;"></button>
        <button id="color4" class="color" style="background-color: #5f574f;"></button>
        <button id="color5" class="color" style="background-color: #ab5236;"></button>
        <button id="color6" class="color" style="background-color: #008751;"></button>
        <button id="color7" class="color" style="background-color: #83769c;"></button>
        <button id="color8" class="color" style="background-color: #ff004d;"></button>
        <button id="color9" class="color" style="background-color: #ff77a8;"></button>
        <button id="color10" class="color" style="background-color: #29adff;"></button>
        <button id="color11" class="color" style="background-color: #ffa300;"></button>
        <button id="color12" class="color" style="background-color: #c2c3c7;"></button>
        <button id="color13" class="color" style="background-color: #00e436;"></button>
        <button id="color14" class="color" style="background-color: #583414;"></button>
        <button id="color15" class="color" style="background-color: #ffffff;"></button>
    </header>

    <div class=" titulo">
        <h1>
            My Pixel Art's
        </h1>
    </div>

    <div class="canvaContainer">
        <canvas id="canvas" width="1000" height="1000"></canvas>
    </div>

    <div class="menuRedes">
        <a href="https://www.facebook.com/MyPixelArts-100332632425622" target="_blank">
            <img src="img/icons8-facebook-69.png" alt="facebook" width="50px" height="50px" class="grow">
        </a>
        <a href="https://www.instagram.com/mypixelarts_/" target="_blank">
            <img src="img/icons8-instagram-69.png" alt="instagram" width="50px" height="50px" class="grow">
        </a>
    </div>
    <div class="menuAvisos">
        <button class="boton grow">
            <img src="img/icons8-engranaje-69.png" alt="">
        </button>
        <button class="boton grow">
            <img src="img/icons8-imagen-69.png" alt="">
        </button>
    </div>
    <footer class="infoGral">
        <div class="info">
            <h1>Información</h1>
            <li>MyPixelArts es una página web donde podrás crear tus propios pixel arts, para ello solo tienes que
                seleccionar el color que quieras y hacer click en el pixel que quieras pintar.</li>
            <li>
                </a> icon by <a href="https://icons8.com">Icons8</a>
            </li>

        </div>
    </footer>

</body>

</html>
<script src="js/set.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>