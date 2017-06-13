<?php
include("../inc/config.php");
if(isset($_REQUEST['postNr'])){
    $postNr = $_REQUEST['postNr'];
    $hentValgsteder = mysqli_query($link, "SELECT DISTINCT asdf, KommuneNav, AfstemNav FROM valgsteder WHERE postnr='$postNr'");
    $hentAntal = mysqli_num_rows($hentValgsteder);

    if($hentAntal == 0){
        echo "<span class='valgstedTekst'>Der blev desværre ikke fundet nogle valgsteder i denne kommune. Hvis du tror at dette er en fejl, kan du læse mere på <a href='http://www.kl.dk/Kommunalpolitik1/Kommunalvalg1/'>KL's egen hjemmeside.</a></span>";
    } else {
        echo "<b>Valgsteder i denne kommune</b><br>";
        while($row = mysqli_fetch_array($hentValgsteder)){
            $kommuneNavn = $row["KommuneNav"];
            $afstemNavn = $row["AfstemNav"];

            echo $postNr . " - " . $kommuneNavn . " - " . $afstemNavn . "<br>";
        }
    }
}
?>