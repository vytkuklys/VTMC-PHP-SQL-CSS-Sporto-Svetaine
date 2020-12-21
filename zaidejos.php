<?php
    include 'templates/dbh-ink.php';
    $title = "Zaidejos";
    $content = '<div class="container__flex">
    <div class="main-news">
        <h1 class="zaidejos-header">Pilietybės suteiktos: prie Lietuvos nacionalinės moterų krepšinio rinktinės
            galės prisijungti dar trys krepšininkės</h1>
        <p><span class="span__right">Šiandien, 21:50</span></p>
        <img src="images/4.jpg" alt="female basketball players" class="img">
        <p><span class="span__right">Lorem ipsum dolor sit amet consectetur.</span></p>
        <hr class="hr">
        <p class="zaidejos-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus expedita
            cumque ad dolores molestiae illo adipisci similique tenetur repellendus voluptatum!
            <br><br>
            Praesentium fugit sit, ex laboriosam deserunt tempore consequatur repellendus commodi?
            <br><br>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus expedita cumque ad dolores
            molestiae illo adipisci similique tenetur repellendus voluptatum! Praesentium fugit sit, ex
            laboriosam deserunt tempore consequatur repellendus commodi?</p>
            <table>
                    <tr>
                        <th colspan="3">Pilietybes gavo: </th>
                    </tr>';
        $sql = "SELECT * FROM zaidejos;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        $table = '';
        if($resultCheck > 0){
            while($row = mysqli_fetch_assoc($result)){
                $firstname = $row['firstname'];
                $lastname = $row['lastname'];
                $photo = $row['photo'];
                $table .= '
                    <tr>
                        <td><img src="'.$photo.'" class="table-img alt="female basketball player"></th>
                        <td><a href="'.$firstname.'.php"><span class="uppercase">'.$firstname.'</span> '.$lastname.'</a></th>
                    </tr>';
            }
        }
        $footer = '</table>
        <a href="index.php"><span class="span__right font">Grįžti į pradinį puslapį</a>
        </div>
        <div class="zaideju-news">
            <div class="zaidejos-reklama">
                <div class="snow__bottom_left"><i class="far fa-snowflake fa-5x"></i></div>
                <div class="snow__bottom_right"><i class="far fa-snowflake fa-5x"></i></div>
                <p class="reklama-text">Ir čia reklama</p>
                <div class="snow__top_left"><i class="far fa-snowflake fa-5x"></i></div>
                <div class="snow__top_right"><i class="far fa-snowflake fa-5x"></i></div>
            </div>
        </div>
        </div>
        </div>
        </div>';
    include 'templates/page.php';
?>