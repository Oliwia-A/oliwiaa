<?php

function srednia($liczby) {
    if (count($liczby) === 0) return 0;
    return array_sum($liczby) / count($liczby);
}
