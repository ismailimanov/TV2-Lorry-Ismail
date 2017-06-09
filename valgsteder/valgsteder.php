<?php
// Denne fil er til at hente alt data om valgstederne fra databasen, og ved hjælp af Google Maps API, finde deres latitude og longtitude, så vi nemmere kan placere dem.
// Tænkt til vores "Find din nærmeste valgsted" funktion.

// Tilslutning til database
$link = mysqli_connect("localhost","337d72ce71f5","b4bc35fae38a517e","valg");

// Tjek om der er fejl i forbindelsen
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Hent valgsteder data fra databasen
// Vi henter kun 200 af gangen, så vi ikke bliver blokeret fra Google Maps API.
// Vi vælger også kun de rækker, som ikke har en latitude endnu, så vi ikke overskriver gammel data.
$valgData = mysqli_query($link, "SELECT * FROM valgsteder WHERE lat IS NULL LIMIT 200");

// Tilføj latitude og longtitude til hver felt.
while($vD = mysqli_fetch_array($valgData)){
    $kommuneNav = $vD["KommuneNav"];
    $afstemNav = $vD["AfstemNav"];
    $objectID = $vD["OBJECTID"];

    // Bruger kommune navn og lokation navn, for at kunne gøre vores søgning mere præcist, da flere steder i landet kan hedde det samme.
    $lokation = $afstemNav . " " . $kommuneNav;

    // Erstatter mellemrum med + tegn, da Google Maps API ikke forstår mellemrum i nogle tilfælde.
    $validAdresse = str_replace(' ','+',$lokation);

    // Henter JSON data fra Google Maps API'en, med vores søgning
    $jsondata = file_get_contents('https://maps.google.com/maps/api/geocode/json?address='.$validAdresse.'&sensor=false&key=AIzaSyAFc7kSYjPyVI7-nk0Tra4DpYxKdA7uuJ8');

    // Afkoder JSON data
    $afkodet = json_decode($jsondata);

    // Henter specifikt latitude og longtitude fra den afkodet JSON kode.
    $latitude = $afkodet->results[0]->geometry->location->lat;
    $longitude = $afkodet->results[0]->geometry->location->lng;

    // Tilføjer latitude og longtitude
    mysqli_query($link, "UPDATE valgsteder SET `lat`='$latitude', `long`='$longitude' WHERE `OBJECTID`='$objectID'") or die(mysqli_error($link));

    // Bekræftelsesbesked, så vi kan se om det er rigtig data som er blevet sendt afsted.
    echo "{$objectID} - {$latitude}, {$longitude} - {$afstemNav} {$kommuneNav}<br>";
}