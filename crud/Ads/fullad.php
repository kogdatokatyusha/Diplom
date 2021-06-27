<?php
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="ad.css">

        <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    </head>


    <body>
        <header>
            <nav role='navigation'>
                <div>
                    <image src="/assets/logo.png" class="logo"</image>
                </div>

                <div class="WrapperForMainTitle">
                    <h1 class="MainTitle">
Здесь вы можете оказать разного рода помощь нуждающимся животным, не  прилагая особых  усилий
</h1></div>
            </nav>
        </header>

        <section>

            <?php
            $connect = mysqli_connect('localhost', 'root',
                'root', 'crud');
            $Ads = mysqli_query ($connect," SELECT * FROM `Ads` ");
            $Ads =mysqli_fetch_all($Ads);
            foreach ($Ads as $ad) {    //запрос для вывода данных
                ?>

                <div class="WrapperForCard">
                    <div  class="Card">
                        <div class="InCard">
                            <img src="/assets/kitr.jpg" width="70" align="top">

                            <h1><?= $ad[1] ?></h1>
                            <p><?= $ad[2] ?></p>
                            <p><?= $ad[3] ?></p>
                            <p><?= $ad[5] ?></p>
                            <p><?= $ad[7] ?></p>
                            <p><?= $ad[6] ?></p>
                            <p><?= $ad[8] ?></p>
                            <p class="data"><?= $ad[9] ?></p>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>


        </section>

    </body>
</html>
