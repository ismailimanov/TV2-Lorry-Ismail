<?php
/* FADBAMSEVALG17 Funktioner Fil */

    function hentCitat($link){
        $hentData = mysqli_query($link, "SELECT * FROM citater ORDER BY RAND() LIMIT 1");

        while($data = mysqli_fetch_array($hentData)){
            ?>
            <img src="<?=$data["billedeLink"]?>" alt="Person billede"><br>
            <span><?=$data["fuldeNavn"]?></span>
            <p class="flow-text"><b>For at inddrage de unge bedre i demokratiet, skal der være</b> <?=$data["citat"]?></p>
            <?php
        }
    }

    function sendBesked($link, $fuldeNavn, $email, $emne, $besked){
        mysqli_query($link, "INSERT INTO kontakt (fuldeNavn, emailAdresse, emne, besked) VALUES ('{$fuldeNavn}', '{$email}', '{$emne}', '{$besked}')");
    }

    function hentBeskeder($link){
        $hentData = mysqli_query($link, "SELECT * FROM kontakt ORDER BY id DESC");

        while($data = mysqli_fetch_array($hentData)){
            ?>
            <div class="kontaktBoks">
                <b>Fulde Navn:</b> <?=htmlspecialchars(strip_tags($data["fuldeNavn"]));?><br>
                <b>E-mail Adresse:</b> <a href="mailto:<?=htmlspecialchars(strip_tags($data["emailAdresse"]));?>"><?=htmlspecialchars(strip_tags($data["emailAdresse"]));?></a><br>
                <b>Emne:</b> <?=htmlspecialchars(strip_tags($data["emne"]));?><br>
                <b>Besked:</b><br>
                <?=htmlspecialchars(strip_tags($data["besked"]));?>
            </div>
            <?php
        }
    }

    function loadingHead(){
        if($_SESSION["first_time"] == 0){
            ?>
                <link href="css/splashscreen.css" type="text/css" rel="stylesheet">
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
            <?php
        }
    }

    function loadingBody(){
        if($_SESSION["first_time"] == 0){
        ?>
        <div class="loadingBoks">
            <div class="splashscreen">
                <div class="kop">
                    <div class="oel"></div>
                </div>
                <div class="bobbler"></div>
                <div class="skum"></div>
            </div>
            <div class="procentBeholder">
                <div class="procent">100%</div>
            </div>
        </div>
        <?php
        }
    }

    function loadingScript(){
        if($_SESSION["first_time"] == 0){
        ?>
            <script type="text/javascript">
                $('.procent').animate(
                    {width:'100%'},
                    {
                        duration:3500,
                        step: function(now, fx) {
                            if(fx.prop == 'width') {
                                $(this).html(Math.floor(now * 100) / 100 + '%');
                                if(now == 100){
                                    $('.loadingBoks').fadeOut('slow');
                                }
                            }
                        }
                    }
                );
            </script>
        <?php
            $_SESSION["first_time"] = 1;
        }
    }
?>