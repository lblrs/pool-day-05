<?php
function getFirstWord(string $sentence) {
    $x = explode(" ", $sentence);
    return $x[0];
};
