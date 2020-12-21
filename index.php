<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
$title = "Svetaine Sportas";
$content = '
        <div class="container__flex">
            <div class="main-news">
                <img src="images/4.jpg" alt="female basketball players" class="img">
                <h1 class="main-h1">Pilietybės suteiktos: prie Lietuvos nacionalinės moterų krepšinio rinktinės galės prisijungti dar trys krepšininkės</h1>
                <p class="main-p">Prezidentūra patvirtino Kanados lietuvių prašymus dėl Lietuvos respublikos pilietybės suteikimo. <br> Šiandien, 21:50</p>
                <a href="zaidejos.php">
                    <span class="main-news-clickable"></span>
                </a>
                <hr class="stats-hr">
            </div>
            <div class="news">
                <h3>Naujausios </h3>
                <a href="#">12:34 Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>           
                <a href="#">23:45 Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>           
                <a href="#">01:23 Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>           
                <a href="#">12:34 Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>           
                <a href="#">23:45 Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>           
                <a href="#">01:23 Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>           
                <a href="#">12:34 Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>    
                <a href="#">12:34 Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>           
                <a href="#">23:45 Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>           
                <a href="#">01:23 Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>           
                <a href="#">12:34 Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>           
                <a href="#">23:45 Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>           
                <a href="#">01:23 Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>           
                <a href="#">12:34 Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>        
            </div>
        </div>
    </div>';
    $table = '';
    $footer = '';
    $page = include_once "templates/page.php";
?>