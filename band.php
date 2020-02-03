<?php

$album = ["heftig"=>25, "Herten en paarden"=>19.95, "Die dag"=>4.95, "Het kan niet"=>14.95];
$totaalKosten;

foreach($album as $naam=>$kosten){
    echo("'$naam'"." kost: ".$kosten.PHP_EOL);
    $totaalKosten += $kosten;
}
echo("Alle albums bij elkaar kosten: ".$totaalKosten.PHP_EOL);
$gemiddeld = ($totaalKosten / count($album));
$gemiddeldFix = round($gemiddeld,2);
echo("De gemiddelde album kost: ".$gemiddeldFix.PHP_EOL);

