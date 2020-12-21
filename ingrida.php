<?php
    include 'templates/dbh-ink.php';

    $title = "Ingridos Statistika";

    $sql = "SELECT * FROM ingridos_stats";
    $result = mysqli_query($conn, $sql);
    $stats = array();
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $stats[] = $row;
        }
    }

    $dvitaskiai = "";
    $tritaskiai = "";
    foreach($stats as $stat){
        $dvitaskiai .= $stat['dvitaskiai'];
        $tritaskiai .= $stat['tritaskiai'];
    }
    $miss2pt = 0;
    $hit2pt = 0;
    $miss3pt = 0;
    $hit3pt = 0;
    $points = array_sum(str_split($dvitaskiai)) + array_sum(str_split($tritaskiai));
    foreach (count_chars($dvitaskiai, 1) as $i => $val) {
        if(chr($i) == 0){
            $miss2pt = $val;
        }
        if(chr($i) == 2){
            $hit2pt = $val;
        }
     }
     foreach (count_chars($tritaskiai, 1) as $i => $val) {
        if(chr($i) == 0){
            $miss3pt = $val;
        }
        if(chr($i) == 3){
            $hit3pt = $val;
        }
     }
     $pt2 = 100 / (($miss2pt + $hit2pt) / $hit2pt);
     $pt3 = 100 / (($miss3pt + $hit3pt) / $hit3pt);
    $content = '<div class="zaidejos-statistika">
                    <img src="images/a.jpg" alt="female playing basketball" class="stats-img">
                    <h2 class="stats-h2">Ingrida Brazdeikytė</h2>
                    <form class="stats-form">
                        <fieldset class="stats-fieldset">
                            <legend>Statistika</legend> <br>
                            <p>Pelnyti taškai: '.$points.'</p> <br>
                            <p>Dvitaškių metimų taiklumas: '.number_format($pt2, 2, '.', '').'%</p>
                            <p>Nepataikytų dvitaškių metimų skaičius: '.$miss2pt.'</p>
                            <p>Pataikytų dvitaškių metimų skaičius: '.$hit2pt.'</p> <br>
                            <p>Tritaškių metimų taiklumas: '.number_format($pt3, 2, '.', '').'%</p>
                            <p>Nepataikytų tritaškių metimų skaičius: '.$miss3pt.'</p>
                            <p>Pataikytų tritaškių metimų skaičius: '.$hit3pt.'</p> <br>
                        </fieldset>
                    </form>
                    <a href="index.php"><span class="span__right font">Grįžti į pradinį puslapį</a>
                    <hr class="stats-hr">
                </div>
            </div>';
    $table = "";
    $footer = "";

    include 'templates/page.php';
?>