<?php
include("inc/config.php");
if($_SESSION["first_time"] == 0){
    $_SESSION["first_time"] = 1;
}
$sidensLink = $_GET["side"];
$sidensLink = str_replace("/TV2-Lorry/loading?side=", "", $sidensLink);
?>
<!doctype html>
<html lang="da">
    <head>
        <title>FADBAMSEVALG17 - Kommunalvalg 2017</title>
        <meta charset="utf-8">
        <link href="css/splashscreen.css" type="text/css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <meta name="keywords" content="FADBAMSEVALG, FADBAMSEVALG17, FADBAMSEVALG 2017, Kommunalvalg, Kommunalvalg17, Kommunalvalg 2017, Valg, Valg17, Valg 2017, Grøn Koncert, Grøn Koncert 2018, Grøn Koncert Billetter">
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-100004643-1', 'auto');
            ga('send', 'pageview');

        </script>
    </head>
    <body>
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
    <script type="text/javascript">
        $('.procent').animate(
            {width:'100%'},
            {
                duration:3500,
                step: function(now, fx) {
                    if(fx.prop == 'width') {
                        $(this).html(Math.floor(now * 100) / 100 + '%');
                        if(now == 100){
                            $(location).attr('href','<?=$sidensLink?>');
                        }
                    }
                }
            }
        );
    </script>
    </body>
</html>