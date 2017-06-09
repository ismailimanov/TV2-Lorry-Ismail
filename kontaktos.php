<?php
$filNavn = basename(__FILE__, '.php');
include("header.php");
if(isset($_POST["sendBesked"])){
    $fuldeNavn = htmlspecialchars(strip_tags($_POST["fuldeNavn"]));
    $email = htmlspecialchars(strip_tags($_POST["email"]));
    $emne = htmlspecialchars(strip_tags($_POST["emne"]));
    $besked = htmlspecialchars(strip_tags($_POST["besked"]));

    sendBesked($link, $fuldeNavn, $email, $emne, $besked);
}
?>
    <div class="topslider kontaktostop valign-wrapper">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h1 class="sliderOverskrift">Kontakt os</h1>
                </div>
            </div>
        </div>
        <div class="oel oelAnim"></div>
    </div>
    <div class="skumBund"></div>
    <div class="container kontakt">
        <div class="row">
            <div class="col s12 m12 l8">
                <span class="kontaktOver">Har du et spørgsmål? Så skriv til os!</span>
                <form action="#" method="post">
                    <input type="text" name="fuldeNavn" placeholder="Dit navn" required>
                    <input type="email" name="email" placeholder="Din e-mail adresse" required>
                    <input type="text" name="emne" placeholder="Emne" required>
                    <textarea name="besked" placeholder="Din besked" required></textarea>
                    <button name="sendBesked"><i class="fa fa-envelope-o"></i> Send Besked</button>
                </form>
            </div>
            <div class="col s12 m12 l4 virkInfo">
                <span class="virkOver">Virksomhedsoplysninger</span>
                FADBAMSEVALG ApS<br>
                <br>
                <i class="fa fa-map-marker"></i> Nørgaardsvej 30<br>
                &nbsp;&nbsp; 2800 Kongens Lyngby<br><br>
                <i class="fa fa-phone"></i> +45 36 15 45 04
            </div>
        </div>
    </div>
<?php
include("footer.php");
?>
