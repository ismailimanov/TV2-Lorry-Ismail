<?php
include("minibots.class.php");
$mb = new Minibots();
$data = $mb->getInstagramPicsByTag("kommunalvalg");

/* Data som vi kan hente: link, code, likes, created, low_resolution, standard_resolution, full_resolution, thumbnail, width, height */

if(is_array($data)) {
    if(!empty($data["pics"])) {
        foreach($data["pics"] as $billede) {
            echo '<img src="' . $billede["thumbnail"] . '" width="150"><br>';
            echo $billede["likes"] . "<br>";
        }
    } else {
        echo "Ingen billeder fundet!";
    }
} else {
    echo "Ugyldig data!";
}
?>