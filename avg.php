<?php

function srednia($liczby) {
    if (count($liczby) === 0) return 0;
    return array_sum($liczby) / count($liczby);
}

function srednia_wazona($liczby, $wagi) {
    if (count($liczby) !== count($wagi) || count($liczby) === 0) return 0;

    $suma = 0;
    $suma_wag = 0;

    for ($i = 0; $i < count($liczby); $i++) {
        $suma += $liczby[$i] * $wagi[$i];
        $suma_wag += $wagi[$i];
    }

    return $suma_wag == 0 ? 0 : $suma / $suma_wag;
}
