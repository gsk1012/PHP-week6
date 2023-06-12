<?php

// $time = date("h");

// if ($time < 12) {
//     echo "Goedemorgen";
// } else if ($time >= 12 && $time <= 18) {
//     echo "Goedemiddag";
// } else {
//     echo "Goedenavond";
// }

// function gemmidelde($getal1, $getal2) {
//     $gemmidelde = ($getal1 / $getal2) / 2;
//     echo "Gemmidelde" . $gemmidelde;
// }

// function dagenTotEindeJaar() {
//     $huidigeDatum = date("Y-m-d");
//     $eindeJaar = date("Y-12-31");

//     $verschil = strtotime($eindeJaar) - strtotime($huidigeDatum);
//     $dagenOver = ceil($verschil / (60 * 60 * 24));

//     echo $dagenOver;
// }

// dagenTotEindeJaar();

function berekenTotaleLengte($strings) {
    $totaleLengte = 0;

    foreach ($strings as $string) {
      $totaleLengte = $totaleLengte + strlen($string);
    }

    return $totaleLengte;
}


  $array = ["Lorem", "Ipsum", "dolor", "sit", "amet", "amet"];
  $totaleLengte = berekenTotaleLengte($array);
  echo "Lengte: $totaleLengte";
?>