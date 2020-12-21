<?php
    include_once 'templates/dbh-ink.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="zaidejos.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
</head>

<body>
    <nav>
    <h3>krepsinis <i class="fas fa-basketball-ball"></i> Bet
        <a href="index.php">
            <span class="clickable"></span>
        </a>
    </h3>
    <ul>
        <li class="dropdown">
            <div class="dropbtn">Naujienos</div>
            <div class="dropdown-content">
                <a href="#">Never</a>
                <a href="#">Gonna</a>
                <a href="#">Give</a>
                <a href="#">You</a>
                <a href="#">Up</a>
            </div>
        </li>
        <li class="dropdown">
            <div class="dropbtn">Menedzeris</div>
            <div class="dropdown-content">
                <a href="#">Never</a>
                <a href="#">Gonna</a>
                <a href="#">Let</a>
                <a href="#">You</a>
                <a href="#">Down</a>
            </div>
        </li>
        <li class="dropdown">
            <div class="dropbtn">Rekomendacijos</div>
            <div class="dropdown-content">
                <a href="#">Never</a>
                <a href="#">Gonna</a>
                <a href="#">Run</a>
                <a href="#">Around</a>
                <a href="#">And</a>
                <a href="#">Desert</a>
                <a href="#">You</a>
            </div>
        </li>
        <li class="dropdown">
            <div class="dropbtn">Tvarkarastis</div>
            <div class="dropdown-content">
                <a href="#">Never</a>
                <a href="#">Gonna</a>
                <a href="#">Make</a>
                <a href="#">You</a>
                <a href="#">Cry</a>
            </div>
        </li>
        <li class="dropdown hide">
            <div class="dropbtn">Rezultatai</div>
            <div class="dropdown-content">
                <a href="#">Never</a>
                <a href="#">Gonna</a>
                <a href="#">Say</a>
                <a href="#">Goodbye</a>
            </div>
        </li>
        <li class="dropdown hide">
            <div class="dropbtn">Lenteles</div>
            <div class="dropdown-content">
                <a href="#">Never</a>
                <a href="#">Gonna</a>
                <a href="#">Tell</a>
                <a href="#">A</a>
                <a href="#">Lie</a>
            </div>
        </li>
        <li class="dropdown hide">
            <div class="dropbtn">Foto</div>
            <div class="dropdown-content">
                <a href="#">Or</a>
                <a href="#">Hurt</a>
                <a href="#">You</a>
            </div>
        </li>
        <li class="dropdown">
            <div class="dropbtn li">...</div>
            <div class="dropdown-content show">
                <a href="#">Rezultatai</a>
                <a href="#">Lenteles</a>
                <a href="#">Foto</a>
            </div>
        </li>
    </ul>

    <ul class="login">
        <li><i class="fab fa-facebook-f"></i></li>
        <li><i class="fas fa-rss"></i></li>
        <li><i class="fas fa-search"></i></li>
        <li>Registruotis</li>
        <li>Prisijungti</li>
    </ul>
    </nav>
    <div class="container">
        <div class="reklama">
            <div class="card-wrapper left-card">
                <div class="card">
                    <div class="front">ČIA</div>
                    <div class="back">ČIA</div>
                </div>
            </div>
            <div class="card-wrapper">
                <div class="card middle-card">
                    <div class="front">BUNA</div>
                    <div class="back">BUNA</div>
                </div>
            </div>
            <div class="card-wrapper">
                <div class="card right-card">
                    <div class="front">REKLAMOS</div>
                    <div class="back">REKLAMOS</span></div>
                </div>
            </div>
        </div>
        <?php echo $content ?>
        <?php echo $table ?>
        <?php echo $footer ?>
</body>
</html>