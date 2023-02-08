<?php
$min = rand(0, 59);
if ($min >= 0 && $min <= 15) {
    echo('В 1-ую ч');
    echo("\n". $min);
}
elseif ($min >= 16 && $min <= 31) {
    echo('Во 2-ую ч');
    echo("\n". $min);
}
elseif ($min >= 32 && $min <= 46) {
    echo('В 3-ю ч');
    echo("\n". $min);
}
elseif ($min >= 47 && $min <= 60) {
    echo('В 4-ую ч');
    echo("\n". $min);
}